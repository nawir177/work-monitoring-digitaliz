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
                              No
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Name
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Content
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Comment
                         </th>

                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Action
                         </th>

                    </tr>
               </thead>
               <tbody class="">
                    @foreach ($announcements as $value)
                         <tr class="bg-white border-b font-inter text-sm text-gray-500">
                              <td class="md:py-2 py-1 md:px-6 px-3 ">
                                   {{ $loop->iteration }}
                              </td>
                              <td class="md:py-4 py-1 md:px-6 px-3 ">
                                   <div class="">
                                        {{ $value->title }}
                                   </div>

                              </td>
                              <td class="md:py-2 py-1 md:px-6 px-3 ">
                                   {!! Str::limit($value->content, 80, '...') !!}
                              </td>
                              <td class="md:py-2 py-1 md:px-6 px-3 text-slate-200 ">
                              <div class="flex gap-2 justify-start items-center">
                              
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                             d="M5.337 21.718a6.707 6.707 0 01-.533-.074.75.75 0 01-.44-1.223 3.73 3.73 0 00.814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 01-4.246.997z"
                                             clip-rule="evenodd" />
                                   </svg>
                                   <div class="text-slate-500">{{ $value->announcementComment->count() }}</div>
                              </div>

                              </td>

                              <td class="py-4 px-6">

                                   <div class="flex gap-2 mx-auto">
                                        <a href="{{ route('admin.announcement.show',$value->id) }}"
                                             class="p-1 rounded-lg bg-green-400 hover:bg-green-500 text-white">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                  fill="currentColor" class="w-5 h-5">
                                                  <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                  <path fill-rule="evenodd"
                                                       d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                       clip-rule="evenodd" />
                                             </svg>
                                        </a>
                                        <form action="{{ route('admin.announcement.destroy', $value->id) }}"
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

                                        <a href="{{ route('admin.announcement.edit', $value->id) }}"
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
     <div class="mt-4">

          {{ $announcements->links() }}
     </div>

</div>
