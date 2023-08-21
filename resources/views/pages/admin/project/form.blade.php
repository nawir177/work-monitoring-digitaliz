<x-admin>
     <x-header title="{{ @$old ? 'Form Edit Data Project' : 'Form Tambah Data Client' }}"
          description="Akses menu dan informasi Client disini" icon="document-text-outline"
          urlBack="{{ route('admin.project.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Project</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset

               <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                      Project Name</label>
                    <input type="text" id="name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="Project name..." name="name" required
                         value="{{ old('name', @$old->name) }}">
               </div>

               <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>

                         <label for="client"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client</label>
                         <select id="client"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="client_id"> 
                              <option {{ $route == route('admin.project.store') ? 'selected' : '' }}>Select an Client
                              </option>
                              @foreach ($clients as $client)
                                   <option value="{{ $client->id }}"
                                        {{ @$old->client_id == $client->id ? 'selected' : '' }}>{{ $client->name }}
                                   </option>
                              @endforeach
                         </select>

                    </div>
                    <div class="mb-6">
                         <label for="project_category"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project
                              Type</label>
                         <select id="project_category" name="type"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option {{ $route == route('admin.client.store') ? 'selected' : '' }}>Project Type
                              </option>
                              <option value="website" {{ @$old->project_type == 'website' ? 'selected' : '' }}>
                                   Website
                              </option>
                              <option value="mobile" {{ @$old->project_type == 'mobile' ? 'selected' : '' }}>Mobile
                              </option>
                              <option value="dekstop" {{ @$old->project_type == 'dekstop' ? 'selected' : '' }}>
                                   Dekstop
                              </option>
                              <option value="api" {{ @$old->project_type == 'api' ? 'selected' : '' }}>API
                              </option>
                         </select>
                    </div>
                    <div>
                         <label for="frontend"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frontend
                         </label>
                         <input type="text" id="frontend"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Frontend..." name="frontend" required
                              value="{{ old('frontend ', @$old->frontend) }}">
                    </div>
                    <div>
                         <label for="backend"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Backend
                         </label>
                         <input type="text" id="backend"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="backend..." name="backend" required
                              value="{{ old('backend ', @$old->backend) }}">
                    </div>
                    <div>
                         <label for="start_date"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start date
                         </label>
                         <input type="date" id="start_date"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="start_date..." name="start_date" required
                              value="{{ old('start_date ', @$old->start_date) }}">
                    </div>
                    <div>
                         <label for="end_date"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End date
                         </label>
                         <input type="date" id="end_date"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="end_date..." name="end_date" required
                              value="{{ old('end_date ', @$old->end_date) }}">
                    </div>


               </div>


               <div class="mb-6">
                    <label for="message"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                         Project</label>
                    <textarea id="message" rows="4" name="description"
                         class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         placeholder="Description Project...">{{ @$old->description }}</textarea>
               </div>
               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
          </form>
     </div>
</x-admin>
