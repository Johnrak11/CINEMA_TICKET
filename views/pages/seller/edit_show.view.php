<?php
require_once('views/partials/head.php');
?>
<div class="mt-[8%] flex flex-col">
    <div class="flex justify-between flex-2 text-white">
        <div class="text-3xl ml-[10%] " style="flex:2;">
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
            <a href="<?= (isset($_COOKIE['email']) and isset($_COOKIE['id'])) ? "#" : "/login" ?>" class=" bg-[#ff0000] py-3 px-3 text-white text-center hover:bg-white hover:text-black w-[30%] mr-[18%] rounded-xl"><button class="font-bold uppercase text-sm">Edit</button></a>
        </div>
    </div>
</div>
<div class="ml-[10%] mb-[5%] mt-[5%]">
    <div class="mr-[10%]">
        <button class="p-2 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">TICKHUB SENK SOK</button>
        <h1 class="border border-red-600"></h1>
    </div>
    <div>
        <div class="flex justify-between bg-gray-400 mr-[10%] p-3 text-black rounded-xl mt-[1%] shadow-xl hover:bg-white hover:text-black">
            <p>Hall</p>
            <p>Time</p>
            <p>Date</p>
            <p>Venue</p>
            <p>Price</p>
            <p>Action</p>
        </div>
        <?php for ($i = 0 ; $i <3 ; $i++){?>
        <a href="#">
            <div class="flex justify-between bg-gray-400 mr-[10%] mt-[1%] p-4 text-black rounded-xl hover:bg-white hover:text-black " style="border-left:4px solid red">
                <p class="flex items-center justify-center">Smart1</p>
                <p class="flex items-center justify-center">13:00</p>
                <p class="flex items-center justify-center">2023/2/08</p>
                <p class="flex items-center justify-center">kan sen sok</p>
                <p class="flex items-center justify-center">$12.5</p>
                <div class="flex justify-center gap-3">
                    <p class="flex items-center justify-center">Edit</p>
                    <p class="flex items-center justify-center">Delete</p>
                </div>
            </div>
        </a>
    <?php 
    }
    ?>
    </div>
    </div>
</div>
