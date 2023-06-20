<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Pengguna') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">

    <div class="flex justify-between">
      <h2 class="text-2xl font-semibold">Data user</h2>
      <div class="flex h-10">
        <a href="{{ route('admin.user.create') }}"
          class="bg-gray-300 hover:bg-gray-400 transition-all duration-200 flex items-center gap-3 px-4 h-full">
          <i class="fa-solid fa-plus px-2"></i>
          <span class="border-r border-black h-full"></span>
          Tambah User
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
              nama
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              username
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              nim
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              no hp
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              email
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              role
            </th>
            <th scope="col" class="px-6 py-3">
              aksi
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $u)
            <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
              <th scope="row" class="px-6 py-4 border-r border-black ">
                {{ $loop->iteration }}
              </th>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $u->nama }}
              </td>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $u->username }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $u->nim }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $u->no_hp }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $u->email }}
              </td>
              <td class="px-6 py-4 border-r border-black capitalize">
                @if ($u->cekkode == '0')
                  Admin
                @else
                  User
                @endif
              </td>
              <td class="px-6 py-4 flex justify-center gap-3">
                <button data-modal-target="{{ "edit-modal-".$u->id }}" data-modal-toggle="{{ "edit-modal-".$u->id }}"
                  class="fa-regular fa-pen-to-square" type="button">
                </button>
                <form action="{{ route('admin.user.destroy', ['id' => $u->id]) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button class="fa-regular fa-trash-can">
                  </button>
                </form>
              </td>
            </tr>
            <!-- Main modal -->
            <div id="{{ "edit-modal-".$u->id }}" tabindex="-1" aria-hidden="true"
              class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="{{ "edit-modal-".$u->id }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                  <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit data user</h3>
                    <form class="space-y-6" action="{{ route('admin.user.update', ['id' => $u->id]) }}" method="post">
                      @csrf
                      @method('PUT')
                      <div class="my-3">
                        <label for="nama"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ $u->nama }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                      </div>
                      <div class="my-3">
                        <label for="username"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="username" value="{{ $u->username }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                      </div>
                      <div class="my-3">
                        <label for="nim"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                        <input type="number" id="nim" name="nim" value="{{ $u->nim }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                      </div>
                      <div class="my-3">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                          HP</label>
                        <input type="text" id="no_hp" name="no_hp" value="{{ $u->no_hp }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                      </div>
                      <div class="my-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                          HP</label>
                        <input type="email" id="email" name="email" value="{{ $u->email }}"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                      </div>
                      <div class="my-3">
                        <label for="cekkode"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                        <select id="cekkode" name="cekkode"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
                          @if ($u->cekkode == '0')
                            <option value="0" selected>Admin</option>
                            <option value="1">User</option>
                          @else
                            <option value="0">Admin</option>
                            <option value="1" selected>User</option>
                          @endif
                        </select>
                      </div>
                      <button type="submit"
                        class="py-2 px-4 my-2 rounded-lg bg-black hover:bg-white text-white hover:text-black transition-all duration-200 hover:border border-black font-semibold">
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
        {{ $users->links() }}
      </div>
    </div>
  </div>

</x-admin.app>
