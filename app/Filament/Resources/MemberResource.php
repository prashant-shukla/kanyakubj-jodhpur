<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Validation\Rule;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('First Name')
                    ->required()
                    ->unique(function () {
                        return Rule::unique('members', 'first_name')
                            ->where('last_name', request()->input('last_name'))
                            ->where('dob', request()->input('dob'));
                    }),
                
                Forms\Components\TextInput::make('last_name')
                    ->label('Last Name')
                    ->required(),

                Forms\Components\DatePicker::make('dob')
                    ->label('Date of Birth')
                    ->required(),

                Forms\Components\TextInput::make('father_name')
                    ->label('Father\'s Name'),

                Forms\Components\Textarea::make('residential_address')
                    ->label('Residential Address'),

                Forms\Components\Textarea::make('office_address')
                    ->label('Office Address'),

                Forms\Components\TextInput::make('resident_phone')
                    ->label('Resident Phone Number'),

                Forms\Components\TextInput::make('office_phone')
                    ->label('Office Phone Number'),

                Forms\Components\TextInput::make('mobile')
                    ->label('Mobile Number')
                    ->required()
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('gotra')
                    ->label('Gotra')
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
                    ->label('Aspad'),

                Forms\Components\Select::make('blood_group')
                    ->label('Blood Group')
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
                    ->label('Other Members')
                    ->schema([
                        Forms\Components\TextInput::make('full_name')
                            ->label('Full Name')
                            ->required(),

                        Forms\Components\Select::make('relation')
                            ->label('Relation')
                            ->options([
                                'father' => 'Father',
                                'mother' => 'Mother',
                                'son' => 'Son',
                                'daughter' => 'Daughter',
                                'spouse' => 'Spouse',
                                // Add more relations as needed
                            ])
                            ->required(),

                        Forms\Components\TextInput::make('education_qualification')
                            ->label('Education Qualification'),

                        Forms\Components\Select::make('maritial_status')
                            ->label('Maritial Status')
                            ->options([
                                'married' => 'Married',
                                'unmarried' => 'Unmarried',
                            ])
                            ->required(),

                        Forms\Components\DatePicker::make('dob')
                            ->label('Date of Birth'),

                        Forms\Components\TextInput::make('occupation')
                            ->label('Occupation'),

                        Forms\Components\Select::make('blood_group')
                            ->label('Blood Group')
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
                            ->label('Other Details'),
                    ])
                    ->columns(1)
                    ->collapsible(), // Makes the repeater collapsible
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
