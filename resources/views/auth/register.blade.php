<x-guest-layout>
     <h1 class="font-bold text-transparent text-4xl mt-4 mb-6 bg-clip-text bg-gradient-to-r from-blue-400 to-pink-600">User
          Registration</h1>
     <div class="">
          <form method="POST" action="{{ route('register') }}">
               @csrf

               <!-- Name -->
               <div class="mb-6">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                         :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
               </div>

               {{-- username --}}
               <div>
                    <x-input-label for="username" :value="__('username')" />
                    <x-text-input id="username" class="block mt-1 w-full" type="text" name="username"
                         :value="old('username')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
               </div>


               {{-- gender --}}
               <div class="my-10 flex gap-8 items-center">
                    <div class="flex items-center">
                         <input  id="default-radio-1" checked
                              type="radio" value="laki-laki" name="gender"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                         <label for="default-radio-1"
                              class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                    </div>
                    <div class="flex items-center">
                         <input  id="default-radio-2"
                              type="radio" value="perempuan" name="gender"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                         <label for="default-radio-2"
                              class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                    </div>

               </div>

               {{-- position --}}
               <div class="mb-6">
                    <label for="project_category"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                    <select id="project_category" name="position"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                         <option selected>Select Postion
                         </option>
                         <option value="Programmer" {{ @$old->position == 'Programmer' ? 'selected' : '' }}>
                              Programmer
                         </option>
                         <option value="Data Analyst" {{ @$old->position == 'Data Analyst' ? 'selected' : '' }}>
                              Data Analist
                         </option>
                         <option value="Graphic Designer"
                              {{ @$old->position == 'Graphic Designer' ? 'selected' : '' }}>
                              Desain Grafis
                         </option>
                         <option value="ui ux" {{ @$old->position == 'ui ux' ? 'selected' : '' }}>
                              UI UX
                         </option>

                    </select>
               </div>


               <!-- Email Address -->
               <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
               </div>



               <!-- Password -->
               <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
               </div>

               <!-- Confirm Password -->
               <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                         name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
               </div>

               <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                         href="{{ route('login') }}">
                         {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4">
                         {{ __('Register') }}
                    </x-primary-button>
               </div>
          </form>
     </div>
</x-guest-layout>
