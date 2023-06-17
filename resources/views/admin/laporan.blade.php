<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Laporan') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">

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
</div>
</x-admin.app>
