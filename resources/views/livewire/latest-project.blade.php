<div>
     {{-- table --}}
     <h1 class="text-2xl mb-7 font-extrabold text-cyan-500 font-Secular">Latest
          Project
     </h1>
     {{-- search --}}
     <div class="mx-auto pr-4">
          <label class="relative mb-5">
               <span class="sr-only">Search</span>

               <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5 text-cyan-500">
                         <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
               </span>
               <input
                    class="placeholder:italic mb-6 placeholder:text-slate-400 h-12 block dark:bg-slate-700 bg-white w-full border-none rounded-xl pl-9 pr-3 focus:outline-none focus:border-sky-500 shadow focus:ring-sky-500 focus:ring-1 sm:text-sm"
                    placeholder="Search for files..." type="text" wire:model="search" name="search"
                    id="search" />
          </label>
     </div>
     <div class="relative rounded-xl md:mr-3 bg-white dark:bg-slate-700 shadow">
          <table class="w-full text-sm  text-left text-gray-500 dark:bg-slate-700 ">
               <thead class="text-md font-primary text-cyan-500 uppercase ">
                    <tr class="border-b">
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Project Name
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Client
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Start Date
                         </th>

                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              End Date
                         </th>
                         <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                              Action
                         </th>

                    </tr>
               </thead>
               <tbody class="allData">
                    @foreach ($projects as $project)
                         <tr
                              class="bg-white dark:bg-slate-700 border-b dark:border-slate-800 font-primary text-sm text-gray-500">
                              <td class="md:py-6 flex justify-start gap-3 ml-3">
                                   {{ $project->name }}
                              </td>
                              <td class="md:py-2 py-1 ">
                                   {{ $project->client->name }}
                              </td>
                              <td class="md:py-2 py-1">
                                   {{ $project->start_date }}
                              </td>
                              <td class="md:py-2 py-1">
                                   {{ $project->end_date }}
                              </td>
                              <td class="md:py-2 py-1 relative">
                                   @if (auth()->user()->hasRole('admin'))
                                        <a href="{{ route('admin.project.show',$project->id) }}"
                                             class="py-2 px-3 text-center bg-primary text-white rounded-md hover:bg-cyan-300">Detail</a>
                                   @else
                                        <a href="{{route('project.show',$project->id) }}"
                                             class="py-2 px-3 text-center bg-primary text-white rounded-md hover:bg-cyan-300">Detail</a>
                                   @endif

                              </td>

                         </tr>
                    @endforeach
               </tbody>
               <tbody id="Content" class="searchData"></tbody>
          </table>
     </div>
</div>
