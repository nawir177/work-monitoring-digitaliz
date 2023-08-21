<script src="{{ asset('assets/ckeditor5/ckeditor.js') }}"></script>
<script>
     ClassicEditor
          .create(document.querySelector('.ck_editor'))
          .catch(error => {
               console.error(error);
          });
</script>

