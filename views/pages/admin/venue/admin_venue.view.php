<div class="tab-pane fade show app-content" id="tabs-admin-venue">
    <div class="app-content-header">
        <h1 class="app-content-headerText">Admin dasbord</h1>
        <button class="mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </button>
        <button class="app-content-headerButton" id="create-venue">Add venue</button>
    </div>
    
    <!-- ===============================================================venue================== -->
    <div class="venue-container mt-5">
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