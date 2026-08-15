<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Content')
                    ->description('The headline copy shown on the homepage slider.')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. We Build Digital Products'),
                        Textarea::make('description')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('link')
                            ->url()
                            ->placeholder('https://example.com')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->disk('uploads')
                            ->directory('upload/sliders')
                            ->maxSize(4096)
                            ->columnSpanFull(),
                    ]),

                Section::make('Visibility')
                    ->schema([
                        Toggle::make('published')
                            ->label('Publish this slider')
                            ->default(true),
                    ]),
            ])
            ->columns(2);
    }
}
