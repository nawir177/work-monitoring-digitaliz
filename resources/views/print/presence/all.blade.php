     <?php use Carbon\Carbon; ?>
     <x-print-page>
          <h2>Presence to Month</h2>
          <h3>{{ Carbon::now()->isoFormat('MMMM Y') }}</h3>
          <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
               <table class="w-full text-sm text-left text-gray-500 " cellspacing="0" cellpadding="8" border="1"
                    style="width:100%">
                    <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                         <tr class="border-b">
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Name
                              </th>

                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Position
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Present
                              </th>
                              <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                   Work Permit
                              </th>


                         </tr>
                    </thead>
                    <tbody class="">
                         @foreach ($employes as $employe)
                              <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                   <td class="md:py-4 py-1 md:px-6 px-3 ">
                                        <div class="flex justify-between w-60">
                                             {{-- <div class="md:w-10 mr-2 md:h-10 w-10 h-10 mx-1 bg-primary inline-flex rounded-full bg-cover my-auto"
                                             style="background-image: url()">
                                        </div> --}}
                                             <div class="my-auto mr-10 flex-auto ">
                                                  {{ $employe->name }}
                                             </div>

                                        </div>
                                   </td>

                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        {{ $employe->position }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        {{ count($employe->user->presence) - count($employe->user->workPermit) }}
                                   </td>
                                   <td class="md:py-2 py-1 md:px-6 px-3">
                                        {{ count($employe->user->workPermit) }}
                                   </td>

                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>

     </x-print-page>
