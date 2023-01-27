<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div class="mt-[8%] flex flex-col">
    <div class="flex justify-between flex-2 text-white">
        <div class="text-3xl ml-[10%] " style="flex:2;">
            <h1 class="text-2xl mt-3">TITLE <i class="fa fa-film ml-2" style="font-size:24px"></i> <span class="ml-[11%]"> Avatar-2: The way of wather</span></h1>
            <h1 class="text-2xl mt-3">VENUE<i class='fas fa-map-marker-alt ml-2' style='font-size:24px'></i> <span class="ml-[10%]"> Kep, cambodia</span></h1>
            <h1 class="text-2xl mt-3">AUTHOR <i class='fas fa-book ml-2' style='font-size:24px'></i> <span class="ml-10"> Rthana</span></h1>
            <h1 class="text-2xl mt-3">DESCRIPTION </h1>
            <p class="text-xl mt-2">dolor sit amet consectetur adipisicing elit. Impedit, unde voluptates. Nam ut esse unde, expedita eius eos, vel architecto, totam dolorum modi odio non error accusantium sunt voluptas quaerat? </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container" src="https://noguiltdisney.com/wp-content/uploads/2022/12/AVATAR_-THE-WAY-OF-WATER-poster-scaled.jpg.webp" alt="" class="w-[70%] rounded-xl"><br>
            <button class=" bg-red-600 py-3 px-3 text-white font-bold uppercase text-xs hover:bg-red-900 hover:text-white-800 w-[45%] mr-[13%] rounded-xl">Book Now</button>
        </div>
    </div>
    <h1 class="flex-1 text-3xl ml-[10%] text-white">Trailler</h1>
    <div class="trailler-container flex-3  py-5 flex justify-center align-center flex-1">
        <iframe src="https://www.youtube.com/embed/3dsNr2uFUhI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>
<?php
require_once('views/partials/footer.php');
?>