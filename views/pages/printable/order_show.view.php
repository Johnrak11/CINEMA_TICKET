<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');

?>
<div class="container flex justify-center items-center flex-col ">
    <div class="bg-gray-800  border-t-4 border-[#ff0000] rounded-2xl w-[80%] flex-col mt-[7%]">
        <h1 class="justify-center flex text-2xl mt-4 text-white">Your Purchese</h1>
        <div class="flex justify-end mr-[5%]">
            <button class=" p-2 mt-8 w-[10%] bg-red-600 border-b-6 text-white rounded-xl hover:bg-white hover:text-black" onclick="onClickHistory()">History</button>
        </div>
        <div class="ml-[5%] mb-[5%]">
            <div class="mr-[10%]">
                <button class="p-2 mt-8 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">Coming Soon</button>
            </div>
            <h1 class="border w-[95%] border-red-600"></h1>

            <div class="contain flex flex-wrap gap-7 ">
                <?php
                if (!empty($activeTicket)) {
                    foreach ($activeTicket as $ticket) :
                        date_default_timezone_set("Asia/Phnom_Penh");
                        $time = $ticket['time'];
                        $isDateNow = $ticket['date'] . ' ' . $ticket['time'];
                        $formatTime = date('h:i A', strtotime($time));
                ?>
                        <div class="card mt-5 none ">
                            <img src="views/images/shows_image/<?= $ticket['image'] ?>" alt="" class="rounded-xl ">
                            <div class="info text-white">
                                <h1><?= $ticket['name'] ?></h1>
                                <p><?= $ticket['venue'] ?></p>
                                <p><?= $ticket['hall'] ?></p>
                                <p><?= $ticket['date'] ?></p>
                                <p><?= $formatTime ?></p>
                                <p> Seat: <?= $ticket['seat'] ?></p>
                                <a href="/view-ticket?id=<?= $ticket['id'] ?>" class="flex justify-center items-center"><button class="w-[70%]" id="view-ticket">View ticket</button></a>
                            </div>
                        </div>
                <?php
                    endforeach;
                } else {
                    echo "<h1 class='text-white text-center w-full p-[10%] text-2xl'>Purchese not found</h1>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
require_once('views/partials/footer.php');
?>


<div class="history hidden bg-[#12121294] backdrop-blur-sm fixed top-0 left-0 right-0 bottom-0 z-40" id="history">
    <div class=" justify-between flex flex-col ml-[10%] dom-dialog bg-gray-600  rounded-xl box-shadow w-[80%]" style="margin-top:2%">
        <div class="flex flex-col justify-between mt-[-3%] text-white p-2 rounded-xl text-xl">
            <h1 class="justify-center flex text-2xl mt-4 text-white">Pass purchases</h1>
        </div>
        <div class="scroll flex flex-col overflow-y-scroll justify-between mt-[1%] text-white p-2 rounded-xl text-xl">
            <?php
            if (!empty($disabledTicket)) {
                foreach ($disabledTicket as $disabled) {
                    $time = $disabled['time'];
                    $isDateNow = $disabled['date'] . ' ' . $disabled['time'];
                    $formatTime = date('h:i A', strtotime($time));
            ?>
                    <a href="#">
                        <div class="flex justify-between bg-gray-900 mt-[3%] p-1 text-white rounded-xl hover:bg-white hover:text-black " style="border-left:4px solid red">
                            <img class="w-[4%]" src="views/images/shows_image/<?= $disabled['image'] ?>" alt="">
                            <p class="flex items-center justify-center"><?= $disabled['name'] ?></p>
                            <p class="flex items-center justify-center"><?= $disabled['venue'] ?></p>
                            <p class="flex items-center justify-center line-through"><?= $disabled['date'] ?></p>
                            <p class="flex items-center justify-center"><?= $disabled['price'] ?></p>
                            <p class="flex items-center justify-center"><?= $formatTime  ?></p>
                            <p class="flex items-center justify-center"><?= $disabled['seat'] ?></p>
                        </div>
                    </a>
            <?php
                }
            }else{
                echo "<h1 class='text-white text-center w-full p-[10%] mt-[8%] text-2xl'>Purchese not found</h1>";
            }
            ?>
        </div>
        <div class="flex  flex-row-reverse p-2">
            <a class="p-7 rounded-xl bg-red-600 mb-[2%] mr-[1%] py-1 text-white hover:bg-white hover:text-black cursor-pointer" onclick="onClickCancel()">Cancel</a>
        </div>
    </div>
</div>

<script src="views/js/printable.js"></script>