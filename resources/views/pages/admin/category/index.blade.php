<x-admin>
     <x-header title="Category" description="Akses informasi Data Category disini" icon="window" />

     <div class="mx-auto p-6 bg-white rounded-t-xl shadow max-w-7xl">
          <div class="flex w-full gap-3">
               <a href="{{ route('admin.category.create') }}"
                    class="py-2 flex text-white px-3 bg-amber-400 hover:bg-amber-300 shadow-sm text-center rounded-lg"
                    type="button" data-modal-toggle="authentication-modal" id="addClient">
                    <div class="">
                         Add New Category
                    </div>

               </a>
              
          </div>
          <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
               <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-md font-inter uppercase bg-primary text-white">
                         <tr class="border-b">
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   No
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Category Name
                              </th>
                               <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Slug
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Icon
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Action
                              </th>

                         </tr>
                    </thead>
                    <tbody class="">
                         @forelse($categories as $category)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                        {{ $loop->iteration }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        {{ $category->name }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        {{ $category->slug }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3" style="color:{{ $category->color }}">
                                        {!!$category->icon->value !!}
                                   </td>
                                   <td class="py-4 px-6">

                                        <div class="flex gap-2 mx-auto">
                                        
                                             <form action="{{ route('admin.category.destroy', $category->id) }}"
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

                                             <a href="{{ route('admin.category.edit', $category->id) }}"
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
                         @empty
                              <tr>
                                   <td colspan="4" class="text-center">Not Data</td>
                              </tr>
                         @endforelse
                    </tbody>
               </table>
          </div>


     </div>

</x-admin>
