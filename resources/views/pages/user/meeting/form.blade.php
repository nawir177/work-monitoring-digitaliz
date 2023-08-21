<x-app-layout>
     <x-header icon="document-text-outline" title="Form Add Meeting" urlBack="{{ route('meeting.show',$team_id) }}" />

     <div class="max-w-5xl mt-4 mx-auto rounded-xl p-6 bg-white shadow">
          <form action="{{ $route }}" method="POST">
          @csrf
          @isset($old)
              @method('PUT')
          @endisset
               <div class="mb-6">
                    <label for="date"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="date" id="date"
                         class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="date" value="{{ old('date', @$old->date) }}" name="date" required>
                         <input type="hidden" name="team_id" value="{{ $team_id }}">
               </div>

               <div class="mb-6">
                    <label for="time"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">time</label>
                    <input type="time" id="time"
                         class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="time" value="{{ old('time', @$old->time) }}" name="time" required>
               </div>
                  <div class="mb-6">
                    <label for="project_category"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Implement</label>
                    <select id="project_category" name="implement"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    
                         <option value="offline" {{ @$old->implemet == 'offline' ? 'selected' : '' }}>Offline
                         </option>
                          <option value="online" {{ @$old->implement == 'online' ? 'selected' : '' }}>Online
                         </option>
                         
                    </select>
               </div>
               <div class="mb-6">
                    <label for="place"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">place/Link</label>
                    <input type="text" id="place"
                         class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="place" value="{{ old('place', @$old->place) }}" name="place" required>
               </div>
              <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ?"Update" : "Create" }}</button>
               
          </form>
     </div>
</x-app-layout>
