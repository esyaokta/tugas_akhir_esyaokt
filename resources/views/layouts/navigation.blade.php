
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('94841b9df0f3d8aa0bd7', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      console.log("dataku",data)
      // count unread notification
      var totalCount =  data.message;
      var count = parseInt($('.notif-count').attr('data-count'));
      
      $('.notif-count').attr('data-count', totalCount);
      $('.notif-count').html(totalCount);

      // save total to session storage
      sessionStorage.setItem('totalNotif', totalCount);
    });

    $(document).ready(function(){
      // get total notification from session storage
      var totalNotif = sessionStorage.getItem('totalNotif');
      $('.notif-count').attr('data-count', totalNotif);
      $('.notif-count').html(totalNotif);
    });
  </script>
<nav x-data="{ open: false }" class="bg-blue-400 ">
    <!-- Primary Navigation Menu -->
    <div class="flex items-center justify-between px-10">
    
      <div class="shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
          <!-- <x-application-logo class="block w-auto fill-current text-gray-800" /> -->
          <img src="{{url('logoku2.png')}}" style="height: 20%; width: 35%;"/>
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
          <!-- <div class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('halaman.pemberitahuan') }}">
              PEMBERITAHUAN
            </a>
          </div>
          <div class="text-center font-semibold uppercase text-2xl px-4 py-2">
            <a href="{{ route('logout') }}" >
              KELUAR
            </a>
          </div> -->
        </div>
        <div>
          
        </div>
      </div>


      <div class="flex w-1/6">
        <div class="flex justify-center items-center text-xl pr-14 gap-8">
        <a href="{{ route('halaman.pemberitahuan') }}">
          <i class="fa-solid fa-bell fa-xl text-blue-500" id="notifications">
            <div class="notif-count absolute rounded-full -mt-4  ml-4 h-4 w-4 flex items-center justify-center bg-red-500 text-white text-xs" data-count="0"></div>
          </i>        
        </a>
        </div>
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex gap-4 items-center text-2xl " type="button">
              <i class="fa-solid fa-circle-user fa-xl"></i>
            <h2 class="font-semibold capitalize">{{ Auth::user()->nama }}</h2>
        </button>
      </div>

      <!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 w-1/6 dark:bg-gray-700 border border-black">
  <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
    <li>
      <form action="{{ route('logout') }}">
        <button class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full">
          Sign out
        </button>
      </form>
    </li>
  </ul>
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
