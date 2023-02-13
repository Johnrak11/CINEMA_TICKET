<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div>
    <div class="flex justify-between mt-[10%]">
        <div class="text-3xl ml-[10%] text-white" style="flex:2;">
            <h1 class="text-2xl mt-3"> <span class="text-2xl font-bold">
                    <?=(!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class="far fa-clock ml-2" style="font-size:18px"></i> <span class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span
                    class="ml-[3%]  <?=(empty($strikthrough)) ? "" : "line-through text-red-600" ?>">
                    <?= htmlspecialchars($date['date']) ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-book ml-2' style='font-size:18px'></i> <span class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['author'])) ? htmlspecialchars($showDetail['author']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fa fa-film ml-2' style='font-size:18px'></i> <span class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3 font-bold">Description </h1>
            <p class="text-xl mt-2">
                <?=(!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?>
            </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container"
                src="<?=(file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>"
                alt="" class="w-[70%] rounded-xl"><br>
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
                    for ($i = 0; $i < 2; $i++):
                        ?>
                        <div class="flex justify-between mt-[2%]">
                            <h1 class="text-2xl ml-[2%]">2023/02/08</h1>
                            <div class="mr-[2%]">
                                <a href=""><button
                                        class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">13:00</button></a>
                                <a href=""><button
                                        class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">15:00</button></a>
                                <a href=""><button
                                        class="py-1 px-7 bg-red-800 hover:bg-white hover:text-black">20:00</button></a>
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

<div class="seat-information hidden text-white">
    <div class="movie-container width-full flex p-5">
        <div class="container flex flex-col gap-2.5 width-full bg-[#050529] p-4 rounded-l-[80px]">
            <h1 class="text-[28px] text-center font-bold">SELECT YOUR SEAT</h1>
            <div class="w-full">
                <div class="letter-container flex flex-col items-center bg-gray-800 bg-opacity-[50%] p-2.5 rounded-[30px]"
                    style="perspective: 1000px;">
                    <div class="screen bg-white h-[30px] flex self-center w-[80%] mb-[20px]"></div>
                    <?php
                    $alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'M'];
                    foreach ($alphabets as $alphabet) { ?>
                        <div class='flex w-full justify-evenly '>
                            <p class='letter-row w-[20px] mt-[10px] flex'>
                                <?= $alphabet ?>
                            </p>
                            <div class='row flex-1'>
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    echo '<img dataset="' . $i . '" src="views/images/components_image/seat.png" alt="" class="seat w-[30px] h-[30x] m-[3px]">';
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
        <div class="info-movie bg-[#050529] p-4 flex flex-col items-center gap-2.5 w-full rounded-r-[80px]">
            <h1 class="text-[28px] font-bold">SUMMARY</h1>
            <div class="movie bg-gray-800 bg-opacity-[50%] w-full flex flex-col gap-5 p-2.5 rounded-[30px]">
                <div class="movie-summary flex gap-5 rounded-[30px]">
                    <div class="movie-image w-[80px] flex-1 rounded-[30px]">
                        <img src="views/images/shows_image/phn099.png" alt="" class="w-full rounded-[30px]">
                    </div>
                    <div class="movie-title flex-1">
                        <h3 class="text-center text-[26px] font-bold">Title</h3>
                        <h3 class="text-[20px] font-bold">Time</h3>
                        <h3 class="text-[20px] font-bold">Language</h3>
                        <h3 class="text-[20px] font-bold">Action</h3>
                        <h3 class="text-[20px] font-bold">Description</h3>
                    </div>
                </div>
                <div class="flex flex-col gap-2.5">
                    <p>TICKHUB:</p>
                    <p>Date:</p>
                </div>
                <div class="show-info flex flex-col gap-2.5">
                    <div class="hall flex">
                        <h4 class="flex-1">Hall:</h4>
                        <h4 class="flex-1">Time:</h4>
                    </div>
                    <h4 class="flex-wrap">Seat:</h4>
                </div>
                <div class="total-price flex flex-col gap-2.5 ">
                    <h2>Total Price</h2>
                    <p class="text-center">30$</p>
                </div>
                <div class="customer-contact flex flex-col gap-2.5">
                    <h1 class="text-center">CUSTOMER INFO</h1>
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="text" placeholder="Full Name"
                        name="fullName">
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="email" placeholder="Email"
                        name="emailContact">
                    <input class="p-2.5 rounded-[20px] bg-gray-800 bg-opacity-[25%]" type="text"
                        placeholder="Your phone number" name="phoneNumber">
                </div>
                <div class="checkout-btn flex justify-between">
                    <button class="bg-[#ff0000] p-2.5 rounded-[20px] hover:bg-white hover:text-black">Concel</button>
                    <button class="bg-[#ff0000] p-2.5 rounded-[20px] hover:bg-white hover:text-black"
                        type="submit">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="views/js/seat.js"></script>