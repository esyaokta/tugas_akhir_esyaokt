<x-admin.app>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
          {{ __('Approval Peminjaman') }}
        </h2>
      </x-slot>

      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-black">
          <thead class="text-base text-gray-700 uppercase bg-[#FFFCFC] dark:bg-gray-700 dark:text-gray-400 border-b border-black">
            <tr>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Id
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                NIM
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Nama
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                No HP
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Nama kegiatan
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Tanggal pinjam
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Jam pinjam
              </th>
              <th scope="col" class="px-6 py-3 border-r border-black">
                Jam selesai
              </th>
              <th scope="col" class="px-6 py-3">
                aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
              <th scope="row" class="px-6 py-4 border-r border-black ">
                1
              </th>
              <td class="px-6 py-4 border-r border-black">
                Meja
              </td>
              <td class="px-6 py-4 border-r border-black">
                Perabotan kantor
              </td>
              <td class="px-6 py-4 border-r border-black">
                None
              </td>
              <td class="px-6 py-4 border-r border-black">
                4
              </td>
              <td class="px-6 py-4 border-r border-black">
                2022-12-01
              </td>
              <td class="px-6 py-4 border-r border-black">
                2022-12-01
              </td>
              <td class="px-6 py-4 border-r border-black">
                Baik
              </td>
              <td class="px-6 py-4">
                <i class="fa-regular fa-pen-to-square"></i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
</x-admin.app>
