<?php

namespace App\Filament\Pages;

use App\Models\PageSection;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ColorPicker;

class HeroSection extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationLabel = 'Hero Section';
    protected static ?string $navigationParent = 'Home';

    protected static string $view = 'filament.pages.hero-section';
    public ?array $data = [];

    public function mount(): void
    {
        $settings = PageSection::where('section_key', 'hero')->first();

        $this->form->fill($settings ? $settings->toArray() : []);
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Grid::make(2)
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
                ])
        ];
    }
    protected function getFormModel(): string
    {
        return PageSection::class;
    }
    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        $settings = PageSection::where('section_key', 'hero')->first();

        if ($settings) {
            $settings->update($data);
        } else {
            PageSection::create($data);
        }

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}

