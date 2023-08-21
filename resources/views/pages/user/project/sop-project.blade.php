<x-app-layout>
     <div class="container p-4">
          <x-header title="SOP Project" urlBack="{{ route('myProject.show',$team_id) }}" />

          <div class="mt-6 p-6 bg-white rounded-xl shadow">
               <h1 class="text-xl">SOP Project : {{ @$sop->team->project->name }}</h1>
               <div class="content mt-6">
                    {!! @$sop->content !!}
               </div>

          </div>
     </div>
</x-app-layout>

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


const h2 = document.querySelectorAll('.content h2');
     h2.forEach((element) => {
          element.classList.add('text-2xl');
     });
</script>
