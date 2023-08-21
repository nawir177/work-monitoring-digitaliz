<x-app-layout>
     <x-header title="Project" description="Akses menu dan informasi Project disini" icon="squares-2x2-outline" />

     <div>

          <div class="my-4">
               <label class="relative block mb-5">
                    <span class="sr-only">Search</span>

                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="w-5 h-5 text-cyan-500">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                         </svg>
                    </span>
                    <input wire:model="search"
                         class="placeholder:italic placeholder:text-slate-400 block bg-white md:w-1/2 w-full border-none rounded-full h-10 pl-9 pr-3 shadow-sm focus:outline-nosm focus:ring-cyan-500 focus:ring-1 text-md sm:text-t"
                         placeholder="Search for files..." type="text" name="search" />
               </label>
          </div>
          <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
               <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                         <tr class="border-b">
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Team Name
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Project
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Progres project
                              </th>

                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Leader
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Action
                              </th>

                         </tr>
                    </thead>
                    <tbody class="">
                         @foreach ($teamMembers as $team)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                        <div class="flex gap-2 items-center">
                                             <div class="col">
                                                  {{ $team->team->name }}
                                             </div>
                                        </div>
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        {{ $team->team->project->name }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        <div class="flex justify-between mb-1">
                                           
                                             <span
                                                  class="text-sm font-medium text-blue-700 dark:text-white">{{ $team->team->project->progres }}%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                             <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $team->team->project->progres }}%"></div>
                                        </div>
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        <div class="flex items-center gap-3">
                                             <div class="col">
                                                  @if (!empty($team->team->user->getFirstMediaUrl('profile')))
                                                       <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                            style="background-image: url({{ $team->team->user->getFirstMediaUrl('profile') }})">
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
                                             </div>
                                             <div class="col">
                                                  {{ $team->team->user->employe->name }}

                                             </div>
                                        </div>
                                   </td>


                                   <td class="py-4 px-6">

                                        <div class="flex gap-2 mx-auto">
                                             <a href="{{ route('myProject.show', $team->team->id) }}"
                                                  class="px-3 py-2 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-white">
                                                  Open
                                             </a>



                                        </div>
                                   </td>

                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
          
          {{-- <div class="mt-4">
               {{ $teams->links() }}
          </div> --}}

     </div>
</x-app-layout>
