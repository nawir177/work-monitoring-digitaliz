<x-app-layout>
     <x-header title="profile" description="Akses Menu Data Profile di Halaman ini" />
     @empty($profile->employe->address && $profile->employe->phone && $profile->employe->place_birth && $profile->employe->date_birth)
          <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
               role="alert">
               <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                         d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
               </svg>
               <span class="sr-only">Info</span>
               <div>
                    <span class="font-medium">Profile Anda Kurang lengkap!</span> Segera Lengkapi Profile Anda.
               </div>
          </div>
     @endempty


     <div class="max-w-7xl my-6 bg-white rounded-xl shadow p-6">
          <div class="grid md:grid-cols-4 gap-8 w-full">
               <div class="col ">
                    @if (!empty($profile->getFirstMediaUrl('profile')))
                         <img src="{{ $profile->getFirstMediaUrl('profile') }}" alt="" width=500>
                    @else
                         <img src="{{ asset('assets/img/profile.jpg') }}" alt="">
                    @endif

                    <div class="flex mt-6 gap-1">
                         <a href="{{ route('profile.index') }}"
                              class="px-4 py-2 rounded-lg text-white bg-primary hover:shadow hover:bg-cyan-400">Edit
                              Profile</a>
                         <a href=""
                              class="px-4 py-2 rounded-lg text-white bg-red-500 hover:shadow hover:bg-red-400">Delete
                              Account</a>
                    </div>

               </div>
               <div class="col md:col-span-3">
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Name</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->name }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Username</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">{{ $profile->username }}
                         </h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Gender</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->gender }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Position</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->position }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Email</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">{{ $profile->email }}
                         </h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Phone</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->phone }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Place Birth</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->place_birth }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Date Birth</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->date_birth }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Hire Date</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->hire_date }}</h4>
                         <hr>
                    </div>
                    <div class="mb-6">
                         <p class="text-slate-500 text mb-1">Address</p>
                         <h4 class="text-lg font-semibold font-primary text-slate-700 mb-2">
                              {{ $profile->employe->address }}</h4>
                         <hr>
                    </div>

               </div>
          </div>

     </div>
</x-app-layout>
