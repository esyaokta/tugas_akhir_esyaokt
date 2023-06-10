<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Barang') }}
          </h2>
    </x-slot>

    <div class="flex flex-col justify-center gap-10">
        @if (session('succes'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                {{ session('succes') }}
            </div>
        @endif
        <h2 class="text-2xl">Form Tambah Barang</h2>

        <form action="{{ route('admin.barang.store') }}" method="POST">
            @csrf
            <div class="flex justify-between gap-28">
                <div class="flex flex-col items-end justify-center w-1/2 gap-8">
                    <div class="flex gap-10 items-center justify-end">
                        <label for="jenis" class="text-xl">Jenis</label>
                        <input type="text" name="jenis_barang" class="h-16 border w-52">
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="kategori" class="text-xl">Kategori</label>
                        <select name="kategori" id="kategori" class="h-16 border w-52">
                            <option value="perabotan kantor">Perabotan Kantor</option>
                            <option value="perabotan elektronik">Perabotan Elektronik</option>
                        </select>
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="merek" class="text-xl">Merek</label>
                        <input type="text" name="merek" class="h-16 border w-52">
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="jumlah" class="text-xl">Jumlah</label>
                        <input type="number" name="jumlah_barang" class="h-16 border w-52">
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="tanggal_masuk" class="text-xl">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="h-16 border w-52">
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="tanggal_keluar" class="text-xl">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="h-16 border w-52">
                    </div>
                    <div class="flex gap-10 items-center justify-end">
                        <label for="kondisi" class="text-xl">Kondisi</label>
                        <input type="text" name="kondisi_barang" class="h-16 border w-52">
                    </div>
                </div>
                <div class="w-1/2 flex items-end">
                    <button type="submit" class="py-4 px-8 text-2xl font-bold bg-gray-300 hover:bg-gray-400 transition-all duration-200 border border-black">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-admin.app>
