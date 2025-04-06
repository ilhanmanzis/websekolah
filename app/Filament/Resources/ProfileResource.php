<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Setting';
    protected static ?string $title = 'Setting';
    protected static ?string $slug = 'setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_sekolah')
                    ->label('Nama Sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('motto')
                    ->label('Motto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_banner')
                    ->label('Banner Home')
                    ->image()
                    ->directory('banner')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('logo')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('organisasi_sekolah')
                    ->label('Organisasi Sekolah')
                    ->image()
                    ->directory('profile/struktur/sekolah')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('organisasi_komite')
                    ->label('Organisasi Komite Sekolah')
                    ->image()
                    ->directory('profile/struktur/komite')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('foto_pendidik')
                    ->label('Foto Pendidik')
                    ->image()
                    ->directory('profile/staf/pendidik')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('foto_kependidikan')
                    ->label('Foto Kependidikan')
                    ->image()
                    ->directory('profile/staf/kependidikan')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
                Forms\Components\FileUpload::make('ekstrakurikuler')
                    ->label('Banner Ekstrakurikuler')
                    ->image()
                    ->directory('layanan/ekstrakurikuler/banner')
                    ->disk('public')
                    ->preserveFilenames(false)
                    ->visibility('public')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
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
            'index' => Pages\ListProfiles::route('/'),

            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
