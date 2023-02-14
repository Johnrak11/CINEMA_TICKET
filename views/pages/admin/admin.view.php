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
            <li class="nav-item flex-grow text-center sidebar-list-item active" role="presentation">
                <a href="" class="
          flex
          item-center
          nav-link
          font-medium
          leading-tight
          focus:border-transparent
          active
          " id="tabs-home-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-admin-venue">
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
          " id="tabs-messages-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-messagesVertical" role="tab" aria-controls="tabs-messagesVertical" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                    <span class="">Nofication</span>
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
          " id="tabs-messages-tabVertical" data-bs-toggle="pill" data-bs-target="#tabs-messagesVertical" role="tab" aria-controls="tabs-messagesVertical" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                    <span class="">Booking</span>
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
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="views/js/venue.js"></script>
</div>
<!-- -----------------------------------from------------------ -->