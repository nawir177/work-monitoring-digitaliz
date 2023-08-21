   @push('after-styles')
          <style>
               .ck-editor__editable[role="textbox"] {
                    /* editing area */
                    min-height: 340px;
                    padding: 300px;
               }
               
          </style>
            <link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.css') }}">
     @endpush
<x-app-layout>
     <x-header title="Form Daily Report" />
     <div class="container max-w-7xl">
          <form action="{{ $route }}" method="POST">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset
               <div class="mb-6">
                 <label for="project_category"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Project</label>
                    <select id="project_category" name="project_id" required
                         class="bg-gray-50 border border-gray-300 w-1/2 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                         @foreach ($projects as $project)
                              <option {{ @$old->project_id == $project->id ? 'selected' : ''}} value="{{ $project->id }}">{{ $project->name }}
                              </option>
                         @endforeach
                    </select>
               </div>

               <input type="hidden" name="daily_report_id" value="{{ @$daily_report_id }}" >

               <div class="mb-6">
                    <label for="message"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                    <textarea id="message" rows="4" name="content" style="padding: 10px;"
                         class="ck_editor block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary p-6 focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ @$old->content }}</textarea>
               </div>
               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
          </form>
     </div>
       @include('vendor.ck_editor.ck_editor')
</x-app-layout>
