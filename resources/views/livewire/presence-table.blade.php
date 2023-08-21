<div>
     <div class="my-4">
          <label class="relative block mb-5">
               <span class="sr-only">Search</span>

               <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5 text-cyan-500">
                         <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
               </span>
               <input wire:model="search"
                    class="placeholder:italic placeholder:text-slate-400 block bg-white md:w-1/2 w-full border-none rounded-full h-10 pl-9 pr-3 shadow-sm focus:outline-nosm focus:ring-cyan-500 focus:ring-1 text-md sm:text-t"
                    placeholder="Search for files..." type="text" name="search" />
          </label>
     </div>
     <div class="overflow-x-auto md:overflow-auto  relative rounded-xl shadow mt-6">
          <table class="w-full text-sm text-left text-gray-500 ">
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
                                {{ count($employe->user->presence)- count($employe->user->workPermit)}} 
                              </td>
                              <td class="md:py-2 py-1 md:px-6 px-3">
                                   {{ count($employe->user->workPermit) }}
                              </td>

                         </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
     
</div>
