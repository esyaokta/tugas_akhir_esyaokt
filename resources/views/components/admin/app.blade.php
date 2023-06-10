<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Flowbite -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/0b736e1e36.js" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
  <div class="flex flex-col min-h-screen">
    @include('components.admin.navigation')
    @include('components.admin.sidebar')

    <!-- Page Content -->
    <main>
      <div class="ml-[368px] py-7 px-6">
        <!-- Page Heading -->
        @if (isset($header))
          <header class="mb-16">
            {{ $header }}
          </header>
        @endif
        {{ $slot }}
      </div>
    </main>
  </div>
</body>

</html>
