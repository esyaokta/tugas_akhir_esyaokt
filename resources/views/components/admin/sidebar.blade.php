<aside class="absolute top-20 flex flex-col border-r border-black h-screen">
    <div class="h-20 border-b border-black flex justify-center items-center px-16">
        <a href="{{ route('admin.dashboard') }}" class="font-semibold text-2xl">Dashboard</a>
    </div>
    <div class="h-20 border-b border-black flex justify-center items-center px-16">
        <a href="{{ route('admin.laporan.index') }}" class="font-semibold text-2xl">Laporan</a>
    </div>
    <div class="h-20 border-b border-black flex justify-center items-center px-16">
        <a href="{{ route('admin.peminjaman.index') }}" class="font-semibold text-2xl">Approval Peminjaman</a>
    </div>
    <div class="h-20 border-b border-black flex justify-center items-center px-16">
        <a href="{{ route('admin.barang.index') }}" class="font-semibold text-2xl">Barang</a>
    </div>
    <div class="h-20 border-b border-black flex justify-center items-center px-16">
        <a href="{{ route('admin.user.index') }}" class="font-semibold text-2xl">Pengguna</a>
    </div>

</aside>
