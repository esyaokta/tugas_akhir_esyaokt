<div class="h-20 flex justify-end border-b border-black">
  <div class="w-5/6 flex justify-end items-center text-2xl pr-14 gap-8">
    <i class="fa-solid fa-bell fa-xl"></i>
    <i class="fa-regular fa-envelope fa-xl"></i>
  </div>
  <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
    class="w-1/6 flex pl-14 gap-4 items-center text-2xl border-l border-black" type="button">
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
