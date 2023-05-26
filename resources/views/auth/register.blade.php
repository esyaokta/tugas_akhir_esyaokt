<x-guest-layout>
  <div class="flex justify-between w-full items-center min-h-screen gap-14">
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
          <img src="{{ asset('storage/images/inventory.jpg') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
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
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
          data-carousel-slide-to="2"></button>
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
    <div class="my-auto w-1/2 flex flex-col gap-8">
      <h1 class="font-bold text-3xl">Registrasi</h1>
      <form action="{{ route('register') }}" method="POST" class="w-1/3">
        @csrf
        <!-- Nama -->
        <div class="mb-6 flex flex-col gap-1">
          <x-input-label for="nama" :value="__('nama')" />
          <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')"
            placeholder="Masukkan nama anda" required autofocus autocomplete="nama" />
          <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <!-- NIM -->
        <div class="mb-6 flex flex-col gap-1">
          <x-input-label for="nim" :value="__('nim')" />
          <x-text-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')"
            placeholder="Masukkan nim anda" required autofocus autocomplete="nim" />
          <x-input-error :messages="$errors->get('nim')" class="mt-2" />
        </div>

        <!-- No HP -->
        <div class="mb-6 flex flex-col gap-1">
          <x-input-label for="no_hp" :value="__('no_hp')" />
          <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')"
            placeholder="Masukkan nomor hp anda" required autofocus autocomplete="no_hp" />
          <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mb-6 flex flex-col gap-1">
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
            placeholder="Masukkan email anda" required autofocus autocomplete="email" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--  -->
        <div class="mb-6 flex flex-col gap-1">
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')"
            placeholder="Masukkan password anda" required autofocus autocomplete="password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <button type="submit" class="px-8 py-2 bg-black rounded-lg text-white font-semibold "> Register </button>
        <div class="mt-4">
          <p>
            Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Masuk</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
