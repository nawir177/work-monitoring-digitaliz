<?php use Carbon\Carbon;  ?>
<x-admin>
     <div class="container p-4">
          <x-header title="Meeting" urlBack="{{ route('admin.team.show', $team_id) }}" />

          <div class="flex">
               <a href="{{ route('admin.meeting.create_data', $team_id) }}"
                    class="py-2 px-3 rounded-lg shadow bg-primary hover:bg-cyan-400 text-white">Create</a>
          </div>
          <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
               <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                         <tr class="border-b">
                              <th scope="col" class="md:py-3 md:px-6 px-3 py-1">
                                   date
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   time
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   implemet
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   place
                              </th>

                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Action
                              </th>

                         </tr>
                    </thead>
                    <tbody class="">
                         @foreach ($meetings as $meeting)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                       {{ Carbon::parse( $meeting->date)->isoFormat('dddd, d MMMM Y ') }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        {{ $meeting->time }}
                                   </td>
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                        {{ $meeting->implement }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        @if ($meeting->implement == 'online')
                                             <a href="{{ $meeting->place }}" target="_BLANK  "
                                                  class="py-1.5 px-4 bg-green-400 text-white font-primary hover:bg-green-500 rounded-lg shadow">Link</a>
                                        @else
                                        {{ $meeting->place }}
                                        @endif
                                   </td>
                                   <td class="py-4 px-6">

                                        <div class="flex gap-2 mx-auto">

                                          <form action="{{ route('admin.meeting.destroy',$meeting->id) }}" method="post">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit"
                                                       class="delete-btn bg-red-500 p-1 flex justify-center rounded-lg hover:bg-red-800 show_confirm"
                                                       ata-toggle="tooltip" title="Delete">
                                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-5 h-5 text-white">
                                                            <path fill-rule="evenodd"
                                                                 d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                                                 clip-rule="evenodd" />
                                                       </svg>
                                                  </button>
                                             </form>
                                             <a href="{{ route('admin.meeting.edit',$meeting->id) }}"
                                                  class="bg-amber-400 p-1 rounded-lg hover:bg-amber-500">
                                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                       fill="currentColor" class="w-5 h-5 text-white">
                                                       <path
                                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                                                  </svg>
                                             </a>

                                        </div>
                                   </td>

                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
     @include('vendor.sweetalert.btn-delete')
</x-admin>
