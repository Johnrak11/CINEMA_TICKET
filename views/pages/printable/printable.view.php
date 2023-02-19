<?php
require_once('views/partials/head.php');
?>
<div class="container max-w-full flex fixed top-0 bottom-0 right-0 left-0 items-center justify-center">
    <div id="image-print" class="card-teckit dark:text-white flex w-[65%] h-[60%] p-7  bg-white border rounded-xl border-gray-500 shadow hover:bg-red-100 dark:bg-red-800 dark:border-red-700 dark:hover:bg-red-700 ">
        <div class="teckit-left flex flex-col justify-center mr-[15%]">
            <h2 class="font-normal text-center text-yellow-300 text-2xl ml-5 mb-5">TICK HUB</h2>
            <img src="views/images/components_image/qr_Cod.png" alt="" class="w-[100%] mb-[10%]">
            <h1 class="mb-2 text-4xl font-bold ml-[40%]"><?= $activeTicket['price'] ?></h1>
        </div>
        <div class="teckit-right  flex flex-2 flex-col items-start justify-start mr-7 mt-3">
            <h1 class="mb-3 text-4xl font-bold tracking-tight ml-5"><?= $activeTicket['name'] ?></h1>
            <h2 class="font-normal text-yellow-300 text-2xl ml-5"> <?= $activeTicket['venue'] ?></h2>
            <p class="ml-5">Date: <span><?= $activeTicket['date'] ?></span></p>
            <p class="ml-5">Time: <span><?= $formatTime ?></span></p>
            <p class="ml-5"><?= $activeTicket['hall'] ?></p>
            <p class="ml-5">Seat : <span><?= $activeTicket['seat'] ?></span></p>
            <p class="ml-5">Screen : <span><?= $activeTicket['screen'] ?></span></p>
            <p class="mt-3 ml-5">Email: <span>tickhubcinema@gmail.com</span> </p>
        </div>
    </div>
</div>
<div class="flex justify-center mt-5 fixed bottom-0 right-5">
    <button id="print-btn" class="print-button"><span class="print-icon animate-bounce"></span></button>
</div>

<script src="views/js/view_ticket.js"></script>