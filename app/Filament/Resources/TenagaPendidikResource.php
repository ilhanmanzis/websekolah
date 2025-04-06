<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TenagaPendidikResource\Pages;
use App\Filament\Resources\TenagaPendidikResource\RelationManagers;
use App\Models\TenagaPendidik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TenagaPendidikResource extends Resource
{
    protected static ?string $model = TenagaPendidik::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Tenaga Pendidik';
    protected static ?string $title = 'Tenaga Pendidik';
    protected static ?string $slug = 'tenagapendidik';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->relationship('mataPelajaran', 'nama_mata_pelajaran')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('profile/staf/pendidik')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mataPelajaran.nama_mata_pelajaran')
                    ->label('Mata Pelajaran')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->url(fn($record) => asset('storage/' . $record->image))
                    ->height(60),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListTenagaPendidiks::route('/'),
            'create' => Pages\CreateTenagaPendidik::route('/create'),
            'edit' => Pages\EditTenagaPendidik::route('/{record}/edit'),
        ];
    }
}
