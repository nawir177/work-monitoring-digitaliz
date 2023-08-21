<x-admin>
     <x-header title="{{ @$old ? 'Form Edit Data Project' : 'Form Tambah Data Category' }}"
          description="Akses Form Category" icon="document-text-outline"
          urlBack="{{ route('admin.project.index') }}" />


     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
        <button
        class="inline-block text-white mb-3 bg-cyan-400 hover:bg-cyan-500 focus:ring-4 focus:outline-none mx-auto focus:ring-blue-300 rounded-lg px-3 py-2 text-center"
        type="button" data-modal-toggle="authentication-modal">
        Create New Icon
    </button>

       {{-- modal create icon --}}

     <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-slate-50 shadow-md rounded-lg dark:bg-gray-700">
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
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create new folder</h3>
                                <form class="space-y-6" action="{{ route('admin.icon.store') }}" method="POST">
                                    @csrf
                                    @isset($old)
                                        @method('PUT')
                                    @endisset
                                    <div>
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Icon
                                            Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="icon name" autocomplete="off">
                                    </div>
                                    <div>
                                        <label for="value"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Value</label>
                                        <input type="text" name="value" id="inputIcon"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="input with svg format" autocomplete="off">
                                    </div>

                                    <div class="mb-3">
                                        <p class="" id="iconPreview"></p>
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 ">Create
                                        Icon
                                    </button>
                                </form>                            </div>
                        </div>
                    </div>
                </div>
    {{-- end creat icon --}}


    
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Category</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset


               <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div class="mb-6">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              Name</label>
                         <input type="text" id="name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Category name..." name="name" required
                              value="{{ old('name', @$old->name) }}">
                    </div>

               </div>
               <div class="mb-6">
                    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Icon</h3>
                    <div class="flex flex-wrap gap-3">
                         @forelse ($icons as $icon)
                              <div class="col border rounded-md">
                                   <div class="flex items-center">
                                        <input id="icon_{{ $icon->id }}" type="radio" {{ $icon->id== @$old->icon_id ? "checked" : "" }}
                                             value="{{ $icon->id }}" name="icon_id" class="w-11 h-11 bg-white relative ring-0 focus:ring-0  active:ring-2 rounded-md">
                                        <label for="icon_{{ $icon->id }}"
                                             class="label_icon p-2 ml-0.5 absolute rounded-md click:ring-2 border-0 bg-white"
                                             id="target_{{ $icon->id }}">
                                             {!! $icon->value !!}
                                             {{-- <button type="button"class="p-3 rounded-md focus:ring-2 border-0">
                                        </button> --}}

                                        </label>
                                   </div>
                              </div>
                         @empty
                              <div class="text-center">
                                   Not Icon
                              </div>
                         @endforelse

                    </div>

               </div>
               <div class="mb-6">
                    <div class="flex w-full">
                         <input type="color" name="color" id="name" class="rounded-lg border-none mt-1">
                    </div>

               </div>

               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
          </form>
     </div>
     @push('after-scripts')
          <script>
               function resetRing() {
                    const inputElements = document.querySelectorAll('input[name="icon_id"]');

                    // Iterasi setiap elemen input dan hapus kelas "ring"
                    inputElements.forEach(function(inputElement) {
                         inputElement.classList.remove('ring');
                    });

               }

               function addRing($id) {
                    // Ambil referensi elemen yang ingin ditambahkan kelas
                    const targetElement = document.getElementById('target_' + $id);

                    // Tambahkan kelas tertentu pada elemen
                    targetElement.classList.toggle('ring-2');
                    resetRing();
               }

               // Panggil fungsi untuk menambahkan kelas saat fungsi dijalankan
          </script>
     @endpush
</x-admin>
