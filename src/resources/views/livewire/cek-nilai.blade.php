<div class="max-w-xl mx-auto mt-10">
    <h2 class="text-xl font-bold mb-4">Cek Nilai Ujian SIM</h2>

    <form wire:submit.prevent="cari" class="mb-6">
        <input type="text" wire:model="nama" placeholder="Masukkan Nama Lengkap"
            class="w-full p-2 border border-gray-300 rounded mb-2">
        <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cari</button>
    </form>

    @if($pendaftaran)
        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-lg font-semibold mb-2">Hasil Penilaian untuk: {{ $pendaftaran->nama_lengkap }}</h3>

            @if(is_array($pendaftaran->penilaian->nilai_per_materi))
                <ul class="list-disc pl-6 text-sm">
                    @foreach($pendaftaran->penilaian->nilai_per_materi as $group)
                        @php
                            $total = 0;
                            $count = 0;
                        @endphp

                        @foreach($group as $materi_id => $materi)
                            <li>
                                <strong>Materi {{ $materi_id }}:</strong> {{ $materi['nilai'] }}
                            </li>
                            @php
                                $total += (int)$materi['nilai'];
                                $count++;
                            @endphp
                        @endforeach

                        <li class="mt-3 font-bold text-green-600">
                            Total Nilai: {{ $total }} |
                            Rata-rata: {{ $count > 0 ? round($total / $count, 2) : 0 }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-red-500">Format nilai tidak valid.</p>
            @endif

            @if($pendaftaran->penilaian->catatan_petugas)
                <p class="mt-4 text-sm text-gray-700">
                    <strong>Catatan Petugas:</strong> {{ $pendaftaran->penilaian->catatan_petugas }}
                </p>
            @endif
        </div>
    @elseif(strlen($nama) > 0)
        <p class="text-red-500 mt-4">Data tidak ditemukan untuk nama "{{ $nama }}".</p>
    @endif
</div>
