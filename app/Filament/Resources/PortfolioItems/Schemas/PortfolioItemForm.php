<?php

namespace App\Filament\Resources\PortfolioItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Content EN')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->disabled()
                                    ->dehydrated(),
                                Textarea::make('short_description')
                                    ->required()
                                    ->columnSpanFull(),
                                Textarea::make('description')
                                    ->required()
                                    ->rows(7)
                                    ->columnSpanFull(),
                            ]),
                        Tab::make('Content RO')
                            ->schema([
                                TextInput::make('title_ro'),
                                Textarea::make('short_description_ro')
                                    ->columnSpanFull(),
                                Textarea::make('description_ro')
                                    ->rows(7)
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
                                    ->url()
                                    ->prefix('https://'),
                                TextInput::make('youtube_url')
                                    ->url()
                                    ->prefix('https://'),
                            ]),
                        Tab::make('Details')
                            ->schema([
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
}
