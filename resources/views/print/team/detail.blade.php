<?php use Carbon\Carbon; ?>
<x-print-page>
<style>
     .font-semibold{
          font-weight: bold;
     }
     small{
          color: rgb(96, 96, 96)
     }
     table{
               width: 100%;
          }
     .col hr{
          color: #b7b7b7;
     }
</style>
     <h2>Detail Team</h2>
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
               <table class="w-full text-sm text-left text-gray-500 " border="1" cellspacing="0" cellpadding="10">
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
</x-print-page>
