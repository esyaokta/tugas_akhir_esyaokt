<x-app-layout>
  <div class="py-20">
    <div class="max-w-7xl mx-auto px-12">
      <div class="mx-auto bg-white flex flex-col justify-center gap-8">

        <!-- Header -->
        <div class="font-bold text-3xl w-full border-b pb-4">
          <h1>Data Barang</h1>
        </div>

        <!-- Table -->

        <div class="relative overflow-x-auto shadow-md">
          <table class="w-full text-sm text-left dark:text-gray-400">
            <thead class="text-md text-gray-700 uppercase font-semibold border-b-2 border-black">
              <tr>
                <th scope="col" class="px-6 py-3">
                  No
                </th>
                <th scope="col" class="px-6 py-3">
                  Id Barang
                </th>
                <th scope="col" class="px-6 py-3">
                  Jenis Barang
                </th>
                <th scope="col" class="px-6 py-3">
                  Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                  Merek
                </th>
                <th scope="col" class="px-6 py-3">
                  Jumlah Barang
                </th>
                <th scope="col" class="px-6 py-3">
                  Tanggal Masuk
                </th>
                <th scope="col" class="px-6 py-3">
                  Kondisi Barang
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($barang as $b)
                <tr class="border-b {{ $loop->iteration % 2 == 1 ? 'bg-gray-200' : 'bg-white'}}">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                  </th>
                  <td class="px-6 py-4 font-bold text-green-600">
                    {{ $b->id }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->jenis_barang }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->kategori }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->merek }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->jumlah_barang }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->tanggal_masuk }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $b->kondisi_barang }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="my-2">
            {{ $barang->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
