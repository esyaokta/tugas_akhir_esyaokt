<x-admin.app>
  <x-slot name="header">
    <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
      {{ __('Pengguna') }}
    </h2>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">
    @if (session('succes'))
      <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
        {{ session('succes') }}
      </div>
    @endif
    <h2 class="text-2xl">Form Tambah Pengguna</h2>

    <form action="{{ route('admin.user.store') }}" method="POST">
      @csrf
      <div class="flex justify-between gap-28">
        <div class="flex flex-col items-end justify-center w-1/2 gap-8">
          <div class="flex gap-10 items-center justify-end">
            <label for="nama" class="text-xl">Nama</label>
            <input type="text" name="nama" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="username" class="text-xl">Username</label>
            <input type="text" name="username" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="nim" class="text-xl">NIM</label>
            <input type="number" name="nim" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="no_hp" class="text-xl">No HP</label>
            <input type="text" name="no_hp" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="email" class="text-xl">Email</label>
            <input type="email" name="email" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="password" class="text-xl">Password</label>
            <input type="password" name="password" class="h-16 border w-52 focus:ring-black">
          </div>
          <div class="flex gap-10 items-center justify-end">
            <label for="role" class="text-xl">Role</label>
            <select id="role" name="cekkode" class="h-16 border w-52 focus:ring-black">
              <option selected disabled>Choose a role</option>
              <option value="1">User</option>
              <option value="0">Admin</option>
            </select>
          </div>
        </div>
        <div class="w-1/2 flex items-end">
          <button type="submit"
            class="py-4 px-8 text-2xl font-bold bg-gray-300 hover:bg-gray-400 transition-all duration-200 border border-black">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</x-admin.app>
