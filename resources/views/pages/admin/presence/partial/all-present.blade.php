<?php use Carbon\Carbon;  ?>
<div class="max-w-6xl">
   <div class="text-primary text-2xl font-primary my-4">{{ Carbon::now()->isoFormat('MMMM Y') }}</div>
     <div class="flex gap-3 flex-wrap">
     <a href="{{ route('print.all-presence') }}" target="_BLANK" class="py-2 px-4 rounded-lg bg-amber-400 font-primary text-white hover:bg-amber-500">Print</a>
          <form action="{{ route('admin.presence.clear') }}" method="POST">
               @csrf
               <button class="delete-btn py-2 px-4 rounded-lg bg-red-500 font-primary text-white hover:bg-red-400">
                    Clear Presence
               </button>
          </form>
     </div>
  
     <livewire:presence-table />
</div>
