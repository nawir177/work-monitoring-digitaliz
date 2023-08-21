@props(['name', 'url', 'folder_id'])
<div
     class="flex gap-1 md:bg-amber-400 md:w-56 justify-between bg-transparent rounded-lg hover:ring ring-slate-200 items-center">
     <div class="col-span-4">
          <a class="inline-block md:flex mx-3 py-2 justify-center md:justify-start" href="{{ $url }}">
               <div class="flex md:gap-4 gap-3 md:ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                         class="md:w-8 md:h-8 w-14 h-14 md:text-white text-amber-400">
                         <path
                              d="M19.5 21a3 3 0 003-3v-4.5a3 3 0 00-3-3h-15a3 3 0 00-3 3V18a3 3 0 003 3h15zM1.5 10.146V6a3 3 0 013-3h5.379a2.25 2.25 0 011.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 013 3v1.146A4.483 4.483 0 0019.5 9h-15a4.483 4.483 0 00-3 1.146z" />
                    </svg>

                    <p class="font-nunito text-sm my-auto hidden md:block text-white font-inter">
                         {{ $name }}
                    </p>

               </div>
               <p class="font-nunito my-auto md:hidden block text-xs mx-auto text-center">
                    Nama Folder
               </p>
          </a>
     </div>
     <div class="col">
          <div class="flex items-center">
               <button id="dropdownProject" data-dropdown-toggle="dropdown-project_{{ $folder_id }}"
                    class="p-0 m-0 text-center text-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
               </button>
               <div id="dropdown-project_{{ $folder_id }}"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                         <li>
                              <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Open</a>
                         </li>
                         <li>
                              <button type="button" data-modal-toggle="edit_modal"
                                   wire:click="rename({{ $folder_id }})"
                                   class="block px-4 w-full py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rename</button>
                         </li>
                         <li>
                              <form action="{{ route('folder.destroy', $folder_id) }}" method="POST">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit"
                                        class="delete-btn block w-full px-4 py-2  text-start hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete
                                   </button>
                              </form>
                         </li>
                    </ul>
               </div>
          </div>
     </div>
</div>
