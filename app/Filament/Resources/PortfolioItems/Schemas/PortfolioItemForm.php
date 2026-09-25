<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use App\Enums\PortfolioStatus;
use App\Filament\Resources\PortfolioItems\Actions\LlmPromptAction;
use App\Helpers\PortfolioMarkdown;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Markdown')
                            ->schema([
                                FileUpload::make('markdown_path')
                                    ->label('PORTFOLIO.md')
                                    ->helperText('Fișierul generat cu promptul LLM. La încărcare completează automat celelalte tab-uri; verifică-le înainte de salvare.')
                                    ->disk('local')
                                    ->directory('portfolio-markdown')
                                    ->acceptedFileTypes(['text/markdown', 'text/x-markdown', 'text/plain'])
                                    ->mimeTypeMap(['md' => 'text/markdown'])
                                    ->maxSize(512)
                                    ->previewable(false)
                                    ->downloadable()
                                    ->live()
                                    ->afterStateUpdated(fn (mixed $state, Set $set, string $operation) => self::fillFromMarkdown($state, $set, $operation))
                                    ->hintAction(LlmPromptAction::make('llmPromptHint')),
                            ]),
                        Tab::make('Content EN')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (?string $state, Set $set, string $operation): void {
                                        if ($operation === 'create') {
                                            $set('slug', Str::slug((string) $state));
                                        }
                                    }),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->disabled()
                                    ->dehydrated(),
                                TextInput::make('category')
                                    ->maxLength(80),
                                Textarea::make('short_description')
                                    ->required()
                                    ->columnSpanFull(),
                                MarkdownEditor::make('description')
                                    ->required()
                                    ->fileAttachments(false)
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Content RO')
                            ->schema([
                                TextInput::make('title_ro'),
                                TextInput::make('category_ro')
                                    ->maxLength(80),
                                Textarea::make('short_description_ro')
                                    ->columnSpanFull(),
                                MarkdownEditor::make('description_ro')
                                    ->fileAttachments(false)
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Media')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('portfolio')
                                    ->visibility('public'),
                                TextInput::make('website_url')
                                    ->url(),
                                TextInput::make('youtube_url')
                                    ->url(),
                            ]),
                        Tab::make('Details')
                            ->schema([
                                Select::make('status')
                                    ->options(PortfolioStatus::options()),
                                TextInput::make('year')
                                    ->numeric()
                                    ->minValue(2000)
                                    ->maxValue(now()->year + 1),
                                TagsInput::make('stack')
                                    ->placeholder('Laravel 12, Livewire, …'),
                                Toggle::make('is_active')
                                    ->default(true),
                                Toggle::make('is_featured')
                                    ->default(false),
                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    /**
     * Parses a freshly uploaded PORTFOLIO.md and copies its values into the form.
     * An invalid file is removed from the field so it is never stored.
     */
    private static function fillFromMarkdown(mixed $state, Set $set, string $operation): void
    {
        $file = Arr::first(Arr::wrap($state), fn (mixed $file): bool => $file instanceof TemporaryUploadedFile);

        if ($file === null) {
            return;
        }

        try {
            $attributes = PortfolioMarkdown::parse($file->get());
        } catch (ValidationException $exception) {
            $set('markdown_path', null);

            Notification::make()
                ->danger()
                ->title('Fișierul nu poate fi importat')
                ->body(new HtmlString(implode('<br>', array_map(e(...), Arr::flatten($exception->errors())))))
                ->persistent()
                ->send();

            return;
        }

        // Changing the slug of a published item would break its public URL.
        if ($operation !== 'create') {
            unset($attributes['slug']);
        }

        foreach ($attributes as $field => $value) {
            $set($field, $value);
        }

        Notification::make()
            ->success()
            ->title('Câmpurile au fost completate din '.$file->getClientOriginalName())
            ->send();
    }
}
