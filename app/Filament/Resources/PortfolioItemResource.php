<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioItemResource\Pages;
use App\Filament\Resources\PortfolioItemResource\RelationManagers;
use App\Models\PortfolioItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Tabs;

class PortfolioItemResource extends Resource
{
    protected static ?string $model = PortfolioItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Portfolio Item')
                    ->tabs([
                        Tabs\Tab::make('English Content')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(string $operation, $state, Forms\Set $set) =>
                                    $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                    ->label('Title (English)'),
                                Forms\Components\TextInput::make('short_description')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Short Description (English)'),
                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->rows(4)
                                    ->label('Description (English)'),
                                Forms\Components\TagsInput::make('technologies')
                                    ->separator(',')
                                    ->label('Technologies')
                                    ->suggestions([
                                        'Laravel',
                                        'Management',
                                        'AI Integration',
                                        'Streaming',
                                        'CDN',
                                        'Music',
                                        'Blog',
                                        'WordPress',
                                        'Prestashop'
                                    ]),
                                TagsInput::make('features')
                                    ->separator(',')
                                    ->label('Features (English)')
                                    ->placeholder('Add features')
                                    ->suggestions([
                                        'Complete member management',
                                        'Financial control and reporting',
                                        'Real-time attendance monitoring'
                                    ]),
                            ]),
                        Tabs\Tab::make('Romanian Content')
                            ->schema([
                                Forms\Components\TextInput::make('title_ro')
                                    ->maxLength(255)
                                    ->label('Title (Romanian)'),
                                Forms\Components\TextInput::make('short_description_ro')
                                    ->maxLength(255)
                                    ->label('Short Description (Romanian)'),
                                Forms\Components\Textarea::make('description_ro')
                                    ->rows(4)
                                    ->label('Description (Romanian)'),

                                TagsInput::make('features_ro')
                                    ->separator(',')
                                    ->label('Features (Romanian)')
                                    ->placeholder('Adaugă caracteristici')
                                    ->suggestions([
                                        'Management complet al membrilor',
                                        'Control financiar și raportare',
                                        'Monitorizare prezență în timp real'
                                    ]),
                            ]),
                        Tabs\Tab::make('Common Settings')
                            ->schema([
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('portfolio'),
                                Forms\Components\TextInput::make('youtube_url')
                                    ->label('Link Video YouTube')
                                    ->url()
                                    ->placeholder('https://www.youtube.com/watch?v=...')
                                    ->helperText('Optional - Enter the full YouTube video link'),
                                Forms\Components\TextInput::make('website_url')
                                    ->url(),
                                Forms\Components\Toggle::make('is_active')
                                    ->default(true),
                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Show in Featured Apps section')
                                    ->default(false),
                                Forms\Components\TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order');
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
            'index' => Pages\ListPortfolioItems::route('/'),
            'create' => Pages\CreatePortfolioItem::route('/create'),
            'edit' => Pages\EditPortfolioItem::route('/{record}/edit'),
        ];
    }
}
