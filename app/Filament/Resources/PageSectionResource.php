<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageSectionResource\Pages\ManagePageSections;
use App\Models\PageSection;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use App\Filament\Resources\ProjectResource\Pages;
use Filament\Forms\Components\Textarea;

class PageSectionResource extends Resource
{
    protected static ?string $model = PageSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('Section Basic Info')
                    ->columns(2)
                    ->schema([
                        Select::make('page_name')
                            ->options([
                                'home' => 'Home',
                                'about' => 'About',
                                'contact' => 'Contact',
                                // Add more pages as needed
                            ])
                            ->required(),

                        Select::make('section_key')
                            ->options([
                                'hero' => 'Hero Section',
                                'features' => 'Features Section',
                                'testimonials' => 'Testimonials Section',
                                // Add more section types
                            ])
                            ->required(),

                        TextInput::make('order')
                            ->numeric()
                            ->default(0),
                    ]),

                FormSection::make('Hero Section Content')
                    ->schema([
                        TextInput::make('content.title')
                            ->label('Title')
                            ->maxLength(255),

                        TextInput::make('content.subtitle')
                            ->label('Subtitle')
                            ->maxLength(500),
                        Textarea::make('content.description')
                            ->label('Description')
                            ->rows(3)
                            ->maxLength(500),

                        Repeater::make('content.slides')
                            ->label('Slides')
                            ->schema([
                                FileUpload::make('image')
                                    ->directory('hero-slides')
                                    ->image()
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9')
                                    ->label('Slide Image'),

                                TextInput::make('alt')
                                    ->label('Image Alt Text')
                                    ->maxLength(255),
                            ])
                            ->columnSpanFull()
                            ->defaultItems(1)
                            ->addActionLabel('Add Slide'),
                        FormSection::make('Buttons')
                            ->schema([
                                TextInput::make('content.button-text')
                                    ->label('Button Text')
                                    ->maxLength(50),
                                TextInput::make('content.button-url')
                                    ->label('Button URL')
                                    ->maxLength(50),
                                TextInput::make('content.button-play-text')
                                    ->label('Button Play Text')
                                    ->maxLength(50),
                                TextInput::make('content.button-play-url')
                                    ->label('Button Play URL')
                                    ->maxLength(50),
                            ])
                            ->columns(2),
                    ]),

                FormSection::make('Section Settings')
                    ->columns(2)
                    ->schema([
                        ColorPicker::make('settings.background_color')
                            ->label('Background Color'),

                        ColorPicker::make('settings.text_color')
                            ->label('Text Color'),

                        Select::make('is_active')
                            ->label('Section Status')
                            ->options([
                                true => 'Active',
                                false => 'Inactive',
                            ])
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('section_key')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('content.title')
                    ->label('Title')
                    ->default('N/A'),

                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('order')
                    ->sortable(),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePageSections::route('/'),
        ];
    }
}
