<x-app-layout>
     <div class="container max-w-7xl">
          <x-header title="Detail Project" description="Akses menu dan informasi detail Project disini"
               icon="squares-2x2-outline" urlBack="{{ route('admin.project.index') }}" />

          <section class="my-10">
               <h1 class="font-primary text-3xl text-primary font-semibold text-center mb-2">Project Detail</h1>
               <hr class="mb-10 w-1/2 h-1 bg-primary mx-auto">

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
</x-app-layout>
