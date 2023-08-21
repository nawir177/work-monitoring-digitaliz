<x-app-layout>
     <div class="max-w-6xl">
          <x-header title="Chat Group" urlBack="{{ route('myProject.show',$id_team) }}" />
          <livewire:show-chat-group :team_id="$id_team">
     </div>
</x-app-layout>
