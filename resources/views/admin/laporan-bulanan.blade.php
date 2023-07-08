<x-admin.app>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Laporan Bulanan') }}
      </h2>
      <a href="{{ route('admin.laporan.cetak', ['periode'=> $periode]) }}"
        class="py-2 px-8 border border-black uppercase font-semibold bg-black text-white hover:bg-white hover:text-black transition-all duration-200">Cetak</a>
    </div>
  </x-slot>

  <div class="flex flex-col gap-4">
      <!-- Laporan Barang -->
      <div class="flex justify-start">
        <h2 class="text-2xl font-semibold">Data Barang</h2>
      </div>
      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-black">
          <thead
            class="text-base text-gray-700 uppercase bg-[#FFFCFC] dark:bg-gray-700 dark:text-gray-400 border-b border-black">
            <tr>
              <th scope="col" class="px-6 py-3 border-r border-black">
                id
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                jenis
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                kategori
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                merek
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                jumlah
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                tgl masuk
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                kondisi
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($barang as $b)
              <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
                <th scope="row" class="px-6 py-4 border-r border-black ">
                  {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4 border-r border-black capitalize">
                  {{ $b->jenis_barang }}
                </td>
                <td class="px-6 py-4 border-r border-black capitalize">
                  {{ $b->kategori }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $b->merek }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $b->jumlah_barang }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $b->tanggal_masuk }}
                </td>
                <td class="px-6 py-4 border-r border-black capitalize">
                  {{ $b->kondisi_barang }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $barang->links() }}

      <!-- Laporan Peminjaman -->
      <div class="flex justify-start">
        <h2 class="text-2xl font-semibold">Data Peminjaman</h2>
      </div>
      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-black">
          <thead
            class="text-base text-gray-700 uppercase bg-[#FFFCFC] dark:bg-gray-700 dark:text-gray-400 border-b border-black">
            <tr>
              <th scope="col" class="px-6 py-3 border-r border-black">
                id
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                nama kegiatan
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                tanggal pinjam
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                jam pinjam
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                jam selesai
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                persetujuan
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                alasan
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                nama peminjam
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($peminjaman as $p)
              <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
                <th scope="row" class="px-6 py-4 border-r border-black ">
                  {{ $p->id }}
                </th>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->nama_kegiatan }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->tanggal_pinjam }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->jam_pinjam }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->jam_selesai }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->persetujuan }}
                </td>
                <td class="px-6 py-4 border-r border-black">
                  {{ $p->alasan }}
                </td>
                <td class="px-6 py-4 border-r border-black capitalize">
                  {{ $p->user->nama }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{ $peminjaman->links() }}
  </div>
</x-admin.app>
