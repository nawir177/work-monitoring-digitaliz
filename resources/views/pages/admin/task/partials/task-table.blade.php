   <form action="{{ route('admin.task.action',$project->id) }}" method="POST">
            <input type="hidden" name="project_id" value="{{ $project->project_id }}">
            @csrf
            <div class="overflow-x-auto relative rounded-lg mr-3 bg-white dark:bg-slate-700 shadow">
                <table class="w-full text-sm text-left text-gray-500 dark:bg-slate-700 ">
                    <thead class="text-md font-inter text-cyan-500 uppercase ">
                        <tr class="border-b">
                            <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                Task name
                            </th>
                            <th scope="col" class="md:py-3 py-1 md:px-6 px-3">
                                Status
                            </th>


                        </tr>
                    </thead>
                    <tbody class="allData">
                        @foreach ($project->task as $value)
                            <tr
                                class="bg-white dark:bg-slate-700 border-b dark:border-slate-800 font-inter text-sm text-gray-500">

                                <td class="md:py-2 py-1 md:px-6 px-3 ">
                                    <label class="cursor-pointer" for="{{ $value->id }}">
                                        {{ $value->name }}
                                    </label>
                                </td>
                                <input type="hidden" value="{{ $value->project_id }}" name="project_id">
                                @if (auth()->user()->hasRole('admin') || auth()->user()->id == $team->user_id)
                                    <td class="md:py-2 py-1 md:px-6 px-3">
                                        <div class="flex items-center ">
                                            <input id="{{ $value->id }}" type="checkbox" value="{{ $value->id }}"
                                                name="task[]" {{ $value->status == true ? 'checked' : '' }}
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        </div>
                                    </td>
                                @else
                                    <td
                                        class="md:py-2 py-1 md:px-6 px-3 {{ $value->status == true ? 'text-blue-600' : 'text-red-600' }}">
                                        <div class="flex items-center ">
                                            {{ $value->status == true ? 'Already' : 'Not' }}
                                        </div>
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                    <tbody id="Content" class="searchData"></tbody>
                </table>
            </div>
            @if (auth()->user()->hasRole('admin') || auth()->user()->id == $project->user_id)
                <button
                    class="py-2 px-4 my-4 ml-3 bg-cyan-500 text-white text-center rounded-lg hover:bg-cyan-600">Updated
                    Task Project
               </button>
            @endif
        </form>
