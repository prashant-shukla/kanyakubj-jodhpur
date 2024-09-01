<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

use Closure;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Actions\Action;
use Illuminate\Validation\Rule;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class MemberForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $first_name;
    public $last_name;
    public $avatar;
    public $image;
    public $dob;
    public $father_name;
    public $residential_address;
    public $office_address;
    public $resident_phone;
    public $office_phone;
    public $mobile;
    public $gotra;
    public $aspad;
    public $blood_group;

    public $other_members = [];

    public function mount(): void
    {
        $this->form->fill([
            'other_members' => [
                ['relation_with_head' => '', 'education' => '', 'is_married' => null, 'age' => '', 'occupation' => '', 'other_details' => '']
            ]
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Wizard::make([
                Wizard\Step::make('Head')
                    ->label('मुखिया की जानकारी / Head Member')
                    ->completedIcon('heroicon-m-hand-thumb-up')
                    ->description('मुखिया की जानकारी भरने के बाद `आगे` बटन पर क्लिक करें / Click on `Next` button once filled all the information of Head Member')
                    ->schema([
                        Section::make()
                        ->columns([
                            'sm' => 2,
                            'xl' => 2,
                            '2xl' => 2,
                        ])
                        ->schema([
                            Forms\Components\TextInput::make('first_name')
                                ->label('प्रथम नाम / First Name')
                                ->required(),
                            Forms\Components\TextInput::make('last_name')
                                ->label('उपनाम / Last Name')
                                ->required(),
                            Forms\Components\TextInput::make('avatar')->hidden(), 
                            FileUpload::make('image')
                                ->label('प्रोफाइल फोटो / Profile Photo')
                                ->image()
                                ->imageEditor()
                                ->reactive()
                                ->afterStateUpdated(fn ($state) => $this->uploadImage($state)), 
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
                            Forms\Components\TextInput::make('resident_phone')
                                ->label('फोन नंबर (निवास) / Resident Phone')
                                ->nullable(),
                            Forms\Components\TextInput::make('office_phone')
                                ->label('फोन नंबर (कार्यालय) / Office Phone')
                                ->nullable(),
                            Forms\Components\TextInput::make('mobile')
                                ->label('मोबाइल नंबर / Mobile')
                                ->required()
                                ->unique(Member::class, 'mobile'),
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
                        ])
                    ]),
                Wizard\Step::make('Members')
                    ->label('सदस्यों की जानकारी / Members')
                    ->completedIcon('heroicon-m-hand-thumb-up')
                    ->description('सदस्यों की जानकारी भरने के बाद `सबमिट` बटन पर क्लिक करें / Click on `Submit` button once filled all the information of Members')
                    ->schema([
                        Section::make()
                        ->columns(1)
                        ->schema([
                            Forms\Components\Repeater::make('other_members')
                                ->addActionLabel('अधिक सदस्य जोड़ें / Add more members')
                                ->label('सदस्य विवरण / Member Details')
                                ->schema([
                                    Forms\Components\TextInput::make('full_name')
                                        ->label('पूरा नाम / Full Name')
                                        ->required(),
            
                                    Forms\Components\Select::make('relation')
                                        ->label('मुखिया से संबंध / Relation with Head')
                                        ->options([
                                            'father' => 'पिता / Father',
                                            'mother' => 'माता / Mother',
                                            'son' => 'पुत्र / Son',
                                            'daughter' => 'पुत्री / Daughter',
                                            'spouse' => 'जीवनसाथी / Spouse',
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
                                        ->label('जन्मतिथि / Date of Birth'),
            
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
                                ->columns(2) // Single column layout
                                ->collapsible(), // Makes the repeater collapsible
                        ])
                    ])
            ])
            // ->persistStepInQueryString()
            ->nextAction(
                fn (Action $action) => $action->label('आगे / Next'),
            )
            ->previousAction(
                fn (Action $action) => $action->label('पीछे / Back'),
            )
        ];
    }



    public function uploadImage(TemporaryUploadedFile $file)
    {
        // $set = new Closure;
        // $set('avatar', $file->store('profile'));
        $this->avatar = $file->store('profile');
    }


    public function submit()
    {
        $validatedData = $this->form->getState();
        
        $validatedData = $this->validate([
            'first_name' => [
                'required',
                'string',
                Rule::unique('members')->where(function ($query) {
                    return $query->where('last_name', $this->last_name)
                                ->where('dob', $this->dob);
                }),
            ],
            'last_name' => 'required|string',
            'avatar' => 'string',
            'dob' => 'required|date',
            'father_name' => 'string|max:255',
            'residential_address' => 'string|max:255',
            'office_address' => 'string|max:255',
            'resident_phone' => 'string|max:20',
            'office_phone' => 'string|max:20',
            'mobile' => 'required|unique:members,mobile',
            'gotra' => 'string|max:255',
            'aspad' => 'string|max:255',
            'blood_group' => 'string|max:255',

            // Add other validation rules as needed
            'other_members.*.full_name' => 'required|string|max:255',
            'other_members.*.relation' => 'required|string',
            'other_members.*.maritial_status' => 'required|string',
            'other_members.*.education_qualification' => 'string',
            'other_members.*.dob' => 'string',
            'other_members.*.occupation' => 'string',
            'other_members.*.blood_group' => 'string',
            'other_members.*.other' => 'string',
            // Add validation for other fields in repeater
        ], [
            'first_name.unique' => "ऐसा लगता है कि आप पहले से ही पंजीकृत हैं: समान प्रथम नाम, अंतिम नाम और जन्म तिथि वाला एक सदस्य पहले से मौजूद है, कृपया अधिक जानकारी के लिए व्यवस्थापक से संपर्क करें।\n Looks like you\'re already registered: A member with the same first name, last name, and date of birth already exists, please contact admin for more details .",
            // Add other custom messages here as needed
        ]);

        Member::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'avatar' => $validatedData['avatar'],
            'dob' => $validatedData['dob'],
            'father_name' => $validatedData['father_name'],
            'residential_address' => $validatedData['residential_address'],
            'office_address' => $validatedData['office_address'],
            'resident_phone' => $validatedData['resident_phone'],
            'office_phone' => $validatedData['office_phone'],
            'mobile' => $validatedData['mobile'],
            'gotra' => $validatedData['gotra'],
            'aspad' => $validatedData['aspad'],
            'blood_group' => $validatedData['blood_group'],
            'other_members' => $validatedData['other_members'],
        ]);

        session()->flash('message', 'Member successfully registered.');

        // Reset the form fields
        $this->form->fill([]);

        return redirect('registration-success');
    }


    public function render()
    {
        return view('livewire.member-form');    
    }
}
