<?php
?>
<nav  id='navbar' class=" bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-black">
    <div class="container flex flex-wrap items-center justify-between">
        <a href="https://flowbite.com/" class="flex items-center ml-10">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CINEMA</span>
        </a>
        <div class="flex items-center md:order-2 mr-10">
            <?php
            if (isset($_COOKIE['email']) and isset($_COOKIE['id'])) {
            ?>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 p-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img id="profile-user" class="w-9 h-9 rounded-full" src='views/images/components_image/user_account.png' alt="user photo">
                </button>

            <?php
            } else {
            ?>
                <a href="/login"><button type="button" class="hover:scale-75 hover:animate-bounce  text-white bg-red-800 hover:bg-white focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-3xl text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-800 dark:hover:bg-white hover:text-black dark:focus:ring-gray-800">Login</button></a>
                <a href="" class="hidden" id="profile-user"></a>
            <?php
            }
            ?>
            <!-- Dropdown menu -->
            <div id="hidden" class="hidden">
                <div id="background-hide"></div>
                <div id="dropdown-menu" class="z-50  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile Detail</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Purchese</a>
                        </li>
                        <li>
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-black md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-black md:dark:bg-black dark:border-black">
                <li>
                    <a href="/" class="block bg-black py-2 pl-3 pr-4 hover:scale-100 hover:animate-bounce text-white rounded hover:text-red-600 text-lg <?php echo urlIs('/') ? "md:text-red-600 text-2xl " : "text-white" ?>">Home</a>
                </li>
                <li>
                    <a href="/show" class="block bg-black py-2 pl-3 pr-4 hover:scale-100 hover:animate-bounce text-white rounded hover:text-red-600 text-lg <?php echo urlIs('/show') ? "md:text-red-600 text-2xl " : "text-white" ?>">Show</a>
                </li>
                <li>
                    <a href="#" class="block bg-black py-2 pl-3 pr-4 hover:scale-100 hover:animate-bounce text-white rounded hover:text-red-600 text-lg <?php echo urlIs('') ? "md:text-red-600 text-2xl " : "text-white" ?>">About</a>
                </li>
                <li>
                    <a href="#" class="block bg-black py-2 pl-3 pr-4 hover:scale-100 hover:animate-bounce text-white rounded hover:text-red-600 text-lg <?php echo urlIs('') ? "md:text-red-600 text-2xl " : "text-white" ?>" >Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="views/js/main.js"></script>