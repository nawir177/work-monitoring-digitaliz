<div>
     <div class="w-full h-[400px] bg-white mx-auto my-6 rounded-xl shadow p-6 overflow-y-scroll" id="chatMessages">
          <div class="message">
               @foreach ($message as $item)
                    <div
                         class="flex gap-3 mb-2 {{ $item->user_id == auth()->user()->id ? 'justify-end' : 'justify-start' }}">
                         <div class="my-auto {{ $item->user_id == auth()->user()->id ? 'hidden' : 'block' }}">
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
                              <div class="bg-slate-100 rounded-xl p-2 max-w-4xl">
                                   {{ $item->value }}
                              </div>
                         </div>
                         <div class="my-auto {{ $item->user_id == auth()->user()->id ? 'block' : 'hidden' }}">
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
     </div>

     <form wire:submit.prevent="create">
          <label for="chat" class="sr-only">Your message</label>
          <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
               <button type="button"
                    class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 20 18">
                         <path fill="currentColor"
                              d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                    </svg>
                    <span class="sr-only">Upload image</span>
               </button>
               <button type="button"
                    class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 20 20">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z" />
                    </svg>
                    <span class="sr-only">Add emoji</span>
               </button>
               <textarea id="chat" rows="1" name="value"
                    class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Your message..." wire:model="value"></textarea>
               <button type="submit"
                    class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                    <svg class="w-5 h-5 rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 18 20">
                         <path
                              d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                    </svg>
                    <span class="sr-only">Send message</span>
               </button>
          </div>
     </form>

</div>

</div>
@push('after-scripts')
     <script>
          document.addEventListener('DOMContentLoaded', function() {
               var chatMessages = document.getElementById('chatMessages');
               chatMessages.scrollTop = chatMessages
                    .scrollHeight; // Set scroll ke bagian bawah saat halaman pertama kali dimuat

               // Panggil fungsi scrollToBottom setiap kali konten dalam elemen div berubah
               chatMessages.addEventListener('DOMSubtreeModified', function() {
                    chatMessages.scrollTop = chatMessages.scrollHeight;
               });
          });
     </script>
@endpush
