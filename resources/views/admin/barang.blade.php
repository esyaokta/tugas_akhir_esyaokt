<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Barang') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">

    <div class="flex justify-between">
      <h2 class="text-2xl font-semibold">Data Barang</h2>
      <div class="flex h-10">
        <a href="{{ route('admin.barang.create') }}"
          class="bg-gray-300 hover:bg-gray-400 transition-all duration-200 flex items-center gap-3 px-4 h-full">
          <i class="fa-solid fa-plus px-2"></i>
          <span class="border-r border-black h-full"></span>
          Tambah Barang
        </a>
      </div>
    </div>

    <!-- Alert Message -->
    @if (session('success'))
      <div id="alert-3"
        class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        {{ session('success') }}
        <button type="button"
          class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
          data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    @endif

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
            <th scope="col" class="px-6 py-3">
              aksi
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
              <td class="px-6 py-4 flex justify-center gap-3">
                <button data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                  class="fa-regular fa-pen-to-square" type="button">
                </button>
                <form action="{{ route('admin.barang.destroy', ['id' => $b->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="fa-regular fa-trash-can">
                    </button>
                </form>
              </td>
            </tr>
            <!-- Main modal -->
            <div id="edit-modal" tabindex="-1" aria-hidden="true"
              class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="edit-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit data barang</h3>
                    <form class="space-y-6" action="{{ route('admin.barang.update', ['id' => $b->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                      <div class="my-3">
                        <label for="jenis_barang"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis barang</label>
                        <input type="text" name="jenis_barang" id="jenis_barang"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                          value="{{ $b->jenis_barang }}" required>
                      </div>
                      <div class="my-3">
                        <label for="kategori"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori barang</label>
                        <select id="kategori" name="kategori"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          @if ($b->kategori == 'perabotan kantor')
                            <option selected value="perabotan kantor">Perabotan Kantor</option>
                            <option value="perabotan elektronik">Perabotan Elektronik</option>
                          @elseif ($b->kategori == 'perabotan elektronik')
                            <option value="perabotan kantor">Perabotan Kantor</option>
                            <option selected value="perabotan elektronik">Perabotan Elektronik</option>
                          @endif
                        </select>
                      </div>
                      <div class="my-3">
                        <label for="merek"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merek</label>
                      <input type="merek" name="merek" id="merek"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $b->merek }}" required>
                      </div>
                      <div class="my-3">
                        <label for="jumlah_barang"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
                      <input type="number" name="jumlah_barang" id="jumlah_barang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $b->jumlah_barang }}" required>
                      </div>
                      <div class="my-3">
                        <label for="tanggal_masuk"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                      <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $b->tanggal_masuk }}" required>
                      </div>
                      <div class="my-3">
                        <label for="kondisi_barang"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi Barang</label>
                      <input type="text" name="kondisi_barang" id="kondisi_barang"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="{{ $b->kondisi_barang }}" required>
                      </div>
                      <button type="submit" class="py-2 px-4 my-2 rounded-lg bg-black hover:bg-white text-white hover:text-black transition-all duration-200 hover:border border-black font-semibold">
                        Submit
                      </button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </tbody>
      </table>
      <div class="my-4">
        {{ $barang->links() }}
      </div>
    </div>
  </div>

</x-admin.app>
