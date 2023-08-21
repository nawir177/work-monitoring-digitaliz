<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Login - Windmill Dashboard</title>
     @vite(['resources/css/app.css'])
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet" />
     <link rel="stylesheet" href="{{ asset('assets/admin/public/assets/css/tailwind.output.css') }}" />
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <script src="{{ asset('assets/admin/public/assets/js/init-alpine.js') }}"></script>
</head>

<body>
     <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
          <div
               class="flex-1 h-full max-w-6xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
               <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class=" md:h-auto md:w-1/2">
                         <img aria-hidden="true" class="object-cover dark:hidden w-full h-full "
                              src="{{ asset('images/login.png') }}" alt="Office" />
                         <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                              src="{{ asset('images/login.png') }}" alt="Office" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                         <div class="w-full">
                              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                   Login
                              </h1>
                              <form method="POST" action="{{ route('login') }}" class="text-slate-700">
                                   @csrf
                                   <!-- Username -->
                                   <div>
                                        <x-input-label for="username" :value="__('username')" />
                                        <x-text-input id="username" class="block mt-1 w-full" type="text"
                                             name="username" :value="old('username')" required autofocus
                                             autocomplete="username" />
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                   </div>

                                   <!-- Password -->
                                   <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                             name="password" required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                   </div>

                                   <!-- Remember Me -->
                                   <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                             <input id="remember_me" type="checkbox"
                                                  class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                  name="remember">
                                             <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                   </div>

                                   <!-- You should use a button here, as the anchor is only used for the example  -->
                                   <button
                                        class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                                        type="submit">
                                        Log in
                                   </button>


                              </form>

                              <hr class="my-8" />


                              <p class="mt-4">
                                   <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                        href="{{ route('password.request') }}">
                                        Forgot your password?
                                   </a>
                              </p>

                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>

</html>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Username -->
        <div>
            <x-input-label for="username" :value="__('username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
