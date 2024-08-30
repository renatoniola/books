<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuthorResource\Pages;
use App\Models\Author;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                Forms\Components\TextInput::make('author_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('author_lastname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('author_slug')
                    ->label('Slug')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\FileUpload::make('author_image_path')
                    ->avatar()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('authors')
                    ->required(),
                ]
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(
                [
                Tables\Columns\TextColumn::make('author_name')
                    ->label('Author')
                    ->formatStateUsing(
                        function ($state, Author $author) {
                            return $author->author_name . ' ' . $author->author_lastname;
                        }
                    )
                ->sortable(
                    query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('author_lastname', $direction)
                            ->orderBy('author_name', $direction);

                    }
                ),

                Tables\Columns\ImageColumn::make('author_image_path'),
                ]
            )
            ->filters(
                [
                //
                ]
            )
            ->actions(
                [
                Tables\Actions\EditAction::make(),
                ]
            )
            ->bulkActions(
                [
                Tables\Actions\BulkActionGroup::make(
                    [
                    Tables\Actions\DeleteBulkAction::make(),
                    ]
                ),
                ]
            );
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
            'index' => Pages\ListAuthors::route('/'),
            'create' => Pages\CreateAuthor::route('/create'),
            'edit' => Pages\EditAuthor::route('/{record}/edit'),
        ];
    }
}
