<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakurikulerResource\Pages;
use App\Filament\Resources\EkstrakurikulerResource\RelationManagers;
use App\Models\Ekstrakurikuler;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?string $navigationGroup = 'Layanan';
    protected static ?string $navigationLabel = 'Ekstrakurikuler';
    protected static ?string $title = 'Ekstrakurikuler';
    protected static ?string $slug = 'ekstrakurikuler';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('layanan/ekstrakurikuler')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->url(fn($record) => asset('storage/' . $record->image))
                    ->height(60)
                    ->label('Logo'),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->wrap()
                    ->extraAttributes(['class' => 'w-1/2']),

                //
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListEkstrakurikulers::route('/'),
            'create' => Pages\CreateEkstrakurikuler::route('/create'),
            'edit' => Pages\EditEkstrakurikuler::route('/{record}/edit'),
        ];
    }
}
