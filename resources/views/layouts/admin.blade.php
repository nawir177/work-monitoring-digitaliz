
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
     {{-- poppins font --}}
     {{-- font poppins --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Poppins:wght@300&display=swap"
          rel="stylesheet">

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     @stack('after-styles')
     @livewireStyles
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body class="font-sans antialiased">
     @include('sweetalert::alert')
     <div class="min-h-screen bg-secondary">
          @include('layouts.navbar')
          <main class="p-4 sm:ml-64 ">
               <div class="mt-14">
                    {{ $slot }}
               </div>
          </main>
     </div>
     <script src="{{ asset('assets/dist/flowbite.min.js') }}"></script>
     @livewireScripts
     @stack('after-scripts')
</body>

</html>
