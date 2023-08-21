{{-- Selection --}}
@foreach ($announcement as $value)
     <div class=" bg-white rounded-xl mt-3 p-6 relative w-full shadow text-slate-700">
          <div
               class="selection -top-1 cursor-pointer text-gray-600 hover:bg-gray-100 rounded-full w-6 h-6 flex absolute right-0 m-3">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="m-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                         d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
               </svg>


          </div>
          {{-- end Selection --}}
          {{-- button Detail --}}

          <a class="tSelection hidden absolute md:-right-16 right-10 text-sm font-semibold px-3 py-2 rounded-md bg-white shadow-lg"
               href="">
               <div class="font-Secular">
                    Detail
               </div>
          </a>

          {{-- end button detail --}}

          <div class="md:flex gap-4 mb-3">
               @if (!empty($value->user->getFirstMediaUrl('profile')))
                    <div class="w-10 h-10 bg-cover rounded-full bg-center"
                         style="background-image: url({{ $value->user->getFirstMediaUrl('profile') }})">
                    </div>
               @else
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                         <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                   clip-rule="evenodd"></path>
                         </svg>
                    </div>
               @endif
               <div class="font-inter">
                    <div class="text-sm font-bold text-gray-800">{{ $value->user->employe->name }}</div>
                    <small class="text-gray-400">{{ $value->created_at->diffForHumans() }}</small>
               </div>
          </div>
          <div class="flex w-1/2 mb-4">
               <div class="font-semibold text-gray-700 font-inter text-left capitalize text-lg">
                    {{ $value->title }}
               </div>
          </div>

          <div class="col-auto font-inter text-gray-600 leading-6">
               {!! $value->content !!}
          </div>
          @empty(!$value->getFirstMediaUrl('lampiran'))
               <div class="col-auto mt-3">
                    <a href="{{ $value->getFirstMediaUrl('lampiran') }}" target="_BLANK">
                         <div class="flex gap-2 items-center">
                              <div>
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-8 h-8 text-slate-400">
                                        <path fill-rule="evenodd"
                                             d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"
                                             clip-rule="evenodd" />
                                        <path
                                             d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                                   </svg>

                              </div>
                              <div class="">
                                   <p>{{ $value->getFirstMedia('lampiran')->file_name }}</p>

                              </div>
                         </div>
                    </a>
               </div>
          @endempty
          <div class="col-auto mt-6">

               <div class="flex align-items-center w-full justify-between">


                    <div class="flex">
                         <div class="flex w-full">
                              <div class="w-5 h-5 text-gray-800 my-auto">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                   </svg>
                              </div>
                              <div
                                   class="buttonComment cursor-pointer hover:text-gray-800 text-xs my-auto text-gray-500 font-inter mx-2">
                                   {{ $value->announcementComment->count() }} 
                                   Comment
                              </div>
                         </div>
                    </div>
               </div>
          </div>


          <div class="comment mt-4 hidden w-full">
               @foreach ($value->announcementComment as $item)
                    <div
                         class="flex gap-3 mb-2 {{ $item->user_id == $value->user_id ? 'justify-end' : 'justify-start' }}">
                         <div class="my-auto {{ $item->user_id == $value->user_id ? 'hidden' : 'block' }}">
                              @if (
                                  !empty(auth()->user()->getFirstMediaUrl('profile')
                                  ))
                                   <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                        style="background-image: url({{ $item->user->getFirstMediaUrl('profile') }})">

                                   </div>
                              @else
                                   <div
                                        class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                              @endif
                         </div>
                         <div class="my-auto">
                              <div class="bg-slate-100 rounded-xl p-2">
                                   {{ $item->value }}
                              </div>
                         </div>
                         <div class="my-auto {{ $item->user_id == $value->user_id ? 'block' : 'hidden' }}">
                              @if (!empty($item->user->getFirstMediaUrl('profile')))
                                   <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                        style="background-image: url({{ $item->user->getFirstMediaUrl('profile') }})">

                                   </div>
                              @else
                                   <div
                                        class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                              @endif
                         </div>
                    </div>
               @endforeach
          </div>
          <div class="mx-auto relative w-full mt-4">
               <form wire:submit.prevent="createComment({{ $value->id }})">
                    @csrf
                    <div class="flex gap-3">
                         <div class="flex items-center pl-2">
                              @if (!empty(auth()->user()->getFirstMediaUrl('profile')))
                                   <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                        style="background-image: url({{ auth()->user()->getFirstMediaUrl('profile') }})">

                                   </div>
                              @else
                                   <div
                                        class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd"
                                                  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                   </div>
                              @endif
                         </div>
                         <div class="w-full">


                              <label class="relative mb-5">
                                   <span class="sr-only">commnet</span>
                                   <buatton class="absolute inset-y-0 right-5 flex items-center " type="submit">
                                        <span class="">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                  fill="currentColor" class="w-5 h-5 text-slate-400">
                                                  <path
                                                       d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                                             </svg>

                                        </span>
                                   </buatton>
                                   <input
                                        class="placeholder:italic placeholder:text-slate-400 h-10 block border bg-slate-50 w-full rounded-full pr-3 border-gray-300 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                        placeholder="Add a Comment..." wire:model="value" autocomplete="off"
                                        type="text" name="value" id="comment" />
                                   <input type="hidden" wire:model="post_id" name="post_id" value="value post">
                              </label>
                         </div>
                    </div>

               </form>
          </div>

     </div>
@endforeach


<script>
     let buttonComment = document.querySelectorAll(".buttonComment");
     let commmet = document.querySelectorAll(".comment");

     for (let i = 0; i < buttonComment.length; i++) {
          buttonComment[i].addEventListener('click', function() {
               commmet[i].classList.toggle("hidden");
          })
     }
</script>
