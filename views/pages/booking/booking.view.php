<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div>
    <div class="flex justify-between mt-[10%]">
        <div class="text-3xl ml-[10%] text-white" style="flex:2;">
            <h1 class="text-2xl mt-3"> <span class="text-2xl font-bold"><?= (!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class="far fa-clock ml-2" style="font-size:18px"></i> <span class="ml-[3%]"><?= (!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span class="ml-[3%]  <?= (empty($strikthrough)) ? "" : "line-through text-red-600" ?>"> <?= htmlspecialchars($date['date']) ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-book ml-2' style='font-size:18px'></i> <span class="ml-[3%]"> <?= (!empty($showDetail && !empty($showDetail['author'])) ? htmlspecialchars($showDetail['author']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='fa fa-film ml-2' style='font-size:18px'></i> <span class="ml-[3%]"> <?= (!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3 font-bold">Description </h1>
            <p class="text-xl mt-2"><?= (!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?> </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container" src="<?= (file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>" alt="" class="w-[70%] rounded-xl"><br>
        </div>
    </div>
    <div class="ml-[5%] mb-[5%]">
        <div class="mr-[10%]">
            <button class="p-2 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">TICKHUB CITY</button>
            <h1 class="border border-red-600"></h1>
        </div>
        <div>
            <h1 class="text-2xl mt-[1%] text-white">Hall: Smart1</h1>
            <div class="bg-gray-400 bg-opacity-20 mr-[10%] p-5 text-white rounded-xl mt-[2%] shadow-xl">
                <div class="">
                    <?php
                    for ($i = 0; $i < 2; $i++) :
                    ?>
                        <div class="flex justify-between mt-[2%]">
                            <h1 class="text-2xl ml-[2%]">2023/02/08</h1>
                            <div class="mr-[2%]">
                                <a href=""><button class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">13:00</button></a>
                                <a href=""><button class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">15:00</button></a>
                                <a href=""><button class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">20:00</button></a>
                            </div>
                        </div>
                        <div class="border border-black mr-[2%] ml-[2%] mt-[2%]"></div>
                    <?php
                    endfor;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>