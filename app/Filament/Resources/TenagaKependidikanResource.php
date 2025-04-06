<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TenagaKependidikanResource\Pages;
use App\Filament\Resources\TenagaKependidikanResource\RelationManagers;
use App\Models\TenagaKependidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TenagaKependidikanResource extends Resource
{
    protected static ?string $model = TenagaKependidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Tenaga Kependidikan';
    protected static ?string $title = 'Tenaga Kependidikan';
    protected static ?string $slug = 'tenagakependidikan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->label('Status')
                    ->required()
                    ->default('Tenaga Kependidikan')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->directory('profile/staf/kependidikan')
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
                Tables\Columns\TextColumn::make('status')
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

                Tables\Actions\DeleteBulkAction::make(),

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
            'index' => Pages\ListTenagaKependidikans::route('/'),
            'create' => Pages\CreateTenagaKependidikan::route('/create'),
            'edit' => Pages\EditTenagaKependidikan::route('/{record}/edit'),
        ];
    }
}
