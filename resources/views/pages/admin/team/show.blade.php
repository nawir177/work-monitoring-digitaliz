     <?php
     use Carbon\Carbon;
     
     ?>
     <x-admin>
          <div class="container p-2">
               <x-header title="Detail Team " />

               <div class="flex gap-3 flex-wrap my-4">
                    <a href="{{ route('print.detail-team', $team->id) }}" target="_BLANK"
                         class="px-3 py-2 flex gap-1 bg-slate-400 rounded-md text-white hover:bg-slate-300">
                         <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                   stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                   <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                              </svg>
                         </div>
                         Print
                    </a>
                    <a href="{{ route('admin.task.show', $team->project->id) }}"
                         class="px-3 py-2 bg-amber-400 flex gap-1 rounded-md text-white hover:bg-amber-300">
                         <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                   class="w-6 h-6">
                                   <path
                                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z" />
                                   <path
                                        d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z" />
                              </svg>

                         </div>
                         Taks Project
                    </a>
                    <a href="{{ route('admin.chat-group.show', $team->id) }}"
                         class="px-3 py-2 flex gap-1 bg-green-400 rounded-md text-white hover:bg-green-300">
                         <div>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                   class="w-6 h-6">
                                   <path fill-rule="evenodd"
                                        d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z"
                                        clip-rule="evenodd" />
                              </svg>
                         </div>
                         Chat Group
                    </a>
                    <a href="{{ route('admin.sop.show', $team->id) }}"
                         class="px-3 py-2 gap-1 flex bg-primary rounded-md text-white hover:bg-cyan-400">
                         <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                   class="w-6 h-6">
                                   <path
                                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 013.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0121 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 017.5 16.125V3.375z" />
                                   <path
                                        d="M15 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0017.25 7.5h-1.875A.375.375 0 0115 7.125V5.25zM4.875 6H6v10.125A3.375 3.375 0 009.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V7.875C3 6.839 3.84 6 4.875 6z" />
                              </svg>

                         </div>
                         SOP
                    </a>
                    <a href="{{ route('admin.meeting.show', $team->id) }}"
                         class="px-3 py-2 bg-red-500 rounded-md text-white hover:bg-red-400 flex gap-1">
                         <div>
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                   class="w-6 h-6">
                                   <path
                                        d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z" />
                              </svg>

                         </div>
                         Meeting
                    </a>
               </div>
               <div class="max-w-7xl p-5 rounded bg-white">
                    <div class="grid md:grid-cols-2 font-primary gap-4 items-end">
                         <div class="col">
                              <small>Project Name</small>
                              <div class="font-semibold ">{{ $team->project->name }}</div>
                              <hr class="mt-2">
                         </div>
                         <div class="col">
                              <small>Team Name</small>
                              <div class="font-semibold ">{{ $team->name }}</div>
                              <hr class="mt-2">
                         </div>
                         <div class="col">
                              <small>Leader</small>
                              <div class="font-semibold mt-2">
                                   <div class="flex items-center gap-3">
                                        <div class="col">
                                             @if ($team->user->getFirstMediaUrl('profile'))
                                                  <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                       style="background-image: url({{ $team->user->getFirstMediaUrl('profile') }})">

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
                                        </div>
                                        <div class="col">
                                             {{ $team->user->employe->name }}
                                        </div>
                                   </div>
                              </div>
                              <hr class="mt-2">
                         </div>
                         <div class="col">
                              <small class="">Created Date</small>
                              <div class="font-semibold">
                                   {{ Carbon::parse($team->created_at)->isoFormat('dddd, d MMMM Y') }}</div>
                              <hr class="mt-2">
                         </div>
                    </div>

                    <h2 class="font-primary text-primary text-2xl my-6 font-semibold">Team Members</h2>

                    {{-- emeber table --}}
                    <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow ">
                         <table class="w-full text-sm text-left text-gray-500 ">
                              <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                                   <tr class="border-b">
                                        <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                             Name
                                        </th>

                                        <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                             Position
                                        </th>



                                   </tr>
                              </thead>
                              <tbody class="">
                                   @foreach ($team->teamMember as $value)
                                        <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                             <td class="md:py-4 py-1 md:px-6 px-3 ">
                                                  {{ $value->user->employe->name }}
                                             </td>
                                             <td class="md:py-2 py-1 md:px-6 px-3 ">
                                                  {{ $value->user->employe->position }}
                                             </td>
                                        </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </x-admin>
