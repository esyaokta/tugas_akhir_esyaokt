<nav x-data="{ open: false }" class="bg-blue-300">
    
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Logo -->
    <div class="shrink-0 flex items-center">
          <a href="{{ route('dashboard') }}">
            <x-application-logo class="block w-auto fill-current text-gray-800" />
          </a>
        </div>
      <div class="flex flex-col items-center gap-4">
        <!-- Navigation Links -->
        <div class="w-full flex justify-between items-center h-16">
          <div
            @if (request()->routeIs('dashboard')) class="text-center font-semibold uppercase text-2xl px-4 py-2 border-b-4 border-black" @endif
            class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('dashboard') }}">
              HOME
            </a>
          </div>
          <div
            @if (request()->routeIs('peminjaman.index')) class="text-center font-semibold uppercase text-2xl px-4 py-2 border-b-4 border-black" @endif
            class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('peminjaman.index') }}">
              PEMINJAMAN
            </a>
          </div>
          <div
          @if (request()->routeIs('barang.index')) class="text-center font-semibold uppercase text-2xl px-4 py-2 border-b-4 border-black" @endif
          class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('barang.index') }}">
              INVENTORY
            </a>
          </div>
          <div class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('halaman.pemberitahuan') }}">
              PEMBERITAHUAN
            </a>
          </div>
          <div class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('logout') }}" >
              KELUAR
            </a>
          </div>
        </div>
        <div>
          
        </div>
      </div>
    </div>

    <!-- Responsive Navigation Menu -->
    {{-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
          <div class="pt-2 pb-3 space-y-1">
              <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                  {{ __('Dashboard') }}
              </x-responsive-nav-link>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200">
              <div class="px-4">
                  <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                  <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
              </div>

              <div class="mt-3 space-y-1">
                  <x-responsive-nav-link :href="route('profile.edit')">
                      {{ __('Profile') }}
                  </x-responsive-nav-link>

                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-responsive-nav-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-responsive-nav-link>
                  </form>
              </div>
          </div>
      </div> --}}
  </nav>
