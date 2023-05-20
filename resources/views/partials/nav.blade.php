<nav class="w-full mx-auto bg-white border-gray-200 px-2 sm:px-4 py-0 rounded dark:bg-gray-900">
    <div class="flex flex-wrap items-center pl-10 pr-4">
        <div class="ml-0">
        <img src="https://donirajkompjuter.mk/wp-content/uploads/2020/12/logo-ovaovaovoa.jpg" class="w-28 h-10 p-0 m-0 " alt="">
         </div>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="py-2 ml-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
               
                <li>
                  <a href="{{ route('blogs.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blogs</a>
                </li>
                <li>
                  <a href="{{ route('videos.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Videos</a>
                </li>
                <li>
                  <a href="{{ route('partners.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Partners</a>
                </li>
                <li>
                  <a href="{{ route('applications.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Applications</a>
                </li>
                <li>
                  <a href="{{ route('volunteers.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Volunteers</a>
                </li>
                <li>
                  <a href="{{ route('contacts.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contacts</a>
                </li>
                <li>
                  <a href="{{ route('clients.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Clients</a>
                </li>
                <li>
                  <a href="{{ route('donations.index') }}" class="block text-lg py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Donations</a>
                </li>
             
                <li>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="inline py-2 pl-3 pr-4 text-lg text-gray-700 bg-slate-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                        type="button"> {{ Auth::user()->name }} <svg class="w-4 h-4 ml-2 inline" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                 </li>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="">
                                    <button type="submit"
                                        class="block w-full px-2 py-2 text-lg hover:bg-gray-600 hover:text-dark hover:rounded-lg dark:hover:bg-gray-600 dark:hover:text-white"
                                        formaction="{{ route('logout') }}">Logout</button>
                                </li>
                            </form>
                            </li>
                        </ul>
                    </div>     
            </ul>
        </div>
    </div>
</nav>
