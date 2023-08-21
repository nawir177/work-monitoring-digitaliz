<x-app-layout>
     <x-header title="Form Edit Profile" description="Akses menu dan informasi Client disini"
          icon="document-text-outline" urlBack="{{ route('admin.project.index') }}" />
     <div class="container max-w-7xl my-6 p-6 bg-white rounded-lg">

          <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
               @csrf
               @method('PATCH')
               <div class="grid md:grid-cols-4 gap-6">
                    <div class="col ">
                         @if (!empty($old->getFirstMediaUrl('profile')))
                              <img src="{{ $old->getFirstMediaUrl('profile') }}" alt="">
                         @else
                              <img src="{{ asset('assets/img/profile.jpg') }}" alt="">
                         @endif

                    </div>
                    <div class="col md:col-span-3">
                         <div class="grid gap-6 mb-6 ">
                              <div class="mb-4">
                                   <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Name</label>
                                   <input type="text" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        placeholder="Employee name..." name="name" required
                                        value="{{ $old->employe->name }}">
                              </div>
                              <div class="mb-4">
                                   <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Username</label>
                                   <input type="text" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        placeholder="Username..." name="username" required
                                        value="{{ $old->username }}">
                              </div>
                              <div class="flex gap-6 items-center">
                                   <div class="flex items-center">
                                        <input {{$old->employe->gender =='laki-laki' ? 'checked' : '' }}
                                             id="default-radio-1" type="radio" value="laki-laki" name="gender"
                                             class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1"
                                             class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                                   </div>
                                   <div class="flex items-center">
                                        <input {{$old->employe->gender =='perempuan' ? 'checked' : '' }}
                                             id="default-radio-2" type="radio" value="perempuan" name="gender"
                                             class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2"
                                             class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                   </div>

                              </div>
                              <div class="mb-4">
                                   <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email</label>
                                   <input type="text" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        placeholder="email..." name="email" required value="{{ $old->email }}">
                              </div>
                              <div class="mb-4">
                                   <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Phone</label>
                                   <input type="text" id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        placeholder="phone..." name="phone"
                                        value="{{ $old->employe->phone }}">
                              </div>
                              <div class="mb-4">
                                   <label for="place_birth"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Place birth</label>
                                   <input type="text" id="place_birth" placeholder="Place Birth..."
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        name="place_birth" value="{{ $old->employe->place_birth }}">
                              </div>
                              <div class="mb-4">
                                   <label for="date_birth"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Date Birth</label>
                                   <input type="date" id="date_birth"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:b-primarye-500"
                                        name="date_birth"  value="{{ $old->employe->date_birth }}">
                              </div>
                              <div class="mb-4">
                                   <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                        Address</label>
                                   <textarea id="message" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="address" placeholder="Write your thoughts here...">{{ $old->employe->address }}</textarea>

                              </div>
                              <div class="mb-4">
                                   <label for="img"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Image</label>
                                   <x-dropify name="img" />
                              </div>
                         </div>

                         <div class="flex justify-end">
                              <button type="submit"
                                   class="text-white bg-primary hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ @$old ? 'Updated' : 'Create' }}</button>

                         </div>
                    </div>
               </div>

          </form>
     </div>
</x-app-layout>
