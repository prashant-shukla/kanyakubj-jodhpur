<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommitteeMemberResource\Pages;
use App\Filament\Resources\CommitteeMemberResource\RelationManagers;
use App\Models\CommitteeMember;
use App\Models\Tenure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommitteeMemberResource extends Resource
{
    protected static ?string $model = CommitteeMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('image')
                ->label('Upload Image')
                ->required(), // Add validation if necessary
            TextInput::make('name')
                ->label('Name')
                ->required(), // Add validation if required
            TextInput::make('position')
                ->label('Position')
                ->required(), // Add validation if required
            TextInput::make('order_number')
                ->label('Order Number')
                ->placeholder('Enter position number')
                ->numeric()
                ->required(), // Add validation if required
            Select::make('tenure_id')
                ->label('Tenure')
                ->options(
                    Tenure::query()
                        ->orderBy('title')
                        ->pluck('title', 'id')
                        ->toArray()
                )
                ->required()
                ->searchable()
                ->placeholder('Select Tenure'), // Add a placeholder for better UX
        ]);
    }
    
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('position'),
                TextColumn::make('tenure.title')
                ->label('Tenure Title'),
                TextColumn::make('order_number'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListCommitteeMembers::route('/'),
            'create' => Pages\CreateCommitteeMember::route('/create'),
            'edit' => Pages\EditCommitteeMember::route('/{record}/edit'),
        ];
    }
}
