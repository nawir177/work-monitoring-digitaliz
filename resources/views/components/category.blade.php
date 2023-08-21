@props(['icon', 'name', 'href', 'color','folder'])

<div>
     <a href="{{ $href }}"
          class=" flex py-3 px-6 mr-5 mb-2 bg-white dark:bg-slate-700 shadow rounded-xl dark:hover:shadow-slate-900  hover:shadow-cyan-200  hover:bg-cyan-500 hover:shadow-xl group justify-center">
          <div style="color:{{ $color }}" class="group-hover:text-white m-auto dark:group-hover:text-slate-400"
               style="color:rgb(255, 122, 39)">
               <div class="category_icon group-hover:text-white w-10 h-10 m-auto">
                    {!! $icon !!}
               </div>
               <p class="mt-4 text-center font-inter text-sm text-cyan-500 group-hover:text-white">
                    {{ $name }}
               <div
                    class="text-xs text-center opacity-60 dark:group-hover:text-slate-400 group-hover:text-white dark:text-slate-400 text-slate-600">
                Folder {{ $folder }}
               </div>
               </p>
          </div>
     </a>
</div>



