<x-admin>
     <div class="container max-w-7xl">
          <x-header title="Detail Project" description="Akses menu dan informasi detail Project disini"
               icon="squares-2x2-outline" urlBack="{{ route('admin.project.index') }}" />

          <section class="my-10">
               <h1 class="font-primary text-3xl text-primary font-semibold text-center mb-2">Project Detail</h1>
               <hr class="mb-10 w-1/2 h-1 bg-primary mx-auto">
               <div class="flex my-4">
                    <a class="py-2 w-42 gap-1 flex text-white px-3 bg-amber-400 hover:bg-amber-500 shadow-sm text-center rounded-lg"
                         href="{{ route('print.detail-project', $project->id) }}" target="_BLANK">
                         <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                   class="w-6 h-6">
                                   <path fill-rule="evenodd"
                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                        clip-rule="evenodd" />
                              </svg>

                         </div>
                    </a>
               </div>

               <div class="grid md:grid-cols-2 items-center p-6 rounded-xl shadow bg-white gap-8">
                    <div class="md:col-span-2">
                         <p class="text-slate-500 text-md mb-1">Project Name</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">{{ $project->name }}</h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">Type</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">
                              {{ $project->type }}</h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">Client</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">
                              {{ $project->client->name }}</h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">Frontend</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">{{ $project->frontend }}
                         </h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">Backend</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">{{ $project->backend }}
                         </h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">Start Date</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">
                              {{ $project->start_date }}</h4>
                         <hr>
                    </div>
                    <div class="col">
                         <p class="text-slate-500 text-md mb-1">End Date</p>
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2">{{ $project->end_date }}
                         </h4>
                         <hr>
                    </div>
                    <div class="md:col-span-2">
                         <h4 class="text-md font-semibold font-primary text-slate-700 mb-2 mt-6">
                              Description Project</h4>
                         <p class="text-slate-500 text-md mb-1">{{ $project->description }}</p>
                         <hr>
                    </div>
               </div>
          </section>
     </div>
</x-admin>
