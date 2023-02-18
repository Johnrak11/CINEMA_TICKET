<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');

?>
<div class="movie-hall">
    <div class="flex justify-between mt-[10%]">
        <div class="text-3xl ml-[10%] text-white" style="flex:2;">
            <h1 class="text-2xl mt-3"> <span class="text-2xl font-bold">
                    <?= (!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?>
                </span></h1>
            <div class="star-container text-sm">
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star"></span>
            </div>
            <h1 class="text-2xl mt-3"><i class="far fa-clock ml-2" style="font-size:18px"></i> <span class="ml-[3%]">
                    <?= (!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span class="ml-[3%]  <?= (empty($strikthrough)) ? "" : "line-through text-red-600" ?>">
                    <?= htmlspecialchars($date['date']) ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-book ml-2' style='font-size:18px'></i> <span class="ml-[3%]">
                    <?= (!empty($showDetail && !empty($showDetail['author'])) ? htmlspecialchars($showDetail['author']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fa fa-film ml-2' style='font-size:18px'></i> <span class="ml-[3%]">
                    <?= (!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3 font-bold">Description </h1>
            <p class="text-xl mt-2">
                <?= (!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?>
            </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container" src="<?= (file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>" alt="" class="w-[70%] rounded-xl"><br>
        </div>
    </div>
    <?php
    if (isset($_GET['id'])) {
        $allVenues = getVenues($_GET['id']);
        foreach ($allVenues as $venue) {
    ?>
            <div class="ml-[5%] mb-[5%]">
                <div class="mr-[10%]">
                    <button class="p-2 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black"><?= $venue['name'] ?></button>
                    <h1 class="border border-red-600"></h1>
                </div>
                <!-- -------------loop hall------------- -->
                <?php
                $venueHall = getVenuesHallSpecific($_GET['id'], $venue['name']);
                foreach ($venueHall as $hall) {
                ?>
                    <div>
                        <h1 class="text-2xl mt-[1%] text-white">
                            <?= (!empty($hall && !empty($hall['hall'])) ? htmlspecialchars($hall['hall']) : 'None') ?>
                        </h1>
                        <div class="bg-gray-400 bg-opacity-20 mr-[10%] p-5 text-white rounded-xl mt-[2%] shadow-xl">
                            <!-- -----------lop date------- -->
                            <div class="">
                                <?php
                                $dateDisplays =  getVenuesDate($_GET['id'], $venue['name'], $hall['hall'], date("Y-m-d"));
                                foreach ($dateDisplays as $dateDisplay) :
                                ?>
                                    <div class="flex justify-between mt-[2%]">
                                        <h1 class="text-2xl ml-[2%]"><?= $dateDisplay['date'] ?></h1>
                                        <div class="mr-[2%] " id="time-show">
                                            <?php
                                            $displayTimes = getVenuesTime($_GET['id'], $venue['name'], $hall['hall'], $dateDisplay['date']);
                                            foreach ($displayTimes as $displayTime) :
                                                date_default_timezone_set("Asia/Phnom_Penh");
                                                $time = $displayTime['time'];
                                                $isDateNow = $dateDisplay['date'] . ' ' . $displayTime['time'];
                                                $formatTime = date('h:i A', strtotime($time));
                                                $currentTime = date("Y-m-d H:i:s");
                                                if ($isDateNow > $currentTime) {
                                            ?>
                                                    <a href="/select-seat?id=<?= $showDetail['id'].'&detailId='.$displayTime['id']?>"><button class="start-time py-1 px-7 bg-red-800 hover:bg-white hover:text-black" id="select-time"><?= $formatTime ?></button></a>
                                                <?php
                                                } else {
                                                ?>
                                                    <button class="start-time py-1 px-7 bg-gray-500 hover:bg-white hover:text-black"><?= $formatTime ?></button>
                                            <?php
                                                }
                                            endforeach
                                            ?>
                                        </div>
                                    </div>
                                    <div class="border border-black mr-[2%] ml-[2%] mt-[2%]"></div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
    <?php
        }
    }
    ?>
</div>

<!-- -----------------------seat----------- -->
<?php
require_once('views/partials/footer.php');
?>