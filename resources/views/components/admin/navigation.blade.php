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
<div class="h-20 flex justify-end  bg-white-500 absolute sticky top-0 z-100">
<div class="h-24 w-24 absolute -top-8 left-10">
  <x-application-logo class="block w-auto fill-current text-gray-800" />
</div>
  <div class="w-5/6 flex justify-end items-center text-2xl pr-14 gap-8">
  <a href="{{ route('admin.peminjaman.index') }}">
    <i class="fa-solid fa-bell fa-xl text-blue-500" id="notifications">
      <div class="notif-count absolute rounded-full -mt-4  ml-4 h-4 w-4 flex items-center justify-center bg-red-500 text-white text-xs" data-count="0"></div>
    </i>
  </a>
  </div>
  <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
    class="w-1/6 flex pl-14 gap-4 items-center text-2xl " type="button">
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
