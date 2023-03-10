<div class="tab-pane fade show active app-content" id="tabs-homeVertical" role="tabpanel" aria-labelledby="tabs-home-tabVertical">
    <div class="app-content-header">
        <h1 class="app-content-headerText">Seller dashbord</h1>
        <button class="mode-switch" title="Switch Theme">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
        </button>
        <button class="app-content-headerButton" onclick="onClickBackLog()">Backloge</button>
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
    <div class="products-area-wrapper tableView ">
        <!-- ================== header name ==================== -->
        <div class="products-header">
            <div class="product-cell image">
                Movies
                <button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button>
            </div>
            <div class="product-cell category">Category<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
            <div class="product-cell status-cell">Status<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
            <div class="product-cell sales">Date<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
            <div class="product-cell stock">Duration<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
            <div class="product-cell price">Screen<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
            <div class="product-cell price ml-2">Action<button class="sort-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                    </svg>
                </button></div>
        </div>

        <!-- =============================== card lists product==================== -->
        <?php
        if (empty($allShow)) {
        ?>
            <h1 class="text-center text-white text-2xl mt-[20%]">Wellcome to seller page</h1>
            <?php
        } else {
            $rolePermession = getRole($_COOKIE['id']);
            foreach ($allShow as $show) {
                $dateTime = getTime($show['id'], date("Y-m-d"));
                if (file_exists("views/images/shows_image/" . $show['image'])) {
                    $isActive = true;
                    if (empty($dateTime['date'])) {
                        $dateTime = getTimeExpired($show['id']);
                        $isActive = false;
                    }
            ?>
                    <div class="products-row" data-index="<?= htmlspecialchars($show['id']) ?>">
                        <div class="product-cell image">
                            <img src="<?= "views/images/shows_image/" . $show['image'] ?>" alt="product">
                            <span><?= $show['name'] ?></span>
                        </div>
                        <div class="product-cell category"><span class="cell-label">Category:</span><?= $show['category'] ?></div>
                        <div class="product-cell status-cell">
                            <span class="cell-label">Status:</span>
                            <span class="status <?= ($isActive) ? "active" : "disabled" ?>"><?= ($isActive) ? "Active" : "Disabled" ?></span>
                        </div>
                        <div class="product-cell sales"><span class="cell-label">Date:</span><?= htmlspecialchars($dateTime['date']) ?></div>
                        <div class="product-cell stock"><span class="cell-label">Duration:</span><?= htmlspecialchars($show['duration'])  ?></div>
                        <div class="product-cell price"><span class="cell-label">Screen:</span><?= htmlspecialchars($show['screen'])  ?></div>
                        <div class="product-cell image items-center text-center gap-5">
                            <span data-index="<?= $show['id']?>" class="mr-1 cursor-pointer hover:text-red-600 text-blue-700" id="show-edit">Edit</span>
                            <span id="show-venue-add" class="text-blue-500 cursor-pointer hover:text-red-600" data-index="<?= htmlspecialchars($show['id']) ?>">Add</span>
                            <span class="ml-1 cursor-pointer hover:text-red-600 <?= (empty(isOrderShow($show['id'])) || $rolePermession['role'] === "admin" ? 'text-blue-500' : 'line-through text-red-600 show-ordered') ?>" id="show-delete" data-index="<?= htmlspecialchars($show['id']) ?>">Delete</span>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
</div>
<!-- ======Backloge====== -->
<div class="backlog hidden" id="backlog">
    <div class="dom-dialog bg-gray-800  h-[90vh] rounded-xl" style="margin-top:2%">
        <div class="flex justify-between mt-[-3%] text-white p-2 rounded-xl text-xl">
            <div class="flex flex-1 ">
                <p class="">Picture</p>
                <p class="ml-[13%]">Title</p>
            </div>
            <div class="flex flex-1 justify-end">
                <p class="mr-[10%]">Public</p>
                <p class="mr-[5%]">Action</p>
            </div>
        </div>
        <div class="scroll" id="dropdown">
            <?php
            if (!empty($previewProducts)) {
                foreach ($previewProducts as $preview) :
                    if (file_exists("views/images/shows_image/" . $preview['image'])) {
            ?>
                        <div class=" flex justify-between bg-gray-900 mt-[1%] text-white rounded-xl" style="border-left:4px solid red">
                            <div class="card-preview-left flex-1 flex justify-start item-center">
                                <img class="w-[12%] p-1 rounded-xl" src="views/images/shows_image/<?= $preview['image'] ?>">
                                <div class="flex justify-center items-center ml-[15%]">
                                    <p class="text-white"><?= $preview['name'] ?></p>
                                </div>
                            </div>
                            <div class="card-preview-right flex-1 flex justify-end item-center">
                                <div class="flex justify-center items-center">
                                    <a class="py-1.5 rounded-xl bg-red-600 px-6 hover:bg-white hover:text-black cursor-pointer" id="public-show" data-index="<?= $preview['id'] ?>" data-show="<?= $preview['name'] ?>">Public</a>
                                </div>
                                <div class="dropdown flex justify-center items-center">
                                    <div class="select">
                                        <button id="btn" class="mr-[5%] py-1 px-10 bg-slate-600 hover:bg-gray-400 w-24 rounded-xl"><i class="material-icons flex items-center justify-center border-none selected">more_horiz</i></button>
                                    </div>
                                    <ul class="menu container" id="list">
                                        <a href="/add-ticket?showId=<?= $preview['id'] . "&role=seller"?>">
                                            <li class="hover:bg-red-600 w-[10%] hover:text-white">Add</li>
                                        </a>
                                        <a href="/edit-show?id=<?= $preview['id']?>">
                                            <li class="hover:bg-red-600 w-[10%] hover:text-white">Edit</li>
                                        </a>
                                        <li class="hover:bg-red-600 w-[10%] hover:text-white"><a href="/detail?id=<?= $preview['id'] ?>">Detail</a></li>
                                        <li id="delete-show" class="hover:bg-red-600 w-[10%] hover:text-white" data-index="<?= $preview['id'] ?>">Delete</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                endforeach;
            } else {
                echo "<h1 class='text-white text-center mt-[17%] text-2xl'>No preview show</h1>";
            }
            ?>
        </div>
        <div class="flex-1 flex justify-end mr-[1%] mt-[1%]">
            <a class="px-7 rounded-xl bg-red-600 mb-[2%] mr-[1%] py-1 text-white hover:bg-white hover:text-black cursor-pointer" onclick="onClickCancel()">Cancel</a>
            <a href="/createShow" class="px-7 rounded-xl bg-red-600 mb-[2%] py-1 text-white hover:bg-white hover:text-black cursor-pointer">Create</a>
        </div>
        <div class="select-bg-remove hidden"></div>
        <!-- </dialog> -->
    </div>
</div>