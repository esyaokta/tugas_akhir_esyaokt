<x-app-layout>

    @php
    $num=1;
    @endphp

    <div class="container p-4">
        @foreach ($notifikasi->reverse() as $item)
        @if ($item->persetujuan == 'Disetujui')
            <div class="alert alert-success">
                <ul>
                {{ $num++ }}. <b>PEMINJAMAN RUANGAN</b>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan : {{ $item->nama_kegiatan }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Tanggal : {{ $item->tanggal_pinjam }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Pukul : {{ $item->jam_pinjam }} - {{ $item->jam_selesai }}
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;Status : <b>DISETUJUI</b>
                </ul>
            </div>
        @elseif ($item->persetujuan == 'Ditolak')
            <div class="alert alert-danger">
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
            <div class="alert alert-warning">
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