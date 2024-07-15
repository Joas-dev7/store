<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')->required()->label('Nom'),
                Forms\Components\TextInput::make('price')->required()->label('Prix'),
                Forms\Components\Select::make('category')
                    ->relationship(name: 'category', titleAttribute: 'name') //liste des categories pour un prix
                    ->required()->label('Categories'),
                    Forms\Components\FileUpload::make('images')->multiple(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->description(fn (Product $record): string => substr($record->description, 0, 20))
                    ->label('Nom produit')->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')->money('EUR'),
                Tables\Columns\ImageColumn::make('images'),
            ])
            ->filters([
                //
                SelectFilter::make('Category')->relationship('category', 'name')//"Category est le nom du fitre"
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
