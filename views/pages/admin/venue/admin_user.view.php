<div class="tab-pane fade show app-content" id="tabs-admin-user">
    <div class="app-content-header">
        <h1 class="app-content-headerText">Admin dasbord</h1>
    </div>
    <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
        <select name="user" id="user-short" class="app-content-headerButton">
            <option value="" selected>Customer</option>
            <option value="Hall-1">Seller</option>
            <option value="Hall-2">Admin</option>
        </select>
    </div>
    <!-- ===============================================================venue================== -->
    <div class="venue-container mt-5">
        <div id="products-area-wrapper" class="products-area-wrapper tableView">
            <!-- ================== header name ==================== -->
            <div class="products-header">
                <div class="products-header-left flex flex-1 ">
                    <div class="product-cell image">
                        Username
                        <button class="sort-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                            </svg>
                        </button>
                    </div>
                    <div class="product-cell category mr-[18%]">Emial<button class="sort-button">
                        </button></div>
                </div>
                <div class="products-header-right flex-1 flex justify-end items-center">
                    <div class=" mr-[8%] text-white">Edit<button class="sort-button">
                        </button></div>
                    <div class=" mr-[10%] text-white">Delete<button class="sort-button">
                        </button></div>
                </div>
            </div>

            <!-- =============================== card lists product==================== -->
            <?php
            $users = getUsersLimit();
            foreach ($users as $user) :
                $isActive = true
            ?>
                <div class="products-row mb-2 flex">
                    <div class="product-cell image flex-1">
                        <span id='username-check'><?= $user['name'] ?></span>
                    </div>
                    <div class="product-cell image" style="flex:2;">
                        <span><?= $user['email'] ?></span>
                    </div>
                    <div class="product-cell status-cell"style="flex:1;">
                        <span class="cell-label">Status:</span>
                        <span class="status <?= ($user['role'] === 'customer') ? "active" : "disabled" ?>"><?= $user['role'] ?></span>
                    </div>
                    <div class="product-cell image" style="flex:1;">
                        <a class="ml-[24%] text-blue-700 cursor-pointer" id="role-edit" data-index="<?= $user['id'] ?>">Edit</a>
                        <a data-index="<?= $user['id'] ?>"class="ml-[26%] cursor-pointer text-blue-700 " id="user-delete">Delete</a>
                    </div>
                </div>
            <?php endforeach
            ?>
        </div>
    </div>
</div>