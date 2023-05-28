<x-app-layout>

  <div class="max-w-7xl mx-auto px-12">
    <div class="flex justify-between">
      <div id="default-carousel" class="relative w-1/2" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative min-h-screen overflow-hidden rounded-lg md:min-h-screen">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/logo.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/room.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
      <div class="mx-auto bg-white flex flex-col justify-center gap-8">

        <!-- Header -->
        <div class="font-bold text-2xl">
          <h1>Peminjaman Ruang Laboratorium</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('peminjaman.store') }}" method="POST" class="w-3/4">
          @csrf

          <!-- Nama Kegiatan -->
          <div class="mb-6 flex flex-col gap-1">
            <x-input-label for="nama_kegiatan" :value="__('Nama Kegiatan')" />
            <x-text-input id="nama_kegiatan" class="block mt-1 w-full" type="text" name="nama_kegiatan"
              :value="old('nama_kegiatan')" placeholder="Masukkan nama kegiatan anda" required autofocus
              autocomplete="nama_kegiatan" />
            <x-input-error :messages="$errors->get('nama_kegiatan')" class="mt-2" />
          </div>

          <!-- Tanggal Pinjam -->
          <div class="mb-6 flex flex-col gap-1">
            <x-input-label for="tanggal_pinjam" :value="__('Tanggal Pinjam Ruang')" />
            <x-text-input id="tanggal_pinjam" class="block mt-1 w-full" type="date" name="tanggal_pinjam"
              :value="old('tanggal_pinjam')" required autofocus autocomplete="tanggal_pinjam" />
            <x-input-error :messages="$errors->get('tanggal_pinjam')" class="mt-2" />
          </div>

          <!-- Jam Pinjam -->
          <div class="mb-6 flex flex-col gap-1">
            <x-input-label for="jam_pinjam" :value="__('Jam Pinjam')" />
            <x-text-input id="jam_pinjam" class="block mt-1 w-full" type="time" name="jam_pinjam" :value="old('jam_pinjam')"
              required autofocus autocomplete="jam_pinjam" />
            <x-input-error :messages="$errors->get('jam_pinjam')" class="mt-2" />
          </div>

          <!-- Jam Selesai -->
          <div class="mb-6 flex flex-col gap-1">
            <x-input-label for="jam_selesai" :value="__('Jam Selesai')" />
            <x-text-input id="jam_selesai" class="block mt-1 w-full" type="time" name="jam_selesai"
              :value="old('jam_selesai')" required autofocus autocomplete="jam_selesai" />
            <x-input-error :messages="$errors->get('jam_selesai')" class="mt-2" />
          </div>

          <!-- Submit-->
          <button type="submit" class="px-8 py-2 bg-black rounded-lg text-white font-semibold "> Daftar </button>

        </form>
      </div>
    </div>
  </div>
</x-app-layout>
