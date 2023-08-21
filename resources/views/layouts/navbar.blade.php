<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
     <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
               <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                         aria-controls="logo-sidebar" type="button"
                         class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                         <span class="sr-only">Open sidebar</span>
                         <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path clip-rule="evenodd" fill-rule="evenodd"
                                   d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                              </path>
                         </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
                         <img src="{{ asset('assets/img/digitaliz1.png') }}" class="h-10 mr-3" alt="FlowBite Logo" />
                    </a>
               </div>
               <div class="flex items-center">
                    <div class="flex items-center ml-3">
                         <div>
                              <div class="flex items-center gap-4">
                                   <h5 class="font-semibold text-sm hidden md:block">
                                        {{ auth()->user()->employe->name }}</h5>
                                   <button type="button"
                                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                        <span class="sr-only">Open user menu</span>
                                        @if (
                                            !empty(auth()->user()->getFirstMediaUrl('profile')
                                            ))
                                             <div class="w-10 h-10 bg-cover rounded-full bg-center"
                                                  style="background-image: url({{ auth()->user()->getFirstMediaUrl('profile') }})">

                                             </div>
                                        @else
                                             <div
                                                  class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                                  <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                       fill="currentColor" viewBox="0 0 20 20"
                                                       xmlns="http://www.w3.org/2000/svg">
                                                       <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd"></path>
                                                  </svg>
                                             </div>
                                        @endif
                                   </button>
                              </div>
                         </div>
                         <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                              id="dropdown-user">
                              <div class="px-4 py-3" role="none">
                                   <p class="text-sm text-slate-600 dark:text-white" role="none">
                                        Neil Sims
                                   </p>
                                   <p class="text-sm font-medium text-slate-600 truncate dark:text-gray-300"
                                        role="none">
                                        neil.sims@flowbite.com
                                   </p>
                              </div>
                              <ul class="py-1" role="none">
                                   <li>
                                        <a href="#"
                                             class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                             role="menuitem">Dashboard</a>
                                   </li>
                                   <li>
                                        <a href="#"
                                             class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                             role="menuitem">Settings</a>
                                   </li>
                                   <li>
                                        <a href="#"
                                             class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                             role="menuitem">Earnings</a>
                                   </li>
                                   <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                             @csrf

                                             <x-dropdown-link :href="route('logout')"
                                                  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                  {{ __('Log Out') }}
                                             </x-dropdown-link>
                                        </form>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</nav>

<aside id="logo-sidebar"
     class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
     aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
          <ul class="space-y-2 font-medium text-slate-500 font-primary">
               <li>
                    <a href="{{ route('admin.dashboard') }}"
                         class="{{ request()->routeIs('admin.dashboard*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link text-slate-600' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                         </svg>

                         <span class="ml-3">Dashboard</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.client.index') }}"
                         class="{{ request()->routeIs('admin.client*') ? 'bg-cyan-100 text-cyan-500' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path
                                   d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                         </svg>

                         <span class="ml-3">Client</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.project.index') }}"
                         class="{{ request()->routeIs('admin.project*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6zM7.5 6h.008v.008H7.5V6zm2.25 0h.008v.008H9.75V6z" />
                         </svg>
                         <span class="ml-3">Project</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.team.index') }}"
                         class="{{ request()->routeIs('admin.team*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                   clip-rule="evenodd" />
                              <path
                                   d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                         </svg>

                         <span class="ml-3">Team</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.profile.index') }}"
                         class="{{ request()->routeIs('admin.profile.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                   clip-rule="evenodd" />
                         </svg>

                         <span class="ml-3">Profile</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.user-verified.index') }}"
                         class="{{ request()->routeIs('admin.user-verified*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                         </svg>

                         <span class="ml-3 relative">
                              User Verification
                              @if (@$user_verified > 0)
                                   <span
                                        class="top-0 -right-4 absolute  w-3 h-3 bg-red-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                         </span>
                         @endif
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.employe.index') }}"
                         class="{{ request()->routeIs('admin.employe.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                   clip-rule="evenodd" />
                         </svg>

                         <span class="ml-3">Employe</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.presence.index') }}"
                         class="{{ request()->routeIs('admin.presence.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                         </svg>


                         <span class="ml-3">Presence</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.daily-report.index') }}"
                         class="{{ request()->routeIs('admin.daily-report.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2  rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                         </svg>
                         <span class="ml-3">Daily Report</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('admin.announcement.index') }}"
                         class="{{ request()->routeIs('admin.announcement.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3A.75.75 0 009 6.75H6z"
                                   clip-rule="evenodd" />
                              <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 01-3 0V6.75z" />
                         </svg>

                         <span class="ml-3">Announcement</span>
                    </a>
               </li>
               <li>
                    <button type="button"
                         class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                         aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6 text-slate-500">
                              <path fill-rule="evenodd"
                                   d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                   clip-rule="evenodd" />
                         </svg>

                         <span class="flex-1 ml-3 text-left whitespace-nowrap">Menu Setting</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                              fill="none" viewBox="0 0 10 6">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="2" d="m1 1 4 4 4-4" />
                         </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                         <li>
                              <a href="{{ route('admin.category.index') }}"
                                   class="{{ request()->routeIs('admin.project.') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group dark:text-white dark:hover:bg-gray-700">Category</a>
                         </li>
                         <li>
                              <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                         </li>
                         <li>
                              <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                         </li>
                    </ul>

               </li>
          </ul>
     </div>
</aside>
