<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenilaianUjianSimResource\Pages;
use App\Models\PenilaianUjianSim;
use App\Models\SimMateri;
use App\Models\PendaftaranSim;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PenilaianUjianSimResource extends Resource
{
    protected static ?string $model = PenilaianUjianSim::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('pendaftaran_sim_id')
                ->label('Pendaftaran SIM')
                ->relationship('pendaftaranSim', 'nama_lengkap') // sesuaikan dengan nama kolom di model terkait
                ->searchable()
                ->required(),

            Forms\Components\Repeater::make('nilai_per_materi')
                ->label('Nilai per Materi')
                ->schema(static::getMateriSchema())
                ->columnSpanFull(),

            Forms\Components\Textarea::make('catatan_petugas')
                ->label('Catatan Petugas')
                ->rows(3)
                ->nullable(),
        ]);
    }

    protected static function getMateriSchema(): array
    {
        $materiList = SimMateri::all();

        return $materiList->map(fn ($materi) => Forms\Components\Group::make([
            Forms\Components\Hidden::make("{$materi->id}.id")->default($materi->id),
            Forms\Components\TextInput::make("{$materi->id}.nilai")
                ->label("Nilai: {$materi->judul}")
                ->numeric()
                ->required(),
            Forms\Components\Textarea::make("{$materi->id}.catatan")
                ->label("Catatan: {$materi->judul}")
                ->nullable(),
        ]))->toArray();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pendaftaranSim.nama_lengkap')
                    ->label('Nama Pendaftar')
                    ->searchable()
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('pendaftaranSim.jenis_sim')
                    ->label('Jenis SIM')
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Ujian')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
    
                Tables\Columns\TextColumn::make('total_nilai')
                    ->label('Total Nilai')
                    ->getStateUsing(function ($record) {
                        if (!is_array($record->nilai_per_materi)) {
                            return '-';
                        }
    
                        return collect($record->nilai_per_materi)
                            ->flatten(1)
                            ->pluck('nilai')
                            ->filter()
                            ->average() ?? 0;
                    }),
    
                Tables\Columns\TextColumn::make('catatan_petugas')
                    ->label('Catatan')
                    ->limit(50)
                    ->wrap(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenilaianUjianSims::route('/'),
            'create' => Pages\CreatePenilaianUjianSim::route('/create'),
            'edit' => Pages\EditPenilaianUjianSim::route('/{record}/edit'),
        ];
    }
}
