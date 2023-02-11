<?php
require_once("models/user.model.php");
?>
<nav id='navbar' class=" bg-white border-gray-200 rounded dark:bg-black">
    <div class=" flex flex-wrap items-center justify-between">
        <a href="/" class="flex items-center ml-10 rounded-full">
            <img src="views/images/components_image/tickhub.png" class="w-16 mr-3 rounded-full" />
            <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CINEMA</span> -->
        </a>


        <div class="flex justify-between items-center md:order-2 mr-10 w-[10%]">
            <div class="text-white p-2 flex justify-center">
                <i class="material-icons " style="font-size: 30px;" id="btn-search">search</i>
            </div>
            <?php
            if (isset($_COOKIE['email']) and isset($_COOKIE['id'])) {
                $user = getUser($_COOKIE['id']);
            ?>
                <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 p-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img id="profile-user" class="w-9 h-9 rounded-full" src="<?= (file_exists('views/images/users/' . $user['image']) and !empty($user['image'])) ? 'views/images/users/' . $user['image'] : "views/images/components_image/user_account.png" ?>" alt="user photo">
                </button>

            <?php
            } else {
            ?>
                <a href="/login"><button type="button" class=" text-white bg-[#ff0000] hover:bg-white focus:ring-4 focus:outline-none focus:ring-[#ff0000] font-medium rounded-3xl text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-[#ff0000] dark:hover:bg-white hover:text-black dark:focus:ring-gray-800">Login</button></a>
                <a href="" class="hidden" id="profile-user"></a>
            <?php
            }
            ?>

            <!-- Dropdown menu -->
            <div id="hidden" class="hidden">
                <div id="background-hide"></div>
                <div id="dropdown-menu" class="z-50  my-10 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-[#ff0000] dark:divide-[#ff0000]">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-white dark:text-gray-200 dark:hover:text-black">Profile Detail</a>
                        </li>
                        <?php
                        if (isset($_COOKIE['email']) and isset($_COOKIE['id'])){
                            $role = getRole($_COOKIE['id']);
                            if ($role['role'] === 'seller') {
                            ?>
                                <li>
                                    <a href="/seller" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-with dark:text-gray-200 dark:hover:text-black">Seller</a>
                                </li>
                            <?php
                            }
                        }
                            ?>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-white dark:text-gray-200 dark:hover:text-black">Purchese</a>
                        </li>
                        <li>
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-white dark:text-gray-200 dark:hover:text-black">Sign out</a>
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
            <ul class="flex flex-col border border-gray-100 rounded-lg bg-black md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-black md:dark:bg-black dark:border-black">
                <li>
                    <a href="/" class="block bg-black py-2 pl-3 pr-4 text-white rounded hover:text-[#ff0000] text-lg <?php echo urlIs('/') ? "md:text-[#ff0000] text-2xl " : "text-white" ?>">Home</a>
                </li>
                <li>
                    <a href="/show" class="block bg-black py-2 pl-3 pr-4 text-white rounded hover:text-[#ff0000] text-lg <?php echo urlIs('/show') ? "md:text-[#ff0000] text-2xl " : "text-white" ?>">Show</a>
                </li>
                <li>
                    <a href="/about" class="block bg-black py-2 pl-3 pr-4 text-white rounded hover:text-[#ff0000] text-lg <?php echo urlIs('') ? "md:text-[#ff0000] text-2xl " : "text-white" ?>">About</a>
                </li>
                <li>
                    <a href="/contact" class="block bg-black py-2 pl-3 pr-4 text-white rounded hover:text-[#ff0000] text-lg <?php echo urlIs('/contact') ? "md:text-[#ff0000] text-2xl " : "text-white" ?>">Contact</a>
                </li>
            </ul>
        </div>


    </div>
</nav>
<div class="hidden p-7 " id="search-container">
    <div class="header-search flex  justify-center items-center">
        <img src="views/images/components_image/tickhub.png" class="w-20 mr-[6%] rounded-full " />
        <i class="material-icons " style="font-size: 30px; color:white;">search</i>
        <input autofocus type="text" id="search" class="w-[60%] p-2 rounded-2xl ml-2 mr-2 bg-inherit border-2 text-white" placeholder="Search showing...">
        <i class="material-icons " style="font-size: 30px; color:white; " id="clare-search">clear</i>
    </div>
    <h1 class="text-xl ml-[10%] font-bold text-white">Search Result</h1>
    <ul class="result-search text-white ml-36" id="show-list">
        <!-- -------------Show Result Search--------------------  -->
    </ul>

</div>
<script src="views/js/main.js"></script>