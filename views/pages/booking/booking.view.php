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
                                                $isDateNow = $dateDisplay['date'].' '.$displayTime['time'];
                                                $formatTime = date('h:i A', strtotime($time));
                                                $currentTime = date("Y-m-d H:i:s");;
                                                if ($isDateNow > $currentTime) {
                                            ?>
                                                    <button data-index="<?= $displayTime['id'] ?>" class="start-time py-1 px-7 bg-red-800 hover:bg-white hover:text-black" onclick="displaySeat()"><?= $formatTime ?></button>
                                                <?php
                                                } else {
                                                ?>
                                                    <button data-index="<?= $displayTime['id'] ?>" class="start-time py-1 px-7 bg-gray-500 hover:bg-white hover:text-black"><?= $formatTime ?></button>
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

<div id="seat-information" class="hidden absolute text-white w-full top-[50px] ">
    <div class="movie-container width-full text-white flex p-5">
        <div class="container flex flex-col gap-2.5 width-full  p-4 rounded-l-[80px]">
            <h1 class="text-[28px] text-center font-bold">SELECT YOUR SEAT</h1>
            <div class="w-full">
                <div class="letter-container flex flex-col items-center bg-gray-700 bg-opacity-[75%] p-2.5 rounded-[30px]" style="perspective: 1000px;">
                    <div class="screen bg-white h-[30px] flex self-center w-[80%] mb-[20px]"></div>
                    <?php
                    $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'M'];
                    foreach ($alphabets as $alphabet) { ?>
                        <div class='flex w-full justify-evenly '>
                            <p class='letter-row w-[20px] mt-[10px] flex'>
                                <?= $alphabet ?>
                            </p>
                            <div class='row flex-1' id="seat-movie">
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    echo "<img data-index='" . $alphabet . $i . "' src='views/images/components_image/seat.png' alt='' id='chair' class='seat w-[30px] h-[30x] m-[3px]'>";
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="info-movie p-4 flex flex-col items-center gap-2.5 w-full rounded-r-[80px]">
            <h1 class="text-[28px] font-bold">SUMMARY</h1>
            <div class="movie bg-gray-700 bg-opacity-[75%] w-full flex flex-col gap-5 p-2.5 rounded-[30px]">
                <div class="movie-summary flex gap-5 rounded-[30px]">
                    <div class="movie-image w-[80px] flex-1 rounded-[30px]">
                        <img src="<?= (file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>" alt="" class="w-full rounded-[30px]">
                    </div>
                    <div class="movie-title flex flex-col flex-1 gap-2.5">
                        <h3 class="text-center text-[26px] font-bold">
                            <?= (!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Duration:
                            <span class="text-white">
                                <?= (!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Language:
                            <span class="text-white">
                                <?= (!empty($showDetail && !empty($showDetail['language'])) ? htmlspecialchars($showDetail['language']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400">Action:
                            <span class="text-white">
                                <?= (!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?>
                            </span>
                        </h3>
                        <h3 class="text-[20px] font-bold text-gray-400 m-0 p-0">Description:
                            <span class="text-white">
                                <?= (!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?>
                            </span>
                        </h3>
                    </div>
                </div>
                <div class="flex flex-col gap-2.5">
                    <p>TICKHUB:</p>
                    <p>Date:
                        <?= htmlspecialchars($date['date']) ?>
                    </p>
                </div>
                <div class="show-info flex flex-col gap-2.5">
                    <div class="hall flex">
                        <h4 class="flex-1">Hall:
                            <?= (!empty($showHall && !empty($showHall['hall'])) ? htmlspecialchars($showHall['hall']) : 'None') ?>
                        </h4>
                        <h4 id="show-time" class="flex-1">Time: </h4>
                    </div>
                    <h4 class="flex-wrap" id="total-seat">Seat:</h4>
                </div>
                <div class="total-price flex flex-col gap-2.5 ">
                    <h2>Total Price</h2>
                    <p class="text-center">30$</p>
                </div>
                <div class="customer-contact flex flex-col gap-2.5">
                    <h1 class="text-center">CUSTOMER INFO</h1>
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="text" placeholder="Full Name" name="fullName">
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="email" placeholder="Email" name="emailContact">
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="text" placeholder="Your phone number" name="phoneNumber">
                </div>
                <div class="checkout-btn flex justify-between">
                    <button class="bg-[#ff0000] p-2.5 rounded-[20px] hover:bg-white hover:text-black" onclick="displayNone()">Cancel</button>
                    <button class="bg-[#ff0000] p-2.5 rounded-[20px] hover:bg-white hover:text-black" type="submit">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="views/js/seat.js"></script>