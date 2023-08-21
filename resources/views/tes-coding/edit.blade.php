<x-app-layout>
     <h1 class="my-8 text-2xl font-primary text-primary">Edit Data </h1>

     <div class="bg-white p-6 rounded-xl my-4 font-primary shadow">
          <form action="{{ route('tes-coding.update',$data->id) }}" method="POST">
               @csrf
               @method('PUT')

               <div class="mb-4">
                    <label for="data1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="text" id="data1"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required name="data1" value={{ $data->data1 }}>
               </div>

               <div class="mb-4">
                    <label for="data2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                    <input type="text" id="data2"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required name="data2"  " value={{ $data->data2 }}>
               </div>
               <div class="mb-4">
                    <label for="data3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                    <input type="text" id="data3"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         required name="data3" " value={{ $data->data3 }}>
               </div>
               <div>

                    <button type="submit"
                         class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
               </div>
          </form>

     </div>
</x-app-layout>
