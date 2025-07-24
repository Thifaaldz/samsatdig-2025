<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Pendaftaran SIM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 15px;
        }
        .label {
            width: 200px;
            display: inline-block;
            font-weight: bold;
        }
        .image-box {
            width: 150px;
            height: auto;
            margin-top: 10px;
        }
        .foto-wrapper {
            display: flex;
            gap: 30px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Formulir Pendaftaran SIM</h2>
        <p>SAMSAT DIGITAL INDONESIA</p>
        <hr>
    </div>

    <div class="section">
        <h3>Data Pribadi</h3>
        <p><span class="label">NIK:</span> {{ $data->nik }}</p>
        <p><span class="label">Nama Lengkap:</span> {{ $data->nama_lengkap }}</p>
        <p><span class="label">Tempat, Tanggal Lahir:</span> {{ $data->tempat_lahir }}, {{ \Carbon\Carbon::parse($data->tanggal_lahir)->translatedFormat('d F Y') }}</p>
        <p><span class="label">Jenis Kelamin:</span> {{ $data->jenis_kelamin }}</p>
        <p><span class="label">Golongan Darah:</span> {{ $data->golongan_darah }}</p>
        <p><span class="label">Alamat:</span> {{ $data->alamat }}</p>
        <p><span class="label">Provinsi:</span> {{ $data->provinsi }}</p>
        <p><span class="label">Kota/Kabupaten:</span> {{ $data->kota_kabupaten }}</p>
        <p><span class="label">Kecamatan:</span> {{ $data->kecamatan }}</p>
        <p><span class="label">Kelurahan:</span> {{ $data->kelurahan }}</p>
        <p><span class="label">Kode Pos:</span> {{ $data->kode_pos }}</p>
        <p><span class="label">No. HP:</span> {{ $data->nomor_hp }}</p>
        <p><span class="label">Email:</span> {{ $data->email ?? '-' }}</p>
    </div>

    <div class="section">
        <h3>Data SIM</h3>
        <p><span class="label">Jenis SIM:</span> {{ $data->jenis_sim }}</p>
        <p><span class="label">Tipe Pendaftaran:</span> {{ $data->tipe_pendaftaran }}</p>
        <p><span class="label">Samsat Tujuan:</span> {{ $data->samsat->nama ?? '-' }}</p>
        <p><span class="label">Waktu Ujian:</span> {{ $data->waktu_ujian }}</p>
    </div>

    <div class="section">
        <h3>Lampiran Dokumen</h3>
        <div class="foto-wrapper">
            <div>
                <p>Foto KTP:</p>
                <img src="{{ public_path('storage/' . $data->foto_ktp) }}" class="image-box">
            </div>
            <div>
                <p>Pas Foto:</p>
                <img src="{{ public_path('storage/' . $data->foto_pas_foto) }}" class="image-box">
            </div>
            <div>
                <p>Tanda Tangan:</p>
                <img src="{{ public_path('storage/' . $data->foto_ttd) }}" class="image-box">
            </div>
            <div>
                <p>Dokumen Kesehatan:</p>
                <img src="{{ public_path('storage/' . $data->dokumen_kesehatan) }}" class="image-box">
            </div>
        </div>
    </div>

    <br><br>
    <div style="text-align: right;">
        <p>Dicetak pada: {{ now()->translatedFormat('d F Y, H:i') }}</p>
    </div>

</body>
</html>
