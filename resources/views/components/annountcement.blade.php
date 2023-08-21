{{-- Selection --}}
<div class="grid bg-white rounded-xl mt-3 p-6 relative w-full shadow text-slate-700">
     <div
          class="selection cursor-pointer text-gray-600 hover:bg-gray-100 rounded-full w-6 h-6 flex absolute right-0 m-3">
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
          <div class="w-10 h-10 bg-primary rounded-full bg-cover bg-top" style="background-image: url()">
          </div>
          <div class="font-inter">
               <div class="text-sm font-bold text-gray-800">Muhammad Nawir</div>
               <small class="text-gray-400">23 Okt 2022</small>
          </div>
     </div>
     <div class="flex w-1/2 mb-4">
          <div class="font-semibold text-gray-700 font-inter text-left capitalize text-lg">
               Pengumuman
          </div>
     </div>

     <div class="col-auto font-inter text-gray-600 text-justify leading-6">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi repudiandae labore natus id debitis
          iste praesentium rerum atque reiciendis, aliquam, eveniet porro explicabo sit vero veniam! Temporibus
          modi culpa aperiam aut officia vel totam, accusamus quia in molestiae eos adipisci animi tempora
          beatae asperiores eius impedit distinctio suscipit. Nostrum, doloribus.
     </div>
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
                              3 Comment
                         </div>
                    </div>
               </div>
          </div>
     </div>

     {{-- 
          <div class="comment mt-4 hidden w-full">
               @foreach ($value->commentPost as $item)
                    <div
                         class="flex gap-3 mb-2 {{ $item->user_id == $value->user_id ? 'justify-end' : 'justify-start' }}">
                         <div class="my-auto {{ $item->user_id == $value->user_id ? 'hidden' : 'block' }}">
                              <div class="w-8 h-8 bg-red-700 rounded-full bg-cover bg-top"
                                   style="background-image: url({{ asset('storage/' . $item->user->image) }})">
                              </div>
                         </div>

                         <div class="my-auto">
                              <div class="bg-slate-100 rounded-xl p-2">
                                   {{ $item->value }}
                              </div>
                         </div>
                         <div class="my-auto {{ $item->user_id == $value->user_id ? 'block' : 'hidden' }}">
                              <div class="w-8 h-8 bg-red-700 rounded-full bg-cover bg-top"
                                   style="background-image: url({{ asset('storage/' . $item->user->image) }})">
                              </div>
                         </div>
                    </div>
               @endforeach
          </div>
          <div class="mx-auto relative w-full mt-4">
               <form action="/comment-post" method="POST">
                    @csrf
                    <div class="flex gap-3">
                         <div class="flex items-center pl-2">
                              <div class="bg-cover bg-center inline-block w-8 h-8 bg-slate-400 rounded-full"
                                   style="background-image: url({{ asset('storage/' . Auth()->user()->image) }})">
                              </div>
                         </div>
                         <div class="w-full">
                              <input type="hidden" value="{{ $value->id }}" name="post_id">
                              <input type="hidden" value="{{ Auth()->user()->id }}" name="user_id">
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
                                        placeholder="Add a Comment..." autocomplete="off" type="text"
                                        name="value" id="comment" />
                              </label>
                         </div>
                    </div>

               </form>
          </div> --}}

</div>
