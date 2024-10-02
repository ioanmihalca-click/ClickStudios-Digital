<?php

namespace App\Filament\Resources;

use Closure;
use App\Models\Tag;
use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Support\Markdown;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PostResource\Pages;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationLabel = 'Articole';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titlu')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('meta_titlu')
                    ->required(),
                Forms\Components\Textarea::make('meta_descriere')
                    ->required(),
                Forms\Components\MarkdownEditor::make('continut')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\Group::make([
                    Forms\Components\FileUpload::make('imagine_principala')
                        ->image()
                        ->required()
                        ->columnSpan(2),

                    Forms\Components\FileUpload::make('audio_file')
                        ->label('Fișier audio (optional')
                        ->disk('public')
                        ->directory('temp-audio-uploads')
                        ->acceptedFileTypes(['audio/mpeg', 'audio/wav', 'audio/mp3'])
                        ->maxSize(10240) // 10MB
                        ->visibility('public')
                        ->columnSpan(2)
                        ->afterStateUpdated(function ($state, callable $set, callable $get) {
                            if (!$state) {
                                return;
                            }

                            if ($state instanceof TemporaryUploadedFile) {
                                Log::info('Procesare fișier audio încărcat', ['fileName' => $state->getClientOriginalName()]);

                                try {
                                    $fileContent = file_get_contents($state->getRealPath());
                                    $mimeType = $state->getMimeType();

                                    Log::info('Încercare de încărcare pe Cloudinary', [
                                        'fileSize' => strlen($fileContent),
                                        'mimeType' => $mimeType
                                    ]);

                                    $result = Cloudinary::upload("data:{$mimeType};base64," . base64_encode($fileContent), [
                                        'folder' => 'blog_audio',
                                        'resource_type' => 'auto'
                                    ]);

                                    Log::info('Fișier audio încărcat cu succes pe Cloudinary', ['publicId' => $result->getPublicId()]);

                                    $set('audio_cloudinary_id', $result->getPublicId());

                                    // Funcție pentru ștergerea fișierelor temporare
                                    $deleteTemporaryFile = function (TemporaryUploadedFile $file) {
                                        $paths = [
                                            storage_path("app/livewire-tmp/{$file->getFilename()}"),
                                            storage_path("app/public/temp-audio-uploads/{$file->getFilename()}"),
                                            public_path("storage/temp-audio-uploads/{$file->getFilename()}")
                                        ];

                                        foreach ($paths as $path) {
                                            if (file_exists($path)) {
                                                unlink($path);
                                                Log::info('Fișier temporar șters', ['path' => $path]);
                                            }
                                        }

                                        // Verificăm și ștergem și din disk-ul 'public' folosind Laravel Storage
                                        if (Storage::disk('public')->exists("temp-audio-uploads/{$file->getFilename()}")) {
                                            Storage::disk('public')->delete("temp-audio-uploads/{$file->getFilename()}");
                                            Log::info('Fișier temporar șters din storage public', ['fileName' => $file->getFilename()]);
                                        }
                                    };

                                    // Apelăm funcția de ștergere
                                    $deleteTemporaryFile($state);

                                    // Resetăm starea componentei FileUpload
                                    $set('audio_file', null);
                                } catch (\Exception $e) {
                                    Log::error('Eroare la încărcarea fișierului audio pe Cloudinary', [
                                        'error' => $e->getMessage(),
                                        'trace' => $e->getTraceAsString()
                                    ]);

                                    Notification::make()
                                        ->title('Eroare la încărcarea fișierului audio')
                                        ->body($e->getMessage())
                                        ->danger()
                                        ->send();
                                }
                            }
                        })
                        ->reactive()
                        ->afterStateHydrated(function ($state, callable $set) {
                            // Dacă avem un ID Cloudinary, afișăm un mesaj că fișierul audio există
                            if ($state) {
                                Notification::make()
                                    ->title('Fișier audio existent')
                                    ->body('Un fișier audio este deja asociat cu acest articol.')
                                    ->success()
                                    ->send();
                            }
                        })
                ])->columns(2),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Publicat la')
                    ->nullable(),

                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'nume')
                    ->preload(),

                Forms\Components\Hidden::make('audio_cloudinary_id'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titlu')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                ImageColumn::make('imagine_principala')->square(),
                TextColumn::make('tags.nume')
                    ->badge()
                    ->separator(', '),
                TextColumn::make('published_at')->dateTime('d-m-Y H:i')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->defaultSort('published_at', 'desc'); // Apply defaultSort directly to the Table instance
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    private function deleteTemporaryFile(TemporaryUploadedFile $file)
    {
        $paths = [
            storage_path("app/livewire-tmp/{$file->getFilename()}"),
            storage_path("app/public/temp-audio-uploads/{$file->getFilename()}"),
            public_path("storage/temp-audio-uploads/{$file->getFilename()}")
        ];

        foreach ($paths as $path) {
            if (file_exists($path)) {
                unlink($path);
                Log::info('Fișier temporar șters', ['path' => $path]);
            }
        }

        // Verificăm și ștergem și din disk-ul 'public' folosind Laravel Storage
        if (Storage::disk('public')->exists("temp-audio-uploads/{$file->getFilename()}")) {
            Storage::disk('public')->delete("temp-audio-uploads/{$file->getFilename()}");
            Log::info('Fișier temporar șters din storage public', ['fileName' => $file->getFilename()]);
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}