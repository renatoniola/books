<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Author;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('book_title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('book_descr')
                    ->label('Description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('book_excerpt')
                    ->label('Excerpt')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('book_image_path')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->required(),
                Forms\Components\Select::make('author_id')
                    ->label('Author')
                    ->options(Author::all()->pluck('author_lastname', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('book_year_published')
                    ->label('Year')
                    ->maxLength(4),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('book_image_path'),
                Tables\Columns\TextColumn::make('book_title')
                    ->label('Title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author.author_name')
                    ->label('Name')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('author.author_lastname')
                    ->label('Lastname')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('book_year_published')
                    ->label('Year')
                    ->searchable(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
