<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SambutanResource\Pages;
use App\Filament\Resources\SambutanResource\RelationManagers;
use App\Models\Sambutan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SambutanResource extends Resource
{
    protected static ?string $model = Sambutan::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Sambutan Kepala Sekolah';
    protected static ?string $title = 'Sambutan Kepala Sekolah';
    protected static ?string $slug = 'sambutan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Foto Kepala Sekolah')
                    ->image()
                    ->directory('profile/sambutan')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\RichEditor::make('isi')
                    ->required()
                    ->label('Isi Sambutan')
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table;
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
            'index' => Pages\ListSambutans::route('/'),

            'edit' => Pages\EditSambutan::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 5;
    }
}
