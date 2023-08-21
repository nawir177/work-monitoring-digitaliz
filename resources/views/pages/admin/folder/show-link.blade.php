<x-admin>
     <div class="container md:py-12 py-6">
          <div class=" md:px-16 px-6 py-2 bg-white max-w-6xl mx-auto rounded-lg ">
               <h1 class="mb-10 text-3xl mt-6 text-center font-primary font-bold text-cyan-500">{{ $link->name }}</h1>
               <div class="grid text-gray-800 font-nuninto font-medium  ">
                    <div class="mb-3">
                         <div class="flex gap-2">
                              <div class="w-44">
                                   Uploder
                              </div>
                              <div class="">
                                   :
                              </div>
                              <div class="">
                                   {{ $link->user->employe->name }}
                              </div>
                         </div>
                    </div>
                    <div class="mb-3">
                         <div class="flex gap-2">
                              <div class="w-44">
                                   Link
                              </div>
                              <div class="">
                                   :
                              </div>
                              <div>
                                   <a target="_blank" href="{{ $link->value }}"
                                        class="text-cyan-500 inline-block hover:text-cyan-600">{{ $link->value }}
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="mb-3">
                         <div class="flex gap-2">
                              <div class="w-44">
                                   Date
                              </div>
                              <div class="">
                                   :
                              </div>
                         </div>
                         <div class="">
                              {{ $link->date }}
                         </div>
                    </div>
                    <div class="mb-3">
                         <div>
                              <div class="mb-6">
                                   Description :
                              </div>
                              <div class="p-6 bg-slate-50 rounded-xl font-primary">
                                   {{ $link->description }}
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </div>

     <script>
          let body = document.querySelectorAll(".container");
          let selection = document.querySelectorAll(".selection");
          let inputEdit = document.querySelectorAll(".inputEdit");
          let btnEdit = document.querySelectorAll(".btnEdit");
          let tSelection = document.querySelectorAll(".tSelection");
          for (let i = 0; i < selection.length; i++) {
               selection[i].addEventListener('click', function(e) {
                    tSelection[i].classList.toggle("hidden");
               })

          }

          for (let y = 0; y < btnEdit.length; y++) {
               btnEdit[y].addEventListener('click', function() {
                    inputEdit[y].classList.toggle("hidden");

               })

          }
     </script>
</x-admin>
