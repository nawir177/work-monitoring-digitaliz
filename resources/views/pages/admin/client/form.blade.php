<x-admin>
   <x-header title="{{ @$old? 'Form Edit Data Client' : 'Form Tambah Data Client' }}" description="Akses menu dan informasi Client disini" icon="document-text-outline" urlBack="{{ route('admin.client.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Client</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset

               <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                         <label for="first_name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Client name</label>
                         <input type="text" id="first_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Name" required name="name" value="{{ old('name', @$old->name) }}">
                    </div>

                    <div>
                         <label for="email"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                         <input type="email" id="email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="example@gmail.com" name="email" value="{{ old('email', @$old->email) }}"
                              required>
                    </div>

                    <div>
                         <label for="company"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                         <input type="text" id="company"
                              class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="company" value="{{ old('company', @$old->company) }}" name="company"
                              required>
                    </div>
                    <div>
                         <label for="phone"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                              number</label>
                         <input type="tel" id="phone"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="62.." name="phone" required value="{{ old('phone', @$old->phone) }}">
                    </div>

               </div>

               <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                         Address</label>
                    <input type="text" id="address"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                         placeholder="Company Address" name="address" required
                         value="{{ old('address', @$old->address) }}">
               </div>
               <div class="mb-6">
                    <label for="project_category"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Type</label>
                    <select id="project_category" name="project_type"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                         <option {{ $route == route('admin.client.store') ? 'selected' : '' }}>Project Type</option>
                         <option value="website" {{ @$old->project_type == 'website' ? 'selected' : '' }}>Website
                         </option>
                         <option value="mobile" {{ @$old->project_type == 'mobile' ? 'selected' : '' }}>Mobile
                         </option>
                         <option value="dekstop" {{ @$old->project_type == 'dekstop' ? 'selected' : '' }}>Dekstop
                         </option>
                         <option value="api" {{ @$old->project_type == 'api' ? 'selected' : '' }}>API
                         </option>
                    </select>
               </div>
               <div class="mb-6">
                    <label for="message"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                         Project</label>
                    <textarea id="message" rows="4" name="project_description"
                         class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         placeholder="Description Project...">{{ @$old->project_description }}</textarea>
               </div>
               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ?"Updated" : "Create" }}</button>
          </form>
     </div>
</x-admin>
