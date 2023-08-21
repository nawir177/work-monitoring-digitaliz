<x-admin>
     <x-header title="Show Employe" description="Akses Menu Data Detail Karyawan di Halaman ini" />
   


     <div class="max-w-7xl my-6 bg-white rounded-xl shadow p-6">
          <div class="grid md:grid-cols-4 gap-8 w-full">
               <div class="col ">
                    @if (!empty($profile->getFirstMediaUrl('profile')))
                         <img src="{{ $profile->getFirstMediaUrl('profile') }}" alt="" width=500>
                    @else
                         <img src="{{ asset('assets/img/profile.jpg') }}" alt="">
                    @endif

                   

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
</x-admin>
