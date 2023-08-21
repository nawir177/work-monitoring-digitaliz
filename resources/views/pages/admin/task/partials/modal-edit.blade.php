<div id="modal-edit" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-1/3 h-full md:h-auto mt-5">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700 mt-2">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="modal-edit" id="closeModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8 max-h-screen overflow-y-auto scroll-smooth scroll-hidden">
                <h1 class="my-6 text-3xl font-inter text-cyan-500 text-center dark:text-white">
                    EDIT TASK PROJECT</h1>
                <form class="space-y-6" action="/task/{{ $task_id}}" method="post" >
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="project_id" value="{{ $team->project_id }}">
                   @foreach ($task as $item)
                        <div class="mb-3 flex gap-3 w-full align-content-center">
                                <div class="w-full">
                                    <label for="task" class="block font-semibold">Task Name</label>
                                    <input value="{{ $item->name }}" class="input text-slate-700 bg-slate-100 input-bordered w-full" required type="text" name="task[]">
                                </div>
                                <div class="mt-6">
                                   <button 
                                            class="remove mt-3 bg-red-500 p-1 flex justify-center rounded-full hover:bg-red-800 text-white"
                                            ata-toggle="tooltip" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>

                                        </button>
                                </div>                            
                            </div>              
                   @endforeach
                    @foreach ($errors->all() as $message)
                        <div class="alert alert-error shadow-lg mb-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $message }}</span>
                            </div>
                        </div>
                    @endforeach
                    <div class="peminjaman"></div>
                    <div class="mb-3">
                        <button type="button" class="addPeminjaman py-1 px-1 bg-green-500 text-white rounded-lg float-end"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Input
                        Task</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">
    $('.addPeminjaman').on('click', function() {
        addPeminjaman();
    });

    function addPeminjaman() {
        var Peminjaman = `<div class="mb-3 flex gap-3 w-full align-content-center">
                                <div class="w-full">
                                    <label for="task" class="block font-semibold">Task Name</label>
                                    <input class="input text-slate-700 bg-slate-100 input-bordered w-full" required type="text" name="task[]">
                                </div>
                                <div class="mt-6">
                                   <button 
                                            class="remove mt-3 bg-red-500 p-1 flex justify-center rounded-full hover:bg-red-800 show_confirm text-white"
                                            ata-toggle="tooltip" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>

                                        </button>
                                </div>                            
                            </div>`;
        $('.peminjaman').append(Peminjaman);
    };

    $('.remove').live('click', function() {
        $(this).parent().parent().remove();
    });
</script>
