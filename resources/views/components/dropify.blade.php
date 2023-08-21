@props(['name'])
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
<div>
      <input type="file" name="{{ $name }}" class="dropify" id="thumbnail_value" data-height="170" />
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
