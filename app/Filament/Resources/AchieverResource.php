<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchieverResource\Pages;
use App\Models\Achiever;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AchieverResource extends Resource
{
    protected static ?string $model = Achiever::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                FileUpload::make('image'),
                TextInput::make('name'),
                TextInput::make('field'),
                TextInput::make('year'),
                Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                ImageColumn::make('image'),
                TextColumn::make('field'),
                TextColumn::make('year'),
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchievers::route('/'),
            'create' => Pages\CreateAchiever::route('/create'),
            'edit' => Pages\EditAchiever::route('/{record}/edit'),
        ];
    }
}
