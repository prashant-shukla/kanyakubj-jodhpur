<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Support\Enums\FontFamily;
use JaOcero\RadioDeck\Forms\Components\RadioDeck;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;
use Spatie\GoogleFonts\Fonts;

class Settings extends BaseSettings
{
    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('Community Information')
                        ->schema([
                            TextInput::make('community.name')
                                ->label('Community Name'),
                            TextInput::make('community.slogan')
                                ->label('Community Slogan'),
                            FileUpload::make('community.logo')
                                ->label('Community Logo'),
                            FileUpload::make('community.favicon')
                                ->label('Favicon'),
                            FileUpload::make('community.payment')
                                ->label('Payment QR Code'),
                            Textarea::make('community.donation_text')
                                ->label('Donation Description'),
                        ]),
                    Tabs\Tab::make('Contact')
                        ->schema([
                            TextInput::make('contact.email')
                                ->label('Email Address'),
                            TextInput::make('contact.phone')
                                ->label('Phone Number'),
                            TextInput::make('contact.fax')
                                ->label('Fax Number'),
                            TextInput::make('contact.address.street')
                                ->label('Street Address'),
                            TextInput::make('contact.address.city')
                                ->label('City'),
                            TextInput::make('contact.address.state')
                                ->label('State/Province'),
                            TextInput::make('contact.address.zip')
                                ->label('Zip Code'),
                            TextInput::make('contact.address.country')
                                ->label('Country'),
                            TextInput::make('contact.google_maps')
                                ->label('Google Maps Integration'),
                        ]),
                    Tabs\Tab::make('Time & Date Settings')
                        ->schema([
                            Select::make('time.date_format')
                                ->label('Date Format')
                                ->options(function () {
                                    $dateFormats = [
                                        'Y-m-d' => now()->format('Y-m-d'),  // 2024-08-09
                                        'Y/m/d' => now()->format('Y/m/d'),  // 2024/08/09
                                        'Y.m.d' => now()->format('Y.m.d'),  // 2024.08.09
                                        'd/m/Y' => now()->format('d/m/Y'),  // 09/08/2024
                                        'd-m-Y' => now()->format('d-m-Y'),  // 09-08-2024
                                        'd.m.Y' => now()->format('d.m.Y'),  // 09.08.2024
                                        'm/d/Y' => now()->format('m/d/Y'),  // 08/09/2024
                                        'm-d-Y' => now()->format('m-d-Y'),  // 08-09-2024
                                        'm.d.Y' => now()->format('m.d.Y'),  // 08.09.2024
                                        'd M Y' => now()->format('d M Y'),  // 09 Aug 2024
                                        'd F Y' => now()->format('d F Y'),  // 09 August 2024
                                        'M d, Y' => now()->format('M d, Y'),  // Aug 09, 2024
                                        'F d, Y' => now()->format('F d, Y'),  // August 09, 2024
                                        'l, F d, Y' => now()->format('l, F d, Y'),  // Friday, August 09, 2024
                                        'l, d F Y' => now()->format('l, d F Y'),  // Friday, 09 August 2024
                                        'Ymd' => now()->format('Ymd'),  // 20240809
                                        'Y-m' => now()->format('Y-m'),  // 2024-08
                                        'Y/m' => now()->format('Y/m'),  // 2024/08
                                        'Y.m' => now()->format('Y.m'),  // 2024.08
                                        'm-Y' => now()->format('m-Y'),  // 08-2024
                                        'm/Y' => now()->format('m/Y'),  // 08/2024
                                        'm.Y' => now()->format('m.Y'),  // 08.2024
                                        'd-M-Y' => now()->format('d-M-Y'),  // 09-Aug-2024
                                        'd/M/Y' => now()->format('d/M/Y'),  // 09/Aug/2024
                                        'd.M.Y' => now()->format('d.M.Y'),  // 09.Aug.2024
                                        'jS F Y' => now()->format('jS F Y'),  // 9th August 2024
                                        'D, d M Y' => now()->format('D, d M Y'),  // Fri, 09 Aug 2024
                                        'D, d F Y' => now()->format('D, d F Y'),  // Fri, 09 August 2024
                                        'l, d M Y' => now()->format('l, d M Y'),  // Friday, 09 Aug 2024
                                        'D, M d, Y' => now()->format('D, M d, Y'),  // Fri, Aug 09, 2024
                                        'D, F d, Y' => now()->format('D, F d, Y'),  // Fri, August 09, 2024
                                        'l, M d, Y' => now()->format('l, M d, Y'),  // Friday, Aug 09, 2024
                                        'M j, Y' => now()->format('M j, Y'),  // Aug 9, 2024
                                        'F j, Y' => now()->format('F j, Y'),  // August 9, 2024
                                        'j M Y' => now()->format('j M Y'),  // 9 Aug 2024
                                        'j F Y' => now()->format('j F Y'),  // 9 August 2024
                                        'Y M d' => now()->format('Y M d'),  // 2024 Aug 09
                                        'Y F d' => now()->format('Y F d'),  // 2024 August 09
                                        'd M, Y' => now()->format('d M, Y'),  // 09 Aug, 2024
                                        'd F, Y' => now()->format('d F, Y'),  // 09 August, 2024
                                        'l d F Y' => now()->format('l d F Y'),  // Friday 09 August 2024
                                        'D d M Y' => now()->format('D d M Y'),  // Fri 09 Aug 2024
                                        'M jS, Y' => now()->format('M jS, Y'),  // Aug 9th, 2024
                                        'F jS, Y' => now()->format('F jS, Y'),  // August 9th, 2024
                                        'M-d-Y' => now()->format('M-d-Y'),  // Aug-09-2024
                                        'Y-M-d' => now()->format('Y-M-d'),  // 2024-Aug-09
                                    ];


                                    return $dateFormats;
                                }),
                            Select::make('time.time_format')
                                ->label('Time Format')
                                ->options([
                                    '12-hour' => '12-hour',
                                    '24-hour' => '24-hour',
                                ]),
                            TextInput::make('time.operating_hours')
                                ->label('Operating Hours'),
                        ]),
                    Tabs\Tab::make('Language & Localization')
                        ->schema([
                            Select::make('localization.default_language')
                                ->label('Default Language')
                                ->options([
                                    //includedLanguages: 'en,hi,gu,ta,te,bn,kn,ml,mr,pa,or',
                                    'en' => 'English',
                                    'hi' => 'Hindi',
                                    'gu' => 'Gujrati',
                                    'mr' => 'Marathi',
                                    'ta' => 'Tamil',
                                    'te' => 'Telugu',
                                    'bn' => 'Bengali',
                                    'kn' => 'Kannada',
                                    'ml' => 'Malayalam',
                                    'or' => 'Odia',
                                    'pa' => 'Punjabi',
                                ]),
                            Toggle::make('localization.multi_language')
                                ->label('Multi-language Support'),
                        ]),
                    Tabs\Tab::make('Social Media Links')
                        ->schema([
                            TextInput::make('social.facebook')->url()
                                ->label('Facebook Page URL'),
                            TextInput::make('social.instagram')->url()
                                ->label('Instagram URL'),
                            TextInput::make('social.twitter')->url()
                                ->label('Twitter URL'),
                            TextInput::make('social.youtube')->url()
                                ->label('YouTube Channel'),
                            TextInput::make('social.whatsapp')->url()
                                ->label('Whatsapp URL'),
                        ]),
                    Tabs\Tab::make('Theme Customization')
                        ->schema([
                            ColorPicker::make('theme.primary_color')
                                ->label('Primary Color'),
                            ColorPicker::make('theme.secondary_color')
                                ->label('Secondary Color'),
                            Select::make('theme.font_family')
                                ->label('Font Family'),
                            // Select::make('theme.font_family')
                            // ->allowHtml()
                            // ->options(
                            //     FontFamily::cases(),
                            // ),
                            Select::make('theme.button_styles')
                                ->label('Button Styles')->options(["button1" => "style1", "button2" => "style2", "button3" => "style3", "button4" => "style4"]),
                            Select::make('theme.layout_options')
                                ->label('Header position')
                                ->options(['sticky-top' => 'Sticky', 'static' => 'Static']),
                        ]),
                    Tabs\Tab::make('Branding & SEO')
                        ->schema([
                            TextInput::make('seo.meta_title')
                                ->label('Meta Title'),
                            TextInput::make('seo.meta_description')
                                ->label('Meta Description'),
                            TagsInput::make('seo.keywords')
                                ->label('Keywords'),
                            TagsInput::make('seo.open_graph_tags')
                                ->label('Open Graph Tags'),
                            TextInput::make('seo.google_analytics')
                                ->label('Google Analytics'),
                        ]),
                    Tabs\Tab::make('System Maintenance')
                        ->schema([
                            Select::make('maintenance.mode')
                                ->label('Maintenance Mode')
                                ->options(['enabled' => 'Enabled', 'disabled' => 'Disabled']),
                            TextInput::make('maintenance.custom_message')
                                ->label('Custom Maintenance Message'),
                            Select::make('maintenance.automatic_updates')
                                ->label('Automatic Updates')
                                ->options(['enabled' => 'Enabled', 'disabled' => 'Disabled']),
                        ]),
                ]),
        ];
    }
}
