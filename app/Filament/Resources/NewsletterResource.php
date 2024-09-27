<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Newsletter;
use App\Models\Subscriber;
use Filament\Tables\Table;
use App\Mail\NewsletterMail;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsletterResource\Pages;
use App\Filament\Resources\NewsletterResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                TinyEditor::make('content')
                    ->required()
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject'),
                Tables\Columns\TextColumn::make('sent_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('send')
                    ->action(fn (Newsletter $record) => static::sendNewsletter($record))
                    ->requiresConfirmation()
                    ->hidden(fn (Newsletter $record) => $record->sent_at !== null),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }

    public static function sendNewsletter(Newsletter $newsletter)
{
    $subscribers = Subscriber::where('is_active', true)->get();

    foreach ($subscribers as $subscriber) {
        try {
            Mail::to($subscriber->email)->queue(new NewsletterMail($newsletter, $subscriber));
        } catch (\Exception $e) {
            Log::error('Eroare la trimiterea newsletter-ului', [
                'subscriber_id' => $subscriber->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    $newsletter->update(['sent_at' => now()]);
}
}