<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerpustakaanResource\Pages;
use App\Filament\Resources\PerpustakaanResource\RelationManagers;
use App\Models\Perpustakaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerpustakaanResource extends Resource
{
    protected static ?string $model = Perpustakaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationGroup = 'Layanan';
    protected static ?string $navigationLabel = 'Perpustakaan';
    protected static ?string $title = 'Perpustakaan';
    protected static ?string $slug = 'perpustakaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->directory('layanan/perpustakaan')
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
            'index' => Pages\ListPerpustakaans::route('/'),

            'edit' => Pages\EditPerpustakaan::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 12;
    }
}
