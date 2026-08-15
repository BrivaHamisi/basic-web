<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Author')
                    ->description('The person behind the testimonial.')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('position')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. CEO, Acme Inc.'),
                        FileUpload::make('photo')
                            ->image()
                            ->imageEditor()
                            ->disk('uploads')
                            ->directory('upload/testimonials')
                            ->maxSize(2048),
                    ])
                    ->columns(2),

                Section::make('Testimonial')
                    ->schema([
                        Textarea::make('message')
                            ->required()
                            ->rows(5),
                    ]),

                Section::make('Visibility')
                    ->schema([
                        Toggle::make('published')
                            ->label('Publish this testimonial')
                            ->default(true),
                    ]),
            ]);
    }
}
