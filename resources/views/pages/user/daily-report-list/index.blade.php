<?php use Carbon\Carbon;  ?>
<x-app-layout>
     <div class="container p-2">
          <x-header title="Daily Report" />
         
          <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
               <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                         <tr class="border-b">
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Date
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Time
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Respons
                              </th>

                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Action
                              </th>

                         </tr>
                    </thead>
                    <tbody class="">
                         @foreach ($dailyReport as $value)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-2 py-1 md:px-6 px-3 ">
                                        {{ Carbon::parse($value->created_at)->isoFormat('dddd, D MMMM Y') }}
                                   </td>
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                         {{ Carbon::parse($value->created_at)->isoFormat('HH:mm') }}
                                   </td>

                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                         {{ count($value->dailyReportList) }}
                                   </td>
                                   <td class="py-4 px-6">
                                        <div class="flex gap-2 mx-auto">
                                             <a href="{{ route('daily-report-list.show',$value->id) }}" class="py-2 px-3 rounded-lg bg-amber-400 hover:bg-amber-300 text-white">
                                                  Open
                                             </a>
                                        </div>
                                   </td>
                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>
     </div>
</x-app-layout>
