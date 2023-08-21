<x-admin>
   <x-header title="Announcement" icon="announcement" description="Akses informasi Data Pengumuman di manu ini" />
   <div class="mt-10 mb-6">
         <a href="{{ route('admin.announcement.create') }}" class="bg-primary text-white text-center py-2 px-4 rounded-md hover:bg-cyan-400 hover:shadow-md shadow-cyan-500">Create Announcemen</a>
   </div>
   <livewire:announcement-table/>
   @include('vendor.sweetalert.btn-delete')
</x-admin>
@push('after-scripts')
      <script>
               const elements = document.querySelectorAll('.content ul li');

               elements.forEach((element) => {
                    element.classList.add('list-disc');
                    element.classList.add('ml-6');
               });

               const ol = document.querySelectorAll('.content ol li');

               ol.forEach((element) => {
                    element.classList.add('list-decimal');
                    element.classList.add('ml-6');
               });
          </script>
@endpush