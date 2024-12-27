<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Text;
use Illuminate\Validation\Rule;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Tables\Columns\ImageColumn;


class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('प्रथम नाम / First Name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->label('उपनाम / Last Name')
                    ->required(),
                Forms\Components\TextInput::make('avatar')
                    // ->default('N/A')
                    ->visible(false)
                    ->disabled()
                    , 
                FileUpload::make('avatar')
                    ->label('प्रोफाइल फोटो / Profile Photo')
                    ->directory('uploads/profile_images') // Set the directory where files will be uploaded
                    ->image()
                    ->maxSize(2048) // Limit the file size to 2MB
                    ->hint('Maximum file size: 2MB')
                    // ->imageEditor()
                    // ->reactive()
                    ->columnSpan('full') // Use 'full' to make it span across all available columns

                    ,
                    // ->afterStateUpdated(fn ($state) => $this->uploadImage($state)), 
                    // ->storeFileNamesIn('avatar'), 
                Forms\Components\DatePicker::make('dob')
                    ->label('जन्मतिथि / Date of Birth')
                    ->required(),
                Forms\Components\TextInput::make('father_name')
                    ->label('पिता का नाम / Father\'s Name')
                    ->nullable(),
                Forms\Components\Textarea::make('residential_address')
                    ->label('निवास पता / Residential Address')
                    ->nullable(),
                Forms\Components\Textarea::make('office_address')
                    ->label('कार्यालय पता / Office Address')
                    ->nullable(),
                Forms\Components\TextInput::make('occupation')
                    ->label('व्यवसाय / Occupation'),
                Forms\Components\TextInput::make('resident_phone')
                    ->label('फोन नंबर (निवास) / Resident Phone')
                    ->nullable(),
                Forms\Components\TextInput::make('office_phone')
                    ->label('फोन नंबर (कार्यालय) / Office Phone')
                    ->nullable(),
                Forms\Components\TextInput::make('mobile')
                    ->label('मोबाइल नंबर / Mobile')
                    ->required()
                    ->unique(Member::class, 'mobile', fn ($record) => $record) // Automatically handles both create and edit modes
                    // ->unique(Member::class, 'mobile')
                    ,
                Forms\Components\Select::make('gotra')
                    ->label('गोत्र / Gotra')
                    ->options([
                        'kashyap' => 'कश्यप / Kashyap', 
                        'bhardwaj' => 'भरद्वाज / Bhardwaj', 
                        'shandilya' => 'शांडिल्य / Shandilya', 
                        'saankrit' => ' सांकृत / Saankrit', 
                        'katyayan' => 'कात्यायन / Katyayan', 
                        'upmanyu' => 'उपमन्यु / Upmanyu', 
                        'kaashyap' => 'काश्यप / Kaashyap', 
                        'dhananjaya' => 'धनंजय / Dhananjaya', 
                        'kavistha' => 'कविष्ठा / Kavistha', 
                        'gautam' => 'गौतम / Gautam', 
                        'garg' => 'गर्ग  / Garg', 
                        'bhaardwaj' => 'भारद्वाज / Bhaardwaj', 
                        'kaushik' => 'कौशिक / Kaushik', 
                        'vashishtha' => 'वशिष्ठ / Vashishtha', 
                        'vatsa' => 'वत्स / Vatsa', 
                        'parashar' => 'पराशर / Parashar'
                        // Add more gotras as needed
                    ])
                    ->required(),
                Forms\Components\TextInput::make('aspad')
                    ->label('अस्पद / Aspad')
                    ->nullable(),
                Forms\Components\Select::make('blood_group')
                    ->label('ब्लड ग्रुप / Blood Group')
                    ->options([
                        'A+' => 'A+',
                        'A-' => 'A-',
                        'B+' => 'B+',
                        'B-' => 'B-',
                        'O+' => 'O+',
                        'O-' => 'O-',
                        'AB+' => 'AB+',
                        'AB-' => 'AB-',
                    ]),

                    Forms\Components\Repeater::make('other_members')
                    ->addActionLabel('अधिक सदस्य जोड़ें / Add more members')
                    ->label('सदस्य विवरण / Member Details')
                    ->schema([
                        // Textarea::make('instruction')
                        // ->label('निर्देश / Instructions')
                        // ->placeholder("**Father's name along with the wife and son's/daughter's name.**")
                        // ->default("**Father's name along with the wife and son's/daughter's name.**"),
                    
                        Forms\Components\TextInput::make('full_name')
                            ->label('पूरा नाम / Full Name')
                            ->placeholder("Father's name along with the wife and son's/daughter's name.")
                            ->required(),

                        // Forms\Components\Select::make('sdw_of')
                        //     ->label(' ')
                        //     ->options([
                        //         'so' => 'पुत्र / Son of',
                        //         'do' => 'पुत्री / Daughter of',
                        //         'wo' => 'पति / Wife of',
                        //         // Add more relations as needed
                        //     ]),
                        
                        // Forms\Components\TextInput::make('sdw_name')
                        //     ->label(' '),

                        Forms\Components\Select::make('relation')
                            ->label('मुखिया से संबंध / Relation with Head')
                            ->options([
                                'father' => 'पिता / Father',
                                'mother' => 'माता / Mother',
                                'son' => 'पुत्र / Son',
                                'daughter' => 'पुत्री / Daughter',
                                'spouse' => 'जीवनसाथी / Spouse',
                                'brother' => 'भाई / Brother',
                                'sister' => 'बहन / Sister',
                                'grandson' => 'पोता / Grand Son',
                                'granddaughter' => 'पोती / Grand Daughter',
                                'daughterinlaw' => 'बहू / Daughter in law',
                                // Add more relations as needed
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('education_qualification')
                            ->label('शैक्षणिक योग्यता / Education Qualification'),

                        Forms\Components\Select::make('maritial_status')
                            ->label('वैवाहिक स्थिति / Maritial Status')
                            ->options([
                                'married' => 'विवाहित / Married',
                                'unmarried' => 'अविवाहित / Unmarried',
                                'divorced' => 'तलाकशुदा / Divorced',
                                'widowed' => 'विधवा / विदुर / Widowed',  
                            ])
                            ->required(),

                        Forms\Components\DatePicker::make('dob')
                            ->label('जन्मतिथि / Date of Birth')
                            ->required(),
                        Forms\Components\TextInput::make('occupation')
                            ->label('व्यवसाय / Occupation'),

                        Forms\Components\Select::make('blood_group')
                            ->label('ब्लड ग्रुप / Blood Group')
                            ->options([
                                'A+' => 'A+',
                                'A-' => 'A-',
                                'B+' => 'B+',
                                'B-' => 'B-',
                                'O+' => 'O+',
                                'O-' => 'O-',
                                'AB+' => 'AB+',
                                'AB-' => 'AB-',
                            ]),

                        Forms\Components\Textarea::make('other')
                            ->label('अन्य विवरण / Other Details'),
                    ])
                    ->columns(3) // Single column layout
                    ->columnSpan('full') // Use 'full' to make it span across all available columns
                    ->collapsible(), // Makes the repeater collapsible
                    Toggle::make('is_active') // This toggle will control whether the TextInput is active or not
                      ->label('Activate Status Input')
                      ->default(false),
            ]);
    }

    public function uploadImage(TemporaryUploadedFile $file)
    {
        $this->avatar = $file->store('profile');
        return true;
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('avatar')
                    ->label('Profile Image')
                    // Use the appropriate disk, typically 'public' or 's3'
                    // ->pathPrefix('storage/uploads/profile_images/') // Prefix the path to the image directory
                    ->size(100, 100) // Set the size of the preview image
                    // ->square()
                    ->defaultImageUrl(url('https://placehold.jp/30/dd6699/ffffff/100x100.png?text=NO+IMAGE'))
                    ->extraAttributes(['class' => 'inline-block']), 

                TextColumn::make('first_name')
                    ->label('First Name'),
                
                TextColumn::make('last_name')
                    ->label('Last Name'),
                
                TextColumn::make('mobile')
                    ->label('Mobile'),
                
                TextColumn::make('gotra')
                    ->label('Gotra'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
