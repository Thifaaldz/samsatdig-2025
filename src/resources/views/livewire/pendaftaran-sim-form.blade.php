<div class="p-6 bg-white shadow-md rounded-md">
    @if (session()->has('success'))
        <div class="p-4 mb-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label>NIK</label>
                <input wire:model="nik" type="text" class="w-full border rounded px-3 py-2" />
                @error('nik') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Nama Lengkap</label>
                <input wire:model="nama_lengkap" type="text" class="w-full border rounded px-3 py-2" />
                @error('nama_lengkap') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Tempat Lahir</label>
                <input wire:model="tempat_lahir" type="text" class="w-full border rounded px-3 py-2" />
                @error('tempat_lahir') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Tanggal Lahir</label>
                <input wire:model="tanggal_lahir" type="date" class="w-full border rounded px-3 py-2" />
                @error('tanggal_lahir') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Jenis Kelamin</label>
                <select wire:model="jenis_kelamin" class="w-full border rounded px-3 py-2">
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Golongan Darah</label>
                <select wire:model="golongan_darah" class="w-full border rounded px-3 py-2">
                    <option value="">Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
                @error('golongan_darah') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="col-span-2">
                <label>Alamat</label>
                <textarea wire:model="alamat" class="w-full border rounded px-3 py-2"></textarea>
                @error('alamat') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div><label>Provinsi</label><input wire:model="provinsi" class="w-full border px-3 py-2" /></div>
            <div><label>Kota/Kabupaten</label><input wire:model="kota_kabupaten" class="w-full border px-3 py-2" /></div>
            <div><label>Kecamatan</label><input wire:model="kecamatan" class="w-full border px-3 py-2" /></div>
            <div><label>Kelurahan</label><input wire:model="kelurahan" class="w-full border px-3 py-2" /></div>
            <div><label>Kode Pos</label><input wire:model="kode_pos" class="w-full border px-3 py-2" /></div>
            <div><label>Nomor HP</label><input wire:model="nomor_hp" class="w-full border px-3 py-2" /></div>
            <div><label>Email</label><input wire:model="email" class="w-full border px-3 py-2" /></div>

            <div>
                <label>Jenis SIM</label>
                <select wire:model="jenis_sim" class="w-full border px-3 py-2">
                    <option value="">Pilih</option>
                    <option value="SIM A">SIM A</option>
                    <option value="SIM B">SIM B</option>
                    <option value="SIM C">SIM C</option>
                    <option value="SIM D">SIM D</option>
                    <option value="SIM Internasional">SIM Internasional</option>
                </select>
                @error('jenis_sim') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Tipe Pendaftaran</label>
                <select wire:model="tipe_pendaftaran" class="w-full border px-3 py-2">
                    <option value="">Pilih</option>
                    <option value="Baru">Baru</option>
                    <option value="Perpanjangan">Perpanjangan</option>
                </select>
                @error('tipe_pendaftaran') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Samsat</label>
                <select wire:model="samsat_id" class="w-full border px-3 py-2">
                    <option value="">Pilih Samsat</option>
                    @foreach ($samsats as $samsat)
                        <option value="{{ $samsat->id }}">{{ $samsat->nama }}</option>
                    @endforeach
                </select>
                @error('samsat_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div>
                <label>Waktu Ujian</label>
                <select wire:model="waktu_ujian" class="w-full border px-3 py-2">
                    <option value="">Pilih</option>
                    <option value="08:00">08:00</option>
                    <option value="13:00">13:00</option>
                </select>
                @error('waktu_ujian') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Uploads -->
            <div class="col-span-2">
                <label>Foto KTP</label>
                <input wire:model="foto_ktp" type="file" class="w-full border px-3 py-2" />
                @error('foto_ktp') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-2">
                <label>Pas Foto</label>
                <input wire:model="foto_pas_foto" type="file" class="w-full border px-3 py-2" />
                @error('foto_pas_foto') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-2">
                <label>Foto Tanda Tangan</label>
                <input wire:model="foto_ttd" type="file" class="w-full border px-3 py-2" />
                @error('foto_ttd') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="col-span-2">
                <label>Dokumen Kesehatan</label>
                <input wire:model="dokumen_kesehatan" type="file" class="w-full border px-3 py-2" />
                @error('dokumen_kesehatan') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kirim Pendaftaran
        </button>
    </form>
</div>
