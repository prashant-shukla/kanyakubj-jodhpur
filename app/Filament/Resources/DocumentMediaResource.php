<?php
// app/Filament/Resources/DocumentMediaResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentMediaResource\Pages;
use App\Models\DocumentMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\File;
use Filament\Tables;
use Filament\Tables\Table;

class DocumentMediaResource extends Resource
{
    protected static ?string $model = DocumentMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Foreign key to DocumentCategory
                Forms\Components\Select::make('document_category_id')
                    ->label('Category')
                    ->options(function () {
                        return \App\Models\DocumentCategory::all()->pluck('name', 'id');
                    })
                    ->required(),

                FileUpload::make('file_path')
                    ->label('Document File')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('public')
                    ->directory('documents')
                    ->maxSize(10 * 1024) // 10 MB (size in kilobytes)
                    ->required(),
                

                // File Type (e.g., image, pdf, etc.)
                // TextInput::make('file_type')
                //     ->label('File Type')
                //     ->required(),

                // Title field (optional)
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Document Category
                TextColumn::make('documentCategory.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),

                // Document Title
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                // File Type
                TextColumn::make('file_type')
                    ->sortable(),

                // Created At
                TextColumn::make('created_at')->dateTime()->sortable(),

                // Updated At
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                // You can add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Add relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocumentMedias::route('/'),
            'create' => Pages\CreateDocumentMedia::route('/create'),
            'edit' => Pages\EditDocumentMedia::route('/{record}/edit'),
        ];
    }
}
