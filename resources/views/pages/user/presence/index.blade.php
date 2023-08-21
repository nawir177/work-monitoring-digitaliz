<?php use Carbon\Carbon; ?>
<x-app-layout>
     <div class="max-w-6xl">
          <x-header title="Presence" />
          <div class="container p-6 rounded-xl shadow bg-white font-primary">
               <div class="border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                         data-tabs-toggle="#myTabContent" role="tablist">
                         <li class="mr-2" role="presentation">
                              <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                   data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                   aria-selected="false">Presence</button>
                         </li>
                         <li class="mr-2" role="presentation">
                              <button
                                   class="inline-block p-4 border-b-2  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                   id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                   aria-controls="dashboard" aria-selected="false">Permission</button>
                         </li>

                    </ul>
               </div>
               <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                         aria-labelledby="profile-tab">
                         <form action="{{ route('presence.store') }}" method="POST">
                              @csrf
                              <button type="submit"
                                   class="py-2 px-4 bg-amber-400 hover:bg-amber-300 text-white rounded-lg">Presence</button>
                         </form>
                         <div class="overflow-x-auto w-full md:overflow-auto  relative rounded-xl shadow mt-6">
                              <table class="w-full text-sm text-left text-gray-500 ">
                                   <thead class="text-md font-inter text-cyan-500 uppercase bg-white">
                                        <tr class="border-b">
                                             <th scope="col" class="md:py-3 py-1 px-3">
                                                  No
                                             </th>
                                             <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                                  Date
                                             </th>
                                             <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                                  Time
                                             </th>
                                             <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                                  Status
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody class="">
                                        @foreach ($presence as $value)
                                             <tr class="bg-white border-b font-inter text-sm text-gray-500">
                                                  <td class="md:py-2 py-1 md:px-6 px-3">{{ $loop->iteration }}</td>
                                                  <td class="md:py-2 py-1 md:px-6 px-3 ">
                                                       {{ Carbon::parse($value->created_at)->isoFormat('dddd, d MMMM Y ') }}
                                                  </td>
                                                  <td class="md:py-2 py-1 md:px-6 px-3">
                                                       {{ Carbon::parse($value->created_at)->isoFormat('H : m') }}
                                                  </td>
                                                  <td class="md:py-2 py-1 md:px-6 px-3">
                                                       <div class="flex gap-2 w-20 justify-between">
                                                            <div class="col">
                                                                 {{ $value->status }}
                                                            </div>
                                                            @if (@$value->status == 'sakit')
                                                                 <a class="" target="_BLANK" href="{{ $value->getFirstMediaUrl('lampiran_surat') }}">
                                                                      <svg xmlns="http://www.w3.org/2000/svg"
                                                                           fill="none" viewBox="0 0 24 24"
                                                                           stroke-width="1.5" stroke="currentColor"
                                                                           class="w-6 h-6">
                                                                           <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                                      </svg>

                                                                 </a>
                                                            @endif
                                                       </div>
                                                  </td>


                                             </tr>
                                        @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>
                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                         aria-labelledby="dashboard-tab">
                         <h1 class="text-2xl font-semibold font-primary text-primary mb-4">Work Permit</h1>

                         <form action="{{ route('presence.workPermit') }}" method="POST"
                              enctype="multipart/form-data">
                              @csrf
                              <div class="mb-6">
                                   <label for="countries"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                   <select id="countries" name="status"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="sakit">Sakit</option>
                                        <option value="izin">Izin</option>
                                   </select>
                              </div>

                              <div class="mb-6">
                                   <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                                   <textarea id="message" rows="4" name="message"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Message..."></textarea>
                              </div>
                              <div class="mb-6">
                                   <label for="lampiran"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lampiran</label>
                                   <x-dropify name="lampiran_surat" />
                              </div>
                              <button type="submit"
                                   class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</x-app-layout>
