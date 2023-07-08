<x-admin.app>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
        {{ __('Laporan Bulanan') }}
      </h2>
    </div>
  </x-slot>

  <div class="flex flex-col justify-center gap-10">
    <form action="{{ route('admin.laporan.search') }}" method="GET">
      @csrf
      <div class="flex flex-col gap-6 border-2 border-black px-6 py-4 w-1/4">
        <div class="flex flex-col gap-4">
          <p class="font-semibold text-2xl">Bulan</p>
          <input type="month" name="periode">
        </div>
        <div class="flex justify-end">
          <button
            class="w-1/3 bg-black hover:bg-white border border-black text-white hover:text-black py-2 font-semibold transition-all duration-200">Submit</button>
        </div>
      </div>
    </form>
  </div>
</x-admin.app>
