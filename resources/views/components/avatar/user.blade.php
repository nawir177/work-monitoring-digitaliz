@props(['user'=>auth()->user()])
<div>
     <div class="flex items-center gap-3">
          <div class="col">
               @if ($user->getFirstMediaUrl('profile'))
                    <div class="w-10 h-10 bg-cover rounded-full bg-center"
                         style="background-image: url({{ $user->getFirstMediaUrl('profile') }})">

                    </div>
               @else
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                         <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                   clip-rule="evenodd"></path>
                         </svg>
                    </div>
               @endif
          </div>
          <div class="col">
               {{ $user->employe->name }}
          </div>
     </div>
</div>
