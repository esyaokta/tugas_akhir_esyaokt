<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="flex gap-20 w-full">
    <div class="flex flex-col gap-8 border-2 border-black px-6 pt-3 pb-8 w-1/4">
        <p class="text-2xl">Total Data Barang</p>
        <div class="flex justify-between items-center">
            <p class="text-5xl font-semibold">{{ $jumlah_barang }}</p>
            <a href="{{ route('admin.barang.index') }}">
                <i class="fa-regular fa-pen-to-square fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="flex flex-col gap-8 border-2 border-black px-6 pt-3 pb-8 w-1/4">
        <p class="text-2xl">Peminjaman</p>
        <div class="flex justify-between items-center">
            <p class="text-5xl font-semibold">{{ $jumlah_peminjaman }}</p>
            <a href="{{ route('admin.peminjaman.index') }}">
                <i class="fa-regular fa-pen-to-square fa-2x"></i>
            </a>
        </div>
    </div>
  </div>
</x-admin.app>
