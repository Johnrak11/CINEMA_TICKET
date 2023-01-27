<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div class="mt-[8%] flex flex-col">
    <div class="flex justify-between flex-2 text-white">
        <div class="text-3xl ml-[10%] " style="flex:2;">
            <h1 class="text-2xl mt-3">TITLE <i class="fa fa-film ml-2" style="font-size:24px"></i> <span class="ml-[11%]"><?= (!empty($showDetail && !empty($showDetail['name'])) ? $showDetail['name'] : 'None' ) ?></span></h1>
            <h1 class="text-2xl mt-3">VENUE<i class='fas fa-map-marker-alt ml-2' style='font-size:24px'></i> <span class="ml-[10%]"> <?= (!empty($venue) && !empty($venue['name']) ? $venue['name'] : 'None' ) ?></span></h1>
            <h1 class="text-2xl mt-3">AUTHOR <i class='fas fa-book ml-2' style='font-size:24px'></i> <span class="ml-10"> <?= (!empty($showDetail && !empty($showDetail['author'])) ? $showDetail['author'] : 'None' ) ?></span></h1>
            <h1 class="text-2xl mt-3">DESCRIPTION </h1>
            <p class="text-xl mt-2"><?= (!empty($showDetail && !empty($showDetail['description'])) ? $showDetail['description'] : 'None' ) ?> </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container" src="<?= (file_exists("views/images/shows_image/" . $showDetail['image'])?"views/images/shows_image/" . $showDetail['image'] : "None" ) ?>" alt="" class="w-[70%] rounded-xl"><br>
            <button class=" bg-[#ff0000] py-3 px-3 text-white font-bold uppercase text-xs hover:bg-white hover:text-black w-[45%] mr-[13%] rounded-xl">Book Now</button>
        </div>
    </div>
    <h1 class="flex-1 text-3xl ml-[10%] text-white">Trailler</h1>
    <div class="trailler-container flex-3  py-5 flex justify-center align-center flex-1">
        <?php
        if (!empty($showDetail) && !empty($showDetail['trailer'])){
        ?>
        <iframe src="<?= $showDetail['trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php
        }else{
        ?>
            <h1 class="text-[#ff0000] text-2xl">No trailler</h1>
        <?php   
        }
        ?>
    </div>
</div>
<?php
require_once('views/partials/footer.php');
?>