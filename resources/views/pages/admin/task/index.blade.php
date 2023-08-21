<x-admin>

<x-header title="Task Project" />


     <div class="flex gap-3">
          <button
               class="py-2 flex text-white px-3 mb-5 bg-amber-500 hover:bg-amber-600 shadow-sm text-center rounded-lg"
               type="button" data-modal-toggle="authentication-modal" id="addClient">
               <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                         <path fill-rule="evenodd"
                              d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"clip-rule="evenodd" />
                    </svg>
               </div>
               <div class="">
                    Add Task
               </div>

          </button>
          <button
               class="py-2 flex text-white px-3 mb-5 bg-green-500 hover:bg-green-600 shadow-sm text-center rounded-lg"
               data-modal-toggle="modal-edit" id="">
               <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                         <path
                              d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                         <path
                              d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>

               </div>
               <div class="">
                    Edit
               </div>

          </button>
     </div>
     @include('pages.admin.task.partials.modal')
      {{-- @include('pages.admin.task.partials.modal-edit') --}}

        @include('pages.admin.task.partials.task-table')

      
</x-admin>
