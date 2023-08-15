<aside class="absolute top-20 flex flex-col border-r h-screen bg-blue-500 text-white">
    <div class="h-20 border-b gap-x-4 flex justify-between px-8 items-center cursor-pointer">
        <a href="{{ route('admin.dashboard') }}" class="font-semibold text-2xl">Dashboard</a>
        <i class="fa-solid fa-angle-right"></i>
    </div>
    {{-- <div class="h-20 border-b  flex justify-center items-center px-16">
        <a href="{{ route('admin.laporan.index') }}" class="font-semibold text-2xl">Laporan</a>
    </div> --}}
    <div class="h-20 border-b  flex justify-between items-center px-8 gap-x-4">
        <a href="{{ route('admin.peminjaman.index') }}" class="font-semibold text-2xl">Approval Peminjaman</a>
        <i class="fa-solid fa-angle-right"></i>
    </div>
    <div class="h-20 border-b  flex justify-between items-center px-8">
        <a href="{{ route('admin.barang.index') }}" class="font-semibold text-2xl">Barang</a>
        <i class="fa-solid fa-angle-right"></i>
    </div>
    <div class="h-20 border-b  flex justify-between items-center px-8">
        <a href="{{ route('admin.user.index') }}" class="font-semibold text-2xl">Pengguna</a>
        <i class="fa-solid fa-angle-right"></i>
    </div>

</aside>
