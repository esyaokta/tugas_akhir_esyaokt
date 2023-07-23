<x-app-layout>

    @php
    $num=1;
    @endphp

    <div class="max-w-7xl flex flex-col items-center mx-auto p-6 gap-4">
        @foreach ($notifikasi->reverse() as $item)
        @if ($item->persetujuan == 'Disetujui')
            <div class="w-full bg-green-300 p-4 rounded-md">
                <ul>
                {{ $num++ }}. <b>PEMINJAMAN RUANGAN</b>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan : {{ $item->nama_kegiatan }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Tanggal : {{ $item->tanggal_pinjam }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Pukul : {{ $item->jam_pinjam }} - {{ $item->jam_selesai }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Status : <b>DISETUJUI</b>
                </ul>
            </div>
        @elseif ($item->persetujuan == 'Ditolak')
            <div class="w-full bg-red-200 p-4 rounded-md">
                <ul>
                    {{ $num++ }}. <b>PEMINJAMAN RUANGAN</b>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp; Kegiatan : {{ $item->nama_kegiatan }}
                        <br>&nbsp;&nbsp;&nbsp;&nbsp; Tanggal : {{ $item->tanggal_pinjam }}
                        <br>&nbsp;&nbsp;&nbsp;&nbsp; Pukul : {{ $item->jam_pinjam }} - {{ $item->jam_selesai }}
                        <br>&nbsp;&nbsp;&nbsp;&nbsp; Status : <b>DITOLAK</b>
                        <br> @if (!empty($item->alasan)) &nbsp;&nbsp;&nbsp;&nbsp; Alasan : {{ $item->alasan }}.@endif
                    </ul>
            </div>
        @elseif ($item->persetujuan == 'Menunggu')
            <div class="w-full bg-yellow-100 p-4 rounded-md">
            <ul>
                {{ $num++ }}. <b>PEMINJAMAN RUANGAN</b>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan : {{ $item->nama_kegiatan }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Tanggal : {{ $item->tanggal_pinjam }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Pukul : {{ $item->jam_pinjam }} - {{ $item->jam_selesai }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Status : <b>MENUNGGU</b>
                </ul>
            </div>
        @endif
    @endforeach
    </div>
</x-app-layout>
