<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TributeResource\Pages;
use App\Models\Tribute;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TributeResource extends Resource
{
    protected static ?string $model = Tribute::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->image()->directory('tributes')->avatar()->columnSpanFull()->alignCenter(),
                TextInput::make('name')->columnSpan(2),
                DatePicker::make('d_o_b')->label('date of birth'),
                DatePicker::make('d_o_d')->label('date of passing'),
                Textarea::make('description')->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                ImageColumn::make('image'),
                TextColumn::make('d_o_b')->label('Birth Date'),
                TextColumn::make('d_o_d')->label('Passing Date'),
                TextColumn::make('description'),
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
            'index' => Pages\ListTributes::route('/'),
            'create' => Pages\CreateTribute::route('/create'),
            'edit' => Pages\EditTribute::route('/{record}/edit'),
        ];
    }
}
