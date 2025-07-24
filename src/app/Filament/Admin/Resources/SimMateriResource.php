<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SimMateriResource\Pages;
use App\Models\SimMateri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SimMateriResource extends Resource
{
    protected static ?string $model = SimMateri::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Materi SIM';
    protected static ?string $navigationGroup = 'Tes SIM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul Materi')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->maxLength(1000),

                Forms\Components\Select::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'Peraturan' => 'Peraturan',
                        'Etika' => 'Etika',
                        'Rambu' => 'Rambu',
                        'Teknik' => 'Teknik',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('video_url')
                    ->label('Link Video (YouTube / Vimeo)')
                    ->maxLength(255),

                FileUpload::make('file_path')
                    ->label('Upload File Pembelajaran (PDF)')
                    ->directory('materi-files')
                    ->preserveFilenames()
                    ->downloadable()
                    ->previewable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('kategori')
                    ->label('Kategori')
                    ->sortable(),

                Tables\Columns\TextColumn::make('video_url')
                    ->label('Video')
                    ->limit(30),

                Tables\Columns\TextColumn::make('file_path')
                    ->label('File Pembelajaran')
                    ->limit(20),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter kategori jika diperlukan
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSimMateris::route('/'),
            'create' => Pages\CreateSimMateri::route('/create'),
            'edit' => Pages\EditSimMateri::route('/{record}/edit'),
        ];
    }
}
