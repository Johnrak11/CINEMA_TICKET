<?php
require_once('views/partials/head.php');
?>

<div class="app-container">
    <!-- ==================================sidebar================== -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="app-icon">
                <img src="views/images/components_image/tickhub.png" alt="" width="45%">
            </div>
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-list-item active">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Show</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                    </svg>
                    <span>Venue</span>
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                    <span>Notifications</span>
                </a>
            </li>
        </ul>
        <div class="account-info">
            <div class="account-info-picture">
                <img src="<?= (file_exists('views/images/users/' . $seller['image']) and !empty($seller['image'])) ? 'views/images/users/' . $seller['image'] : "views/images/components_image/user_account.png" ?>" alt="Account">
            </div>
            <div class="account-info-name"><?= $seller['name'] ?></div>
            <button class="account-info-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="19" cy="12" r="1" />
                    <circle cx="5" cy="12" r="1" />
                </svg>
            </button>
        </div>
    </div>
    <!-- ============================main=================================== -->
    <div class="app-content">
        <div class="app-content-header">
            <h1 class="app-content-headerText">Products</h1>
            <button class="mode-switch" title="Switch Theme">
                <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                    <defs></defs>
                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                </svg>
            </button>
            <button class="app-content-headerButton">Add venue</button>
        </div>
        <div class="app-content-actions">
            <input class="search-bar" placeholder="Search..." type="text">
            <div class="app-content-actions-wrapper">
                <button class="action-button list active" title="List View">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                        <line x1="8" y1="6" x2="21" y2="6" />
                        <line x1="8" y1="12" x2="21" y2="12" />
                        <line x1="8" y1="18" x2="21" y2="18" />
                        <line x1="3" y1="6" x2="3.01" y2="6" />
                        <line x1="3" y1="12" x2="3.01" y2="12" />
                        <line x1="3" y1="18" x2="3.01" y2="18" />
                    </svg>
                </button>
                <button class="action-button grid" title="Grid View">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7" />
                        <rect x="14" y="3" width="7" height="7" />
                        <rect x="14" y="14" width="7" height="7" />
                        <rect x="3" y="14" width="7" height="7" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- ===============================================================venue================== -->
        <div class="venue-container">
            <div id="products-area-wrapper" class="products-area-wrapper tableView">
                <!-- ================== header name ==================== -->
                <div class="products-header">
                    <div class="products-header-left flex-1 flex">
                        <div class="product-cell image">
                            Venue name
                            <button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-cell category mr-[10%]">Address<button class="sort-button">
                            </button></div>
                    </div>
                    <div class="products-header-right flex-1 flex justify-end items-center">
                        <div class=" mr-[10%] text-white">Edit<button class="sort-button">
                            </button></div>
                        <div class=" mr-[15%] text-white">Delete<button class="sort-button">
                            </button></div>

                    </div>
                </div>

                <!-- =============================== card lists product==================== -->
                <?php
                $venues = getVenue();
                foreach ($venues as $venue) :
                ?>
                    <div class="products-row mb-2 flex">
                        <div class="product-cell image flex-1 ">
                            <span id='venue-name-check'><?= $venue['name'] ?></span>
                        </div>
                        <div class="product-cell image " style="flex:2.5;">
                            <span><?= $venue['address'] ?></span>
                        </div>
                        <div class="product-cell image " style="flex:1.2;">
                            <a class="ml-[24%] text-blue-700 cursor-pointer" id="venue-edit" data-index="<?= $venue['id'] ?>">Edit</a>
                            <a data-index="<?= $venue['id'] ?>" class="ml-[26%] cursor-pointer text-blue-700 " id="venue-delete">Delete</a>
                        </div>
                    </div>
                <?php endforeach
                ?>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------from------------------ -->

<div id="venue-form" class="flex justify-center items-center h-full w-full bg-[#000000a5] " style="position: fixed;display:none;">
    <form id="venue-submit" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#0c0c0c] w-[35%] p-[15px] rounded-[30px] bg-[#101827]" >
        <h1 class="text-[20px] text-white font-bold text-center">CREATE VENUE</h1>
        <div class="tab block">
            <input type="text" id="date" name="name" placeholder="Venue name" class="venue-name">
            <input type="text" id="time" name="address" placeholder="Address name" class="address-name">
            <input type="text" id="id-venue" name="id" placeholder="Address name" class="address-name hidden">
        </div>
        <div class="h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <a id="cencel-venue" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[15px] rounded-[20px] flex justify-center item-center"><button type="button">Cancel</button></a>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[15px] rounded-[20px]" id="nextBtn" name="id" value="Hello">Create</button>
            </div>
        </div>
    </form>
</div>

<script src="views/js/venue.js"></script>