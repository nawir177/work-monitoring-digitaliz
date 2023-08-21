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
          <ul class="space-y-2 font-medium">
               <li>
                    <a href="{{ route('dashboard') }}"
                         class="{{ request()->routeIs('dashboard*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                         </svg>

                         <span class="ml-3">Dashboard</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('presence.index') }}"
                         class="{{ request()->routeIs('presence.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                         </svg>


                         <span class="ml-3">Presence</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('client.index') }}"
                         class="{{ request()->routeIs('client*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path
                                   d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                         </svg>

                         <span class="ml-3">Client</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('daily-report-list.index') }}"
                         class="{{ request()->routeIs('daily-report-list*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                   clip-rule="evenodd" />
                              <path fill-rule="evenodd"
                                   d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                   clip-rule="evenodd" />
                         </svg>

                         <span class="ml-3">Daily Report</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('project.index') }}"
                         class="{{ request()->routeIs('project*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6zM7.5 6h.008v.008H7.5V6zm2.25 0h.008v.008H9.75V6z" />
                         </svg>
                         <span class="ml-3">Project</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('myProject') }}"
                         class="{{ request()->routeIs('myProject') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                              <path stroke-linecap="round" stroke-linejoin="round"
                                   d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                         </svg>

                         <span class="ml-3">My Project</span>
                    </a>
               </li>
               <li>
                    <a href="{{ route('profile.edit') }}"
                         class="{{ request()->routeIs('profile.*') ? 'bg-cyan-100 text-cyan-600' : 'nav-link' }} flex items-center p-2 text-slate-600 rounded-lg dark:text-white hover:text-cyan-600 hover:bg-cyan-100 dark:hover:bg-cyan-300 group">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                              class="w-6 h-6">
                              <path fill-rule="evenodd"
                                   d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                   clip-rule="evenodd" />
                         </svg>

                         <span class="ml-3">Profile</span>
                    </a>
               </li>
          </ul>
     </div>
</aside>
