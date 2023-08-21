<x-app-layout>
     <x-header title="link" icon="link" description="Akses Informasi Link di menu ini"
          urlBack="{{ route('category.show', $folder->category->slug) }}" />
     <div class=" md:px-24 py-10 bg-white max-w-7xl mx-auto rounded-xl">
          <h1 class="text-center font-Secular text-[32px] font-bold text-cyan-500">{{ $folder->name }}</h1>
          {{-- button modal  --}}
          <div class="flex w-full justify-between my-10">
               <div class="text-[24px] font-Secular text-cyan-500">Link</div>
               <div class="flex gap-3">
                    <button
                         class="inline-block text-amber-400 border-amber-400 border-2 hover:bg-amber-400 hover:text-white focus:ring-4 focus:outline-none font-medium rounded-xl text-sm font-Secular px-3 py-2 text-center"
                         type="button" data-modal-toggle="rename-modal">
                         Print All
                    </button>

                    <button
                         class="inline-block text-cyan-500 border-cyan-500 border-2 hover:bg-cyan-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm font-Secular px-5 py-2 text-center"
                         type="button" data-modal-toggle="authentication-modal">
                         Create Link
                    </button>
               </div>


          </div>

          <div id="authentication-modal" tabindex="-1" aria-hidden="true"
               class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal justify-center items-center">
               <div class="relative p-4 md:w-1/2 w-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                         <button type="button"
                              class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                              data-modal-toggle="authentication-modal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                              </svg>
                              <span class="sr-only">Close modal</span>
                         </button>
                         <div class="py-6 px-6 lg:px-8">
                              <h1
                                   class="mb-4 text-2xl font-medium font-Secular text-center text-cyan-500 dark:text-white">
                                   Create new Link</h1>
                              <form class="space-y-6 relative" action="{{ route('link.store') }}"
                                   method="POST">
                                   @csrf
                                   <input type="hidden" name="folder_id" value="{{ $folder->id }}">
                                   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                   <input type="hidden" name="folder_name" value="{{ $folder->name }}">
                                   <input type="hidden" name="category_name" value="{{ $folder->category->name }}">
                                   <div>
                                        <label for="text"
                                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Link
                                             Name</label>
                                        <input type="text" required name="name" id="name"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                             placeholder="Link Name" autocomplete="off">
                                   </div>
                                   <div>
                                        <label for="text"
                                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Link</label>
                                        <input type="text" required name="value" id="link"
                                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                             placeholder="Link" autocomplete="off">
                                   </div>
                                   <div>
                                        <label for="text"
                                             class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                             Description
                                        </label>
                                        <textarea required id="message" rows="4" name="description"
                                             class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                             placeholder="Your Description..."></textarea>

                                   </div>
                                   <div class="flex w-full gap-2 justify-end">
                                        <button type="submit"
                                             class=" text-white bg-cyan-500 hover:bg-cyan-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create
                                             Link
                                        </button>
                                        <button
                                             class="text-white bg-slate-500 hover:bg-slate-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                             data-modal-toggle="authentication-modal">
                                             Cancel
                                        </button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>

          <livewire:link-table :folder_id="$folder->id">
     @include('vendor.sweetalert.btn-delete')
</x-app-layout>
