<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventRegistrationResource\Pages;
use App\Filament\Resources\EventRegistrationResource\RelationManagers;
use App\Models\EventRegistration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventRegistrationResource extends Resource
{
    protected static ?string $model = EventRegistration::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Forms\Components\TextInput::make('full_name')
            //     ->label('Full Name')
            //     ->required(),
            // Forms\Components\TextInput::make('mobile')
            //     ->label('Mobile')
            //     ->required()
            //     ->numeric(),
            // Forms\Components\Textarea::make('comments')
            //     ->label('Any comments/message')
            //     ->nullable(),
            // Forms\Components\Toggle::make('attending')
            //     ->label('Are you attending?')
            //     ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('full_name')->label('Full Name'),
            Tables\Columns\TextColumn::make('mobile')->label('Mobile'),
            Tables\Columns\TextColumn::make('comments')->label('Comments'),
            Tables\Columns\BooleanColumn::make('attending')->label('Attending'),
        ])
        ->filters([
            // Add any necessary filters
        ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEventRegistrations::route('/'),
            'create' => Pages\CreateEventRegistration::route('/create'),
            'edit' => Pages\EditEventRegistration::route('/{record}/edit'),
        ];
    }
}
