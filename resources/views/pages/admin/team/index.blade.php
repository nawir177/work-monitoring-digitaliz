<x-admin>
     <x-header title="Team" />
     <div>
          <div class="mt-10 mb-6 flex gap-4">
               <a href="{{ route('admin.team.create') }}"
                    class="bg-primary text-white text-center py-2 px-4 rounded-md hover:bg-cyan-400 hover:shadow-md shadow-cyan-500">Create
                    Team</a>
               <a class="py-2 w-42 gap-1 flex text-white px-3 bg-amber-400 hover:bg-amber-500 shadow-sm text-center rounded-lg"
                    href="{{ route('print.all-team') }}" target="_BLANK">
                    <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                   clip-rule="evenodd" />
                         </svg>

                    </div>
                    <div class="">
                         Print All Team
                    </div>

               </a>
          </div>
          <div class="my-4">
               <label class="relative block mb-5">
                    <span class="sr-only">Search</span>

                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-cyan-500">
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
                              <th scope="col" class="md:py-3 md:px-6 px-3 py-1">
                                   Progres Project
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
                         @foreach ($teams as $team)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                        <div class="flex gap-2 items-center">

                                             <div class="col">
                                                  {{ $team->name }}
                                             </div>

                                        </div>
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        {{ $team->project->name }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        <div class="flex justify-between mb-1">
                                             <span
                                                  class="text-sm font-medium text-blue-700 dark:text-white">{{ $team->project->progres }}%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                             <div class="bg-blue-600 h-2.5 rounded-full"
                                                  style="width: {{ $team->project->progres }}%"></div>
                                        </div>
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        <div class="flex items-center gap-3">
                                             <div class="col">
                                                  @if (!empty($team->user->getFirstMediaUrl('profile')))
                                                       <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                            style="background-image: url({{ $team->user->getFirstMediaUrl('profile') }})">

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
                                                  {{ $team->user->employe->name }}

                                             </div>
                                        </div>
                                   </td>


                                   <td class="py-4 px-6">

                                        <div class="flex gap-2 mx-auto">
                                             <a href="{{ route('admin.team.show', $team->id) }}"
                                                  class="p-1 rounded-lg bg-green-400 hover:bg-green-500 text-white">
                                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                       fill="currentColor" class="w-5 h-5">
                                                       <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                       <path fill-rule="evenodd"
                                                            d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                            clip-rule="evenodd" />
                                                  </svg>
                                             </a>
                                             <form action="{{ route('admin.team.destroy', $team->id) }}"
                                                  method="post">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit"
                                                       class="delete-btn bg-red-500 p-1 flex justify-center rounded-lg hover:bg-red-800 show_confirm"
                                                       ata-toggle="tooltip" title="Delete">
                                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-5 h-5 text-white">
                                                            <path fill-rule="evenodd"
                                                                 d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                                                 clip-rule="evenodd" />
                                                       </svg>
                                                  </button>
                                             </form>
                                             <a href="{{ route('admin.team.edit', $team->id) }}"
                                                  class="bg-amber-400 p-1 rounded-lg hover:bg-amber-500">
                                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                       fill="currentColor" class="w-5 h-5 text-white">
                                                       <path
                                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                                  </svg>
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

</x-admin>
