<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PendaftaranSim;

class CekNilai extends Component
{
    public $nama = '';
    public $pendaftaran;

    public function cari()
    {
        $this->pendaftaran = PendaftaranSim::with('penilaian')
            ->where('nama_lengkap', 'like', '%' . $this->nama . '%')
            ->first();

        if ($this->pendaftaran && $this->pendaftaran->penilaian) {
            // Pastikan data di-cast ke array hanya jika masih berupa string
            if (is_string($this->pendaftaran->penilaian->nilai_per_materi)) {
                $this->pendaftaran->penilaian->nilai_per_materi =
                    json_decode($this->pendaftaran->penilaian->nilai_per_materi, true);
            }
        }
    }

    public function render()
    {
        return view('livewire.cek-nilai');
    }
}
