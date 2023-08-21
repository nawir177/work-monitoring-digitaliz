<x-app-layout>
     <div class="container md:max-w-7xl">
          <div class="md:grid md:grid-cols-12 md:pr-4 pr-0">
               <div class="max-w-7xl md:col-span-8 gap-6 md:p-4">
                    <div class="md:grid">
                         <div class="max-w-7xl">
                              <div class="col">
                                   <x-header title="Dashboard" icon="home-outline"
                                        description="Akses menu dan informasi disini"
                                        urlBack="{{ route('admin.dashboard') }}" />
                                   {{-- category --}}
                                   <section class="mt-10">
                                        <h1 class="text-primary font-primary text-2xl my-6 font-bold">Categories</h1>
                                        <div class="grid md:grid-cols-4 grid-cols-2 gap-1">
                                             @foreach ($categories as $category)
                                                  <div class="col">
                                                       <x-category icon="{!! $category->icon->value !!}"
                                                            color='{{ $category->color }}'
                                                            name='{{ $category->name }}'
                                                            folder="{{count($category->folder) }}"
                                                            href="{{ route('category.show', $category->slug) }}" />
                                                  </div>
                                             @endforeach

                                        </div>
                                   </section>
                              </div>

                              <div class="col">
                                  <section class="mt-9">
                                        <livewire:latest-project/>
                                   </section>
                              </div>
                              <div class="col">
                                   <h1 class="text-2xl mt-6 font-extrabold text-cyan-500 font-primary">Annountcement
                                   </h1>
                                   <livewire:announcement-show />
                              </div>
                         </div>
                    </div>
               </div>

               <div class="md:col-span-4 col-auto">
                    <div class="relative md:-mt-6">
                         <div class="content md:fixed md:h-screen md:overflow-y-auto">
                              <div class="grid grid-cols-1 md:px-6 px-0">
                                   <div class="col">
                                        <section>
                                             <x-status />
                                        </section>
                                   </div>
                                   <div class="col">
                                        <h1 class="text-2xl font-extrabold text-cyan-500 font-primary">Activities
                                        </h1>
                                        @foreach ($activities as $activity)
                                             {{-- Selection --}}
                                             <div
                                                  class="grid bg-white dark:bg-slate-700 rounded-xl mt-3 p-6 relative w-full shadow dark:text-slate-200 text-slate-700">
                                                  <div
                                                       class="selection cursor-pointer text-gray-600 hover:bg-gray-100 rounded-full w-6 h-6 flex absolute right-0 m-3">
                                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="m-auto">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                 d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                       </svg>


                                                  </div>
                                                  {{-- end Selection --}}
                                                  {{-- button Detail --}}
                                                  <a class="tSelection hidden absolute md:-right-16 right-10 text-sm font-semibold px-3 py-2 rounded-md bg-white shadow-lg"
                                                       href="/data/1">
                                                       <div class="font-Secular">
                                                            Detail
                                                       </div>
                                                  </a>
                                                  {{-- end button detail --}}

                                                  <div class="md:flex gap-4 mb-3">
                                                       @if (
                                                           !empty($activity->user->getFirstMediaUrl('profile')
                                                           ))
                                                            <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                                 style="background-image: url({{ $activity->user->getFirstMediaUrl('profile') }})">

                                                            </div>
                                                       @else
                                                            <div
                                                                 class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                                 <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                                      fill="currentColor" viewBox="0 0 20 20"
                                                                      xmlns="http://www.w3.org/2000/svg">
                                                                      <path fill-rule="evenodd"
                                                                           d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                           clip-rule="evenodd"></path>
                                                                 </svg>
                                                            </div>
                                                       @endif
                                                       <div class="font-primary">
                                                            <div
                                                                 class="text-sm font-bold text-gray-800 dark:text-gray-200">
                                                                 {{ $activity->user->employe->name }}
                                                            </div>
                                                            <small
                                                                 class="text-gray-400">{{ $activity->created_at->diffForHumans() }}</small>
                                                       </div>
                                                  </div>
                                                  <div
                                                       class="col-auto text-gray-800 dark:text-gray-200 leading-6">
                                                       {{ $activity->value }}
                                                  </div>
                                                  <div class="col-auto mt-6">
                                                       <div class="flex align-items-center w-full justify-between">
                                                            <div class="flex w-1/2">
                                                                 <div
                                                                      class="text-xs text-gray-500 font-primary text-left">
                                                                      {{ $activity->link->folder->category->name }} / {{ $activity->link->folder->name }}
                                                                 </div>
                                                            </div>

                                                       </div>
                                                  </div>
                                             </div>
                                        @endforeach
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </div>

     <script>
          let icon = document.querySelectorAll(".category_icon svg");
          for (let i = 0; i < icon.length; i++) {
               icon[i].removeAttribute("class");
          }
     </script>

</x-admin>
