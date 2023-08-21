<x-admin>
     @push('after-styles')
          <style>
               .ck-editor__editable[role="textbox"] {
                    /* editing area */
                    min-height: 200px;
                    padding: 300px;
               }
               
          </style>
            <link rel="stylesheet" href="{{ asset('vendor/dropify/dist/css/dropify.css') }}">
     @endpush
     <x-header title="{{ @$old ? 'Form Edit Pemngumuman' : 'Form Tambah Pengumuman' }}"
          description="Akses menu dan informasi Client disini" icon="document-text-outline"
          urlBack="{{ route('admin.client.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Announcement</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post" enctype="multipart/form-data">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset
               <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                         Title</label>
                    <input type="text" id="title"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="Announcement title" name="title" required
                         value="{{ old('title', @$old->title) }}">
               </div>
               <div class="mb-6">
                    <label for="thumbnail_value" class="form-label">Lampiran</label>
                    <input type="file" name="lampiran" class="dropify" id="thumbnail_value" data-height="170" />
               </div>

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
     <script src="{{ asset('assets/dropify/dist/js/dropify.js') }}"></script>
     <script>
          $('.dropify').dropify({
               messages: {
                    'default': 'Drag and drop a file here or click',
               }
          });
     </script>
</x-admin>
