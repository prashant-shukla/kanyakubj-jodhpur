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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image'),
                TextInput::make('name'),
                TextInput::make('position'),
                Select::make('tenure_id')
                ->label('Tenure')
                ->options(Tenure::all()->pluck('title', 'id'))
                ->required()
                ->searchable(),
                TextInput::make("facebook")->label('Facebook link'),
                TextInput::make("instagram")->label('Instagram link'),
                TextInput::make("x")->label('X link'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                ImageColumn::make('image'),
                TextColumn::make('position'),
                TextColumn::make('tenure_id'),
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
