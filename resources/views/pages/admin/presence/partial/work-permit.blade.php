     <?php use Carbon\Carbon; ?>
     <div class="">
          <div class="relative overflow-x-auto rounded-md shadow">
               <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-cyan-400 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                         <tr>
                              <th class="p-4">No</th>
                              <th scope="col" class="px-6 py-3">
                                   Name
                              </th>
                              <th scope="col" class="px-6 py-3">
                                   Presence
                              </th>
                              <th scope="col" class="px-6 py-3">
                                   Date
                              </th>
                              <th scope="col" class="px-6 py-3">
                                   Message
                              </th>
                              <th scope="col" class="px-6 py-3">
                                   Lampiran Surat
                              </th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($workPermit as $value)
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                   <td class="p-4"> {{ $loop->iteration }}</td>
                                   <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $value->user->employe->name }}
                                   </th>
                                   <td class="px-6 py-4">
                                        {{ Carbon::parse($value->created_at)->isoFormat('dddd, D MMM Y') }}
                                   </td>
                                   <td class="px-6 py-4">
                                        {{ $value->presence->status }}
                                   </td>
                                   <td class="px-6 py-4">
                                        {{ $value->message }}
                                   </td>
                                   <td class="px-6 py-4">
                                        <a href="{{ $value->presence->getFirstMediaUrl('lampiran_surat') }}">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                  class="w-6 h-6">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                       d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                             </svg>
                                        </a>
                                   </td>

                              </tr>
                         @endforeach
                    </tbody>
               </table>
          </div>

     </div>
