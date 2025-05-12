<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\PageSection;
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

class AboutSection extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.about-section';
    protected static ?string $navigationGroup = 'Sections';
    public ?array $data = [];

    public function mount(): void
    {
        $settings = PageSection::where('section_key', 'about-us')->first();

        $this->form->fill($settings ? $settings->toArray() : []);
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Grid::make(2)
                ->schema([
                    FormSection::make('About Us Section Content')
                        ->columns(2)
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
                                ->columnSpanFull()
                                ->maxLength(500),
                            FileUpload::make('content.image_1')
                                ->directory('about-us/image')
                                ->image()
                                ->imageResizeMode('cover')
                                ->imageCropAspectRatio('5:7')
                                ->label('1st Image'),
                            FileUpload::make('content.image_2')
                                ->directory('about-us/image')
                                ->image()
                                ->imageResizeMode('cover')
                                ->imageCropAspectRatio('5:7')
                                ->label('2nd Image'),

                            Repeater::make('content.data')
                                ->label('Data')
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Title')
                                        ->maxLength(255),
                                    TextInput::make('description')
                                        ->label('Description')
                                        ->maxLength(255),

                                    FileUpload::make('icon')
                                        ->directory('about-us/icon')
                                        ->image()
                                        ->label('Icon'),
                                ])
                                ->columnSpanFull()
                                ->defaultItems(1)
                                ->addActionLabel('Add Data'),
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

        $settings = PageSection::where('section_key', 'about-us')->first();

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
