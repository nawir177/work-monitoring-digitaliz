<x-admin>

     <x-header title="User Presence" />


     <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
          <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
               data-tabs-toggle="#myTabContent" role="tablist">
               <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                         data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                         aria-selected="false">Today Presence</button>
               </li>

               <li class="mr-2" role="presentation">
                    <button
                         class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                         id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                         aria-controls="settings" aria-selected="false">Detail</button>
               </li>
               <li role="presentation">
                    <button
                         class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                         id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                         aria-controls="contacts" aria-selected="false">Work Permit</button>
               </li>
               <li class="mr-2" role="presentation">
                    <button
                         class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                         id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                         aria-controls="dashboard" aria-selected="false">Month Presence</button>
               </li>

          </ul>
     </div>
     <div id="myTabContent">
          <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
               aria-labelledby="profile-tab">
               @include('pages.admin.presence.partial.today')
          </div>
          <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
               aria-labelledby="dashboard-tab">
               @include('pages.admin.presence.partial.all-present')
          </div>
          <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="settings" role="tabpanel"
               aria-labelledby="settings-tab">
               @include('pages.admin.presence.partial.detail')
          </div>
     </div>
     <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
          aria-labelledby="contacts-tab">
          @include('pages.admin.presence.partial.work-permit')
     </div>
     </div>
     @include('vendor.sweetalert.btn-delete')
</x-admin>
