<x-admin>
     <x-header title="Form Create Team" description="Akses menu dan informasi Client disini"
          icon="document-text-outline" urlBack="{{ route('admin.team.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Team</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset
               <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="col col-span-2">
                         <label for="Team Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team Name</label>
                         <input type="text" id="first_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Team Name..." required name="name"
                              value="{{ old('name', @$old->name) }}">
                    </div>
                    <div class="mb-6">
                         <label for="project_category"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project</label>

                         <select id="project_category" name="project_id"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option>Select Project</option>
                              @foreach ($projects as $project)
                                   <option value="{{ $project->id }}"
                                        {{ @$old->project_id == $project->id ? 'selected' : '' }}>
                                        {{ $project->name }}
                                   </option>
                              @endforeach
                         </select>
                    </div>
                    <div class="mb-6">
                         <label for="project_category"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Team
                              Leader</label>
                         <select id="project_category" name="user_id"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option>Select Team</option>
                              @foreach ($users as $user)
                                   <option value="{{ $user->id }}"
                                        {{ @$old->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->employe->name }}
                                   </option>
                              @endforeach
                         </select>
                    </div>
               </div>
               <div class="mb-6">
                    {{-- check box selcet user --}}
                    <h1 class="text-center text-2xl text-cyan-400 font-inter mb-4">Team Members</h1>
                    @if (isset($old))
                         @foreach ($teamMember as $item)
                              <div
                                   class="flex w-full p-4 mb-3 justify-between border gap-3 bg-slate-100 rounded-md items-center">
                                   <div class="col">
                                        <label for="{{ $item->id }}"
                                             class="w-full cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300">
                                             <div class="flex items-center gap-5 ">
                                                  @if (!empty($item->getFirstMediaUrl('profile')))
                                                       <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                            style="background-image: url({{ $item->user->getFirstMediaUrl('profile') }})">

                                                       </div>
                                                  @else
                                                       <div
                                                            class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                            <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                                 fill="currentColor" viewBox="0 0 20 20"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd"
                                                                      d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                      clip-rule="evenodd"></path>
                                                            </svg>
                                                       </div>
                                                  @endif
                                                  <div class="my-auto mr-10 flex-auto">

                                                       {{ $item->user->employe->name }}
                                                       <br>
                                                       <small>{{ $item->user->employe->position }}</small>
                                                  </div>
                                             </div>
                                        </label>
                                   </div>
                                   <div class="col-span-1 my-auto">
                                        <input id="{{ $item->user->id }}" type="checkbox" name="members[]"
                                             value="{{ $item->user->id }}" checked
                                             class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                   </div>
                              </div>
                         @endforeach

                         <h1 class="text-center text-2xl text-cyan-400 font-inter mb-4 mt-5">Add Team Members</h1>
                         @foreach ($userNotTeam as $item)
                              <div
                                   class="flex w-full p-4 mb-3 justify-between border gap-3 bg-slate-100 rounded-md items-center">
                                   <div class="col">
                                        <label for="{{ $item->id }}"
                                             class="w-full cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300">
                                             <div class="flex items-center gap-5 ">
                                                  @if (!empty($item->getFirstMediaUrl('profile')))
                                                       <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                            style="background-image: url({{ $item->getFirstMediaUrl('profile') }})">

                                                       </div>
                                                  @else
                                                       <div
                                                            class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                            <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                                 fill="currentColor" viewBox="0 0 20 20"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd"
                                                                      d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                      clip-rule="evenodd"></path>
                                                            </svg>
                                                       </div>
                                                  @endif
                                                  <div class="my-auto mr-10 flex-auto">

                                                       {{ $item->employe->name }}
                                                       <br>
                                                       <small>{{ $item->employe->position }}</small>
                                                  </div>
                                             </div>
                                        </label>
                                   </div>
                                   <div class="col-span-1 my-auto">
                                        <input id="{{ $item->id }}" type="checkbox" name="members[]"
                                             value="{{ $item->id }}"
                                             class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                   </div>
                              </div>
                         @endforeach
                    @else
                         @foreach ($users as $item)
                              <div
                                   class="flex w-full p-4 mb-3 justify-between border gap-3 bg-slate-100 rounded-md items-center">
                                   <div class="col">
                                        <label for="{{ $item->id }}"
                                             class="w-full cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300">
                                             <div class="flex items-center gap-5 ">
                                                  @if (!empty($item->getFirstMediaUrl('profile')))
                                                       <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                            style="background-image: url({{ $item->getFirstMediaUrl('profile') }})">

                                                       </div>
                                                  @else
                                                       <div
                                                            class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                            <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                                 fill="currentColor" viewBox="0 0 20 20"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd"
                                                                      d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                      clip-rule="evenodd"></path>
                                                            </svg>
                                                       </div>
                                                  @endif
                                                  <div class="my-auto mr-10 flex-auto">

                                                       {{ $item->employe->name }}
                                                       <br>
                                                       <small>{{ $item->employe->position }}</small>
                                                  </div>
                                             </div>
                                        </label>
                                   </div>
                                   <div class="col-span-1 my-auto">
                                        <input id="{{ $item->id }}" type="checkbox" name="members[]"
                                             value="{{ $item->id }}"
                                             class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                   </div>
                              </div>
                         @endforeach
                    @endif
               </div>
               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
          </form>
     </div>
</x-admin>
