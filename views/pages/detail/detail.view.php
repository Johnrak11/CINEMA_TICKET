<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
?>
<div class="mt-[8%] flex flex-col">
    <div class="flex justify-between flex-2 text-white">
        <div class="text-3xl ml-[10%] " style="flex:2;">
            <h1 class="text-2xl mt-3">
                <span class="text-2xl font-bold"><?= (!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?></span>
            </h1>
            <div class="star-container text-sm">
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star"></span>
            </div>
            <h1 class="text-2xl mt-3"><i class="far fa-clock ml-2" style="font-size:18px"></i> <span class="ml-[3%]"><?= (!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span class="ml-[3%]  <?= (empty($strikthrough)) ? "" : "line-through text-red-600" ?>"> <?= htmlspecialchars($date['date']) ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-book ml-2' style='font-size:18px'></i> <span class="ml-[3%]"> <?= (!empty($showDetail && !empty($showDetail['author'])) ? htmlspecialchars($showDetail['author']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-closed-captioning ml-2' style='font-size:20px'></i> <span class="ml-[3%]"> <?= (!empty($showDetail && !empty($showDetail['language'])) ? htmlspecialchars($showDetail['language']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3"><i class='fa fa-film ml-2' style='font-size:18px'></i> <span class="ml-[3%]"> <?= (!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?></span></h1>
            <h1 class="text-2xl mt-3 font-bold">Description </h1>
            <p class="text-xl mt-2"><?= (!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?> </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container" src="<?= (file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>" alt="" class="w-[70%] rounded-xl"><br>
            <a href="<?= (isset($_COOKIE['email']) and isset($_COOKIE['id'])) ? "#" : "/login" ?>" class=" bg-[#ff0000] py-3 px-3 text-white text-center hover:bg-white hover:text-black w-[45%] mr-[13%] rounded-xl"><button class="font-bold uppercase text-xs">Book Now</button></a>
        </div>
    </div>
    <h1 class="flex-1 text-3xl ml-[10%] mt-[5%] text-white">Trailler</h1>
    <div class="trailler-container flex-3  py-5 flex justify-center align-center flex-1">
        <?php
        if (!empty($showDetail) && !empty($showDetail['trailer'])) {
        ?>
            <iframe src="<?= htmlspecialchars($showDetail['trailer']) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php
        } else {
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