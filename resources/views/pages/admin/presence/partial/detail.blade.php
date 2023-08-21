<?php
use Carbon\Carbon;

?>

<div class="p-6 mt-3 bg-white rounded-lg shadow ">
     <div class="text-md font-Secular text-cyan-400 mb-5">
          Date : {{ $time }}
     </div>

     <div class="flex w-full gap-6">
          <div class="w-1/3 h-52 bg-white rounded-xl shadow p-4">
               <h1 class="text-1xl font-Secular text-center text-cyan-400">Permission</h1>
               <hr class="w-2/3 h-0.5 mt-2 mb-3 bg-cyan-400 mx-auto">

               <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    @foreach ($permission as $value)
                         <li class="flex gap-3">
                              {{ $value->user->employe->name }}
                              <a class="" href="{{ $value->getFirstMediaUrl('lampiran_surat') }}" target="_BLANK">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                   </svg>
                              </a>
                         </li>
                    @endforeach
               </ol>
          </div>
          <div class="w-1/3 min-h-52 bg-white rounded-xl shadow p-4">
               <h1 class="text-1xl font-Secular text-center text-cyan-400">Not Presence</h1>
               <hr class="w-2/3 h-0.5 mt-2 mb-3 bg-cyan-400 mx-auto">
               <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    @foreach ($not_present as $item)
                         <li>{{ $item->employe->name }}</li>
                    @endforeach
               </ol>
          </div>
          <div class="w-1/3 h-52 bg-white rounded-xl shadow p-4">
               <h1 class="text-1xl font-Secular text-center text-cyan-400">Late</h1>
               <hr class="w-2/3 h-0.5 mt-2 mb-3 bg-cyan-400 mx-auto">
               <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    @foreach ($late as $value)
                         <li>{{ $value->user->employe->name }}</li>
                    @endforeach
               </ol>
          </div>
     </div>
</div>
