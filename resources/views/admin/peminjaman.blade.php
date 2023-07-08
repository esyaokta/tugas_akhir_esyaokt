<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Approval Peminjaman') }}
    </h2>
  </x-slot>


  <div class="relative overflow-x-auto">
    <!-- Success Message -->
    @if (session('success'))
      <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
          <p>{{ session('success') }}</p>
        </div>
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
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-black">
      <thead
        class="text-base text-gray-700 uppercase bg-[#FFFCFC] dark:bg-gray-700 dark:text-gray-400 border-b border-black">
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
          <th scope="col" class="px-6 py-3 border-r border-black">
            Persetujuan
          </th>
          <th scope="col" class="px-6 py-3 border-r border-black">
            Alasan
          </th>
          <th scope="col" class="px-6 py-3">
            aksi
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peminjaman as $p)
          <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
            <th scope="row" class="px-6 py-4 border-r border-black ">
              {{ $loop->iteration }}
            </th>
            <td class="px-6 py-4 border-r border-black">
              {{ $p->user->nim }}
            </td>
            <td class="px-6 py-4 border-r border-black">
              {{ $p->user->nama }}
            </td>
            <td class="px-6 py-4 border-r border-black">
              {{ $p->user->no_hp }}
            </td>
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
            <td class="px-6 py-4 flex justify-center gap-3">
              <button data-modal-target="{{ "defaultModal-".$p->id }}" data-modal-toggle="{{ "defaultModal-".$p->id }}" type="button">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
              <form action="{{ route('admin.peminjaman.destroy', ['id' => $p->id]) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="fa-regular fa-trash-can">
                </button>
              </form>
            </td>
          </tr>
          <div id="{{ "defaultModal-".$p->id }}" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 w-full hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <form action="{{ route('admin.peminjaman.update', ['id' => $p->id]) }}" method="POST">
                @csrf
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Persetujuan Peminjaman Ruangan
                    </h3>
                    <button type="button"
                      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-hide="{{ "defaultModal-".$p->id }}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-6 space-y-6 flex flex-col gap-3">
                    <div class="flex flex-col gap-1 w-1/2">
                      <label for="persetujuan" class="">Persetujuan</label>
                      <select name="persetujuan" id="persetujuan" class="rounded-md">
                        <option value="" selected disabled>Pilih</option>
                        <option value="Menunggu">Menunggu</option>
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditolak">Ditolak</option>
                      </select>
                    </div>
                    <div class="flex flex-col gap-1 w-1/2">
                      <label for="alasan" class="">Alasan</label>
                      <textarea name="alasan" id="alasan" cols="30" rows="10" class="rounded-md"></textarea>
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 gap-4 border-t rounded-b">
                    <button data-modal-hide="{{ "defaultModal-".$p->id }}" type="submit"
                      class="text-white bg-black hover:bg-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center border border-black hover:text-black transition-all duration-150">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        @endforeach
      </tbody>
    </table>
  </div>
</x-admin.app>
