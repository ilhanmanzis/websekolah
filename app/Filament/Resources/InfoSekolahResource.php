<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\InfoSekolah;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InfoSekolahResource\Pages;
use App\Filament\Resources\InfoSekolahResource\RelationManagers;

class InfoSekolahResource extends Resource
{
    protected static ?string $model = InfoSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'Info Sekolah';
    protected static ?string $title = 'Info Sekolah';
    protected static ?string $slug = 'info';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                //tanggal
                Forms\Components\DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->afterStateHydrated(function ($component, $state) {
                        $tanggal = indoToEnglishDate($state); // Ubah dulu ke format English
                        $component->state(Carbon::parse($tanggal)->format('Y-m-d'));
                    })
                    ->dehydrateStateUsing(function ($state) {
                        Carbon::setLocale('id');
                        return Carbon::parse(indoToEnglishDate($state))->translatedFormat('d F Y');
                    }),

                //image
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('info')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),

                Forms\Components\RichEditor::make('isi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->wrap()
                    ->extraAttributes(['class' => 'w-1/2']),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
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
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListInfoSekolahs::route('/'),
            'create' => Pages\CreateInfoSekolah::route('/create'),
            'edit' => Pages\EditInfoSekolah::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 3;
    }
}
