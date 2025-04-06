<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaboratoriumResource\Pages;
use App\Filament\Resources\LaboratoriumResource\RelationManagers;
use App\Models\Laboratorium;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaboratoriumResource extends Resource
{
    protected static ?string $model = Laboratorium::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $navigationGroup = 'Layanan';
    protected static ?string $navigationLabel = 'Laboratorium';
    protected static ?string $title = 'Laboratorium';
    protected static ?string $slug = 'laboratorium';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('layanan/laboratorium')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\RichEditor::make('isi')
                    ->required()
                    ->label('Isi')
                    ->columnSpanFull(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListLaboratoria::route('/'),

            'edit' => Pages\EditLaboratorium::route('/{record}/edit'),
        ];
    }
}
