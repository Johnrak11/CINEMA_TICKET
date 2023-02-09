<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div>
    <div class="flex justify-between mt-[10%]">
        <div class="flex flex-2 flex-col text-white ml-[15%]">
            <h1 class="text-3xl"><?= (!empty($showBooking && !empty($showBooking['name'])) ? htmlspecialchars($showBooking['name']) : 'None' ) ?></h1>
            <h1 class="text-2xl mt-3 flex"><i class="far fa-clock ml-2 mt-2" style="font-size:18px"></i> <span class="ml-[20%]"><?= (!empty($showBooking && !empty($showBooking['duration'])) ? htmlspecialchars($showBooking['duration']) : 'None' ) ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span class="ml-[20%]"><?= (!empty($showBooking && !empty($showBooking['date'])) ? htmlspecialchars($showBooking['date']) : 'None' ) ?></span></h1>
            <h1 class="text-2xl mt-3 flex"><i class="fa fa-language" aria-hidden="true"></i><span class="ml-[20%]">English</span></h1>
            <h1 class="text-2xl mt-3"><i class="fa fa-tag ml-2" aria-hidden="true"></i><span class="ml-[20%]"><?= (!empty($showBooking && !empty($showBooking['category'])) ? htmlspecialchars($showBooking['category']) : 'None' ) ?></span></h1>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;"">
                <img class=" w-[25%] rounded-xl" src="<?= (file_exists("views/images/shows_image/" . $showBooking['image'])?"views/images/shows_image/" . $showBooking['image'] : "None" ) ?>" alt="">
        </div>
    </div>
    <div class="ml-[5%] mb-[5%]">
        <?php
        for ($i = 0; $i < 2; $i++) :
        ?>
        <div class="mr-[10%]">
            <button class="p-2 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">TICKHUB CITY</button>
            <h1 class="border border-red-600"></h1>
        </div>
        <div>
            <h1 class="text-2xl mt-[1%] text-white">Hall: Smart1</h1>
            <?php
            for ($i = 0; $i < 2; $i++) :
            ?>
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
            <?php
            endfor;
            ?>
        </div>
    </div>
    <?php
    endfor;
    ?>
</div>
