@props([
    'title' => 'tittle header',
    'icon' => 'user-circle',
    'description' => 'Akses Informasi Data di sini',
    'urlBack'=>'#'
])
<div>
     <div class="flex w-full rounded-xl max-w-7xl bg-white shadow-sm mx-auto my-4 items-center p-2 justify-between">
          <div class="col">
               <div class="flex items-center gap-3">
                    <div class="col">
                         {{-- icon --}}
                         <x-icons.heroicons icon="{{ $icon }}"
                              class="w-[50px] h-[50px] text-primary" />

                    </div>
                    <div class="col">
                         <div class="gird items-center">
                              <div class="col">
                                   {{-- titte --}}
                                   <h2 class="text-lg font-semibold text-slate-700 font-primary">{{ $title }}
                                   </h2>
                              </div>
                              <div class="text-slate-400 text-sm md:text-md">
                                   <p>
                                        {{ $description }}
                                   </p>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
          <div class="col">
               {{-- btn back --}}
               <a href="{{ $urlBack }}"
                    class="w-12 h-12 hover:bg-slate-200 rounded-lg bg-slate-100 my-auto text-slate-500 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                         <path fill-rule="evenodd"
                              d="M11.03 3.97a.75.75 0 010 1.06l-6.22 6.22H21a.75.75 0 010 1.5H4.81l6.22 6.22a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z"
                              clip-rule="evenodd" />
                    </svg>
               </a>

          </div>
     </div>
</div>
