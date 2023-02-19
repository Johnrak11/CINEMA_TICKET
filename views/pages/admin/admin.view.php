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
        <ul class="nav nav-tabs flex flex-col flex-wrap list-none" id="tabs-tabVertical" role="tablist">
            <li class="nav-item flex-grow text-center sidebar-list-item" role="presentation">
                <a href="/" class="
          flex
          item-center
          font-medium
          leading-tight
          focus:border-transparent
          ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    <span class="text-white">Home</span>
                </a>
            </li>
            <li class="nav-item flex-grow text-center sidebar-list-item" role="presentation">
                <a href="" class="
          flex
          item-center
          nav-link
          font-medium
          leading-tight
          focus:border-transparent
          active
          " id="tabs-venue-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-admin-venue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                    </svg>
                    <span class="">Venue</span>
                </a>
            </li>
            <li class="nav-item flex-grow text-center sidebar-list-item " role="presentation">
                <a href="#tabs-homeVertical" class="
          flex
          item-center
          nav-link
          font-medium
          leading-tight
          focus:border-transparent
          " id="tabs-messages-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-admin-user">
                    <i class='fas fa-user-circle' style='font-size:24px'></i>
                    <span class="ml-2">User</span>
                </a>
            </li>
            <li class="nav-item flex-grow text-center sidebar-list-item " role="presentation">
                <a href="#tabs-homeVertical" class="
          flex
          item-center
          nav-link
          font-medium
          leading-tight
          focus:border-transparent
          " id="tabs-product-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-admin-show">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span class="">Product</span>
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
    <div class="tab-content w-full" id="tabs-tabContentVertical">
        <?php require_once('views/pages/admin/venue/admin_venue.view.php'); ?>
        <?php require_once('views/pages/admin/venue/admin_user.view.php'); ?>
        <?php require_once('views/pages/admin/venue/admin_show.view.php'); ?>
    </div>
</div>

<!-- ========================venue form========== -->
<div id="venue-form" class="flex justify-center items-center h-full w-full bg-[#000000a5] " style="position: fixed;display:none;">
    <form id="venue-submit" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#0c0c0c] w-[35%] p-[15px] rounded-[30px] bg-[#101827]">
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

<!-- --------------position form -------------- -->
<div id="user-form" class="flex justify-center items-center h-full w-full bg-[#000000a5] " style="position: fixed;display:none;">
    <form id="user-submit" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#0c0c0c] w-[30%] p-[15px] rounded-[30px] bg-[#101827]">
        <h1 class="text-[20px] text-white font-bold text-center">CHANGE THE POSITION</h1>
        <div class="tab block">
            <select name="position" id="position" class="input-role">
                <option disabled selected>Position</option>
                <option value="customer">Customer</option>
                <option value="seller">Seller</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <a id="cencel-role" class="w-[20%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[15px] rounded-[20px] flex justify-center item-center"><button type="button">Cancel</button></a>
                <button type="button" class="w-[20%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[15px] rounded-[20px]" id="role-submit">Update</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="views/js/admin.js"></script>