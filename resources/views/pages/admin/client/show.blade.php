<x-admin>
     <x-header title="Detail client" description="Akses menu dan informasi Client disini"
          urlBack="{{ route('admin.client.index') }}" />
     <div class="flex my-4">
          <a class="py-2 w-42 gap-1 flex text-white px-3 bg-amber-400 hover:bg-amber-500 shadow-sm text-center rounded-lg"
               href="{{ route('print.detail-client', $client->id) }}" target="_BLANK">
               <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                         <path fill-rule="evenodd"
                              d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                              clip-rule="evenodd" />
                    </svg>

               </div>
          </a>
     </div>
     <div class="container max-w-7xl mx-auto py-8 bg-white rounded-lg shadow-md p-6">
          <h1 class="text-primary mb-8 mt-4 text-3xl font-primary">Show Client</h1>

          <div class="">
               <div class="w-full gap-6 grid md:grid-cols-2 ">
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Client Name</dt>
                         <dd class="text-lg font-semibold">{{ $client->name }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Company</dt>
                         <dd class="text-lg font-semibold">{{ $client->company }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                         <dd class="text-lg font-semibold">{{ $client->email }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone</dt>
                         <dd class="text-lg font-semibold">{{ $client->phone }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Address</dt>
                         <dd class="text-lg font-semibold">{{ $client->address }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3">
                         <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Project type</dt>
                         <dd class="text-lg font-semibold">{{ $client->project_type }}</dd>
                         <hr class="w-full mt-2">
                    </div>
                    <div class="col pb-3 md:col-span-2 mt-6">
                         <dt class="mb-1 font-semibold md:text-lg dark:text-gray-400">Project Description</dt>
                         <dd class="font-medium font-primary">{{ $client->project_description }}</dd>
                         <hr class="w-full mt-2">
                    </div>

               </div>

          </div>
     </div>
</x-admin>
