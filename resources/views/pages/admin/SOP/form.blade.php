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
   <x-admin>
        <x-header title="Form SOP Project" urlBack="{{ route('admin.team.show', $id_team) }}" />
        <div class="container max-w-7xl">
             <form action="{{ $route }}" method="POST">
                  @csrf
                  @isset($old)
                       @method('PUT')
                  @endisset

                
                  <input type="hidden" name="team_id" value="{{ @$id_team }}">
                  <div class="mb-6">
                       <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                       <textarea id="message" rows="4" name="content" style="padding: 10px;"
                            class="ck_editor block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary p-6 focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ @$old->content }}</textarea>
                  </div>
                    @error('content')
                            <div class="text-red-600 italic text-xs">{{ $message }}</div>
                       @enderror

                  <button type="submit"
                       class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
             </form>
        </div>
        @include('vendor.ck_editor.ck_editor')

             @push('after-scripts')
          <script>
               const elements = document.querySelectorAll('.ck-blurred ul li');

               elements.forEach((element) => {
                    element.classList.add('list-disc');
                    element.classList.add('ml-6');
               });

               const ol = document.querySelectorAll('.ck-blurred ol li');
               ol.forEach((element) => {
                    element.classList.add('list-decimal');
                    element.classList.add('ml-6');
               });

               
               const h2 = document.querySelectorAll('.ck-blurred h2');
               h2.forEach((element) => {
                    element.classList.add('text-2xl');
                  
               });
          </script>
     @endpush
   </x-admin>
