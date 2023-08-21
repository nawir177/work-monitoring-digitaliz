<x-admin>
     <x-header title="{{ @$old ? 'Form Edit Data Project' : 'Form Tambah Data Karyawan' }}"
          description="Akses menu dan informasi Client disini" icon="document-text-outline"
          urlBack="{{ route('admin.project.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">
          <h1 class="text-primary text-3xl font-semibold font-primary my-3 text-center">Create Employe</h1>
          <hr class="w-1/2 h-1 bg-primary mb-9 mx-auto rounded-full">
          <form action="{{ $route }}" method="post">
               @csrf
               @isset($old)
                    @method('PUT')
               @endisset


               <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div class="mb-6">
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              Name</label>
                         <input type="text" id="name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Employee name..." name="name" required
                              value="{{ old('name', @$old->name) }}">
                    </div>
                    <div class="mb-6">
                         <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              Username</label>
                         <input type="text" id="username"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Username..." name="username" required
                              value="{{ old('username', @$old->user->username) }}">
                    </div>

                    <div class="mb-6">
                         <div class="flex items-center mb-3">
                              <input {{ @$old->gender == 'laki-laki' || 'Male' ? 'checked' : '' }}
                                   id="default-radio-1" type="radio" value="laki-laki" name="gender"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                              <label for="default-radio-1"
                                   class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                         </div>
                         <div class="flex items-center">
                              <input {{ @$old->gender == 'perempuan' || 'Female' ? 'checked' : '' }}
                                   id="default-radio-2" type="radio" value="perempuan" name="gender"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                              <label for="default-radio-2"
                                   class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                         </div>

                    </div>
                    <div class="mb-6">
                         <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              Email</label>
                         <input type="email" id="email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="Email..." name="email" required
                              value="{{ old('email', @$old->user->email) }}">
                    </div>
                    <div class="mb-6">
                         <label for="project_category"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                         <select id="project_category" name="position"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option {{ $route == route('admin.employe.store') ? 'selected' : '' }}>Select Postion
                              </option>
                              <option value="Programmer" {{ @$old->position == 'Programmer' ? 'selected' : '' }}>
                                   Programmer
                              </option>
                              <option value="Data Analyst"
                                   {{ @$old->position == 'Data Analyst' ? 'selected' : '' }}>
                                   Data Analist
                              </option>
                              <option value="Graphic Designer"
                                   {{ @$old->position == 'Graphic Designer' ? 'selected' : '' }}>
                                   Desain Grafis
                              </option>
                              <option value="ui ux" {{ @$old->position == 'ui ux' ? 'selected' : '' }}>
                                   UI UX
                              </option>

                         </select>
                    </div>
                    <div class="mb-6">
                         <label for="project_category"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                         <select id="role" name="role"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option value="karyawan">
                                   karyawan
                              </option>
                              <option value="magang">
                                   Magang
                              </option>
                              <option value="admin">
                                   Admin
                              </option>
                         </select>
                    </div>
                    <div>
                         <label for="password"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password
                         </label>
                         <input type="password" id="password"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="password..." name="password"
                              {{ $route == route('admin.employe.store') ? 'required' : '' }}
                              value="{{ old('password ') }}">
                    </div>
                    <div>
                         <label for="password_confirmation"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password_confirmation
                         </label>
                         <input type="password" {{ $route == route('admin.employe.store') ? 'required' : '' }}
                              id="password_confirmation"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                              placeholder="password confirmation..." name="password_confirmation"
                              value="{{ old('password_confirmation ', @$old->confirm) }}">
                    </div>
               </div>

               <button type="submit"
                    class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>
          </form>
     </div>
</x-admin>
