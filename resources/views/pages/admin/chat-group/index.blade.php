<x-admin>
     <div class="max-w-6xl">
          <x-header title="Chat Group" urlBack="{{ route('admin.team.show',$id_team) }}" />
          <livewire:show-chat-group :team_id="$id_team">
     </div>
</x-admin>
