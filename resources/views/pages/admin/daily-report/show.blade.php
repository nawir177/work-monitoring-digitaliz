<x-admin>
     <div class="container md:p-2">
          <x-header title="Daily Report List" />

          {{-- content --}}
          @forelse ($dailyReport->dailyReportList as $value)
               <div class=" bg-white rounded-xl mt-3 p-6 relative md:w-2/3 w-full shadow text-slate-700 mx-auto">
                    <button id="dropdownProject" data-dropdown-toggle="dropdown-project_{{ $value->id }}"
                         class="selection -top-1 cursor-pointer text-gray-600 hover:bg-gray-100 rounded-full w-6 h-6 flex absolute right-0 m-3">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="m-auto">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                         </svg>
                    </button>
                    {{-- dropdown --}}

                    <div id="dropdown-project_{{ $value->id }}"
                         class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                         <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                              
                              <li>
                                   <button type="button" data-modal-toggle="edit_modal"
                                        
                                        class="block px-4 w-full py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">print</button>
                              </li>
                              @if($value->user_id == auth()->user()->id)
                              <li>
                                   <a href="{{ route('daily-report-list.edit',$value->id) }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                              </li>
                              <li>
                                   <form action="{{ route('daily-report-list.destroy',$value->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                             class="delete-btn block w-full px-4 py-2  text-start hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete
                                        </button>
                                   </form>
                              </li>
                              @endif
                         </ul>
                    </div>
                    {{-- end dropdown --}}
                    <div class="md:flex gap-4 mb-3">
                         @if (!empty($value->user->getFirstMediaUrl('profile')))
                              <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                   style="background-image: url({{ $value->user->getFirstMediaUrl('profile') }})">
                              </div>
                         @else
                              <div
                                   class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                   <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                             d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                             clip-rule="evenodd"></path>
                                   </svg>
                              </div>
                         @endif
                         <div class="font-inter">
                              <div class="text-sm font-bold text-gray-800">{{ $value->user->employe->name }} - <div
                                        class="inline text-gray-400">{{ $value->user->employe->position }}</div>
                              </div>
                              <small class="text-gray-400">{{ $value->created_at->diffForHumans() }}</small>
                         </div>
                    </div>
                    <div class="font-thin text-slate-400">Project</div>
                    <div class="flex w-1/2 mb-4">
                         <div class="font-semibold text-slate-700 font-inter text-left capitalize text-lg">
                              {{ $value->project->name }}
                         </div>
                    </div>

                    <div class="content col-auto font-inter text-gray-600 leading-6">
                         {!! $value->content !!}
                    </div>
               </div>
          @empty
               <div class="mt-36 font-thin text-center text-slate-500 text-3xl">
                    Noting Data
               </div>
          @endforelse
          {{-- end content --}}
     </div>

     @push('after-scripts')
          <script>
               const elements = document.querySelectorAll('.content ul li');
               elements.forEach((element) => {
                    element.classList.add('list-disc');
                    element.classList.add('ml-6');
               });

               const ol = document.querySelectorAll('.content ol li');
               ol.forEach((element) => {
                    element.classList.add('list-decimal');
                    element.classList.add('ml-6');
               });
               
          </script>
     @endpush
</x-admin>
