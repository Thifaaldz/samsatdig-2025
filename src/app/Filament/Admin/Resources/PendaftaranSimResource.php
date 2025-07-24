<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PendaftaranSimResource\Pages;
use App\Filament\Admin\Resources\PendaftaranSimResource\RelationManagers;
use App\Models\PendaftaranSim;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Select, DatePicker, FileUpload, Textarea};
use Filament\Tables\Columns\TextColumn;
use App\Models\Samsat;

class PendaftaranSimResource extends Resource
{
    protected static ?string $model = PendaftaranSim::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nik')->required()->maxLength(16),
    TextInput::make('nama_lengkap')->required(),
    TextInput::make('tempat_lahir')->required(),
    DatePicker::make('tanggal_lahir')->required(),
    Select::make('jenis_kelamin')->options([
        'Laki-laki' => 'Laki-laki',
        'Perempuan' => 'Perempuan',
    ])->required(),
    Select::make('golongan_darah')->options([
        'A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O',
    ])->required(),
    Textarea::make('alamat')->required(),
    TextInput::make('provinsi')->required(),
    TextInput::make('kota_kabupaten')->required(),
    TextInput::make('kecamatan')->required(),
    TextInput::make('kelurahan')->required(),
    TextInput::make('kode_pos')->required(),
    TextInput::make('nomor_hp')->required(),
    TextInput::make('email')->email()->nullable(),
    Select::make('samsat_id')
    ->label('Lokasi Samsat')
    ->relationship('samsat', 'nama')
    ->searchable()
    ->required(),
    Select::make('jenis_sim')->options([
        'SIM A' => 'SIM A',
        'SIM B' => 'SIM B',
        'SIM C' => 'SIM C',
        'SIM D' => 'SIM D',
        'SIM Internasional' => 'SIM Internasional',
    ])->required(),
    Select::make('tipe_pendaftaran')->options([
        'Baru' => 'Baru',
        'Perpanjangan' => 'Perpanjangan',
    ])->required(),
    FileUpload::make('foto_ktp')->image()->required(),
    FileUpload::make('foto_pas_foto')->image()->required(),
    FileUpload::make('foto_ttd')->image()->required(),
    FileUpload::make('dokumen_kesehatan')->required(),
    Select::make('status_pendaftaran')->options([
        'Pending' => 'Pending',
        'Diproses' => 'Diproses',
        'Disetujui' => 'Disetujui',
        'Ditolak' => 'Ditolak',
    ])->default('Pending'),
    Textarea::make('catatan_petugas')->nullable(),

            ]);

    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nik')->searchable(),
                TextColumn::make('nama_lengkap')->searchable(),
                TextColumn::make('jenis_sim'),
                TextColumn::make('tipe_pendaftaran'),
                TextColumn::make('status_pendaftaran')->badge(),
                TextColumn::make('tanggal_pendaftaran')->dateTime('d M Y'),
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
            'index' => Pages\ListPendaftaranSims::route('/'),
            'create' => Pages\CreatePendaftaranSim::route('/create'),
            'edit' => Pages\EditPendaftaranSim::route('/{record}/edit'),
        ];
    }
}
