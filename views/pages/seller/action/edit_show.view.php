<?php
require_once('views/partials/head.php');
?>
<div class="mt-[8%] flex flex-col">
    <div class="flex justify-between flex-2 text-white">
        <div class="text-3xl ml-[10%] " style="flex:2;">
            <h1 class="text-2xl mt-3">
                <span id="title-edit" class="text-2xl font-bold"><?=(!empty($showDetail && !empty($showDetail['name'])) ? htmlspecialchars($showDetail['name']) : 'None') ?></span>
            </h1>
            <div class="star-container text-sm">
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star checked text-orange-600"></span>
                <span class="fa fa-star"></span>
            </div>
            <h1 class="text-2xl mt-3"><i class="far fa-clock ml-2" style="font-size:18px"></i> <span id="duration-edit"
                    class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['duration'])) ? htmlspecialchars($showDetail['duration']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='far fa-calendar-check ml-2' style='font-size:18px'></i> <span
                    id="date-edit" class="ml-[3%]  <?=(empty($strikthrough)) ? "" : "line-through text-red-600" ?>">
                    <?= htmlspecialchars($date['date']) ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-book ml-2' style='font-size:18px'></i> <span id="author-edit"
                    class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['author'])) ? htmlspecialchars($showDetail['author']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fas fa-closed-captioning ml-2' style='font-size:20px'></i> <span
                    id="lenguage-edit" class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['language'])) ? htmlspecialchars($showDetail['language']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3"><i class='fa fa-film ml-2' style='font-size:18px'></i> <span id="category-edit"
                    class="ml-[3%]">
                    <?=(!empty($showDetail && !empty($showDetail['category'])) ? htmlspecialchars($showDetail['category']) : 'None') ?>
                </span></h1>
            <h1 class="text-2xl mt-3 font-bold">Description </h1>
            <p class="text-xl mt-2" id="description-edit">
                <?=(!empty($showDetail && !empty($showDetail['description'])) ? htmlspecialchars($showDetail['description']) : 'None') ?>
            </p>
        </div>
        <div class="flex justify-center flex-col items-end mr-[10%] " style="flex:1;">
            <img id="right-card-container"
                src="<?=(file_exists("views/images/shows_image/" . $showDetail['image']) ? "views/images/shows_image/" . $showDetail['image'] : "None") ?>"
                alt="" class="w-[70%] rounded-xl"><br>
            <button id="edit-show"
                class=" bg-[#ff0000] py-3 px-3 text-white text-center hover:bg-white hover:text-black w-[45%] mr-[13%] rounded-xl font-bold uppercase text-xs">EDIT
                SHOW</button>
        </div>
    </div>
</div>

<!-- ============card ========= -->
<div class="ml-[10%] mb-[5%] mt-[5%]">
    <div class="venue-container flex flex-col gap-2.5">
        <?php
        if ($_GET['id']) {
            $allVenues = getVenues($_GET['id']);
            foreach ($allVenues as $venue) {
                ?>
                <div class="mr-[10%]">
                    <button class="p-2 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">
                        <?= $venue['name'] ?>
                    </button>
                    <h1 class="border border-red-600"></h1>
                </div>
                <div>
                    <?php
                    $venueHall = getVenuesHall($_GET['id'], $venue['name']);
                    foreach ($venueHall as $hall) {
                        ?>
                        <a>
                            <div class="flex justify-between bg-gray-400 mr-[10%] mt-[1%] p-4 text-black rounded-xl hover:bg-white hover:text-black "
                                style="border-left:4px solid red">
                             flex-col gap-2.5    <p class="flex items-center justify-center">
                                    <?= $hall['hall'] ?>
                                </p>
                                <p class="flex items-center justify-center">
                                    <?= $hall['time'] ?>
                                </p>
                                <p class="flex items-center justify-center">
                                    <?= $hall['date'] ?>
                                </p>
                                <p class="flex items-center justify-center">
                                    <?= $hall['price'] ?>
                                </p>
                                <div class="flex justify-center gap-3">
                                    <button id="edit" class="flex items-center justify-center"data-index="<?= $hall['id']?>">Edit</button>
                                    <button id="delete" class="flex items-center justify-center">Delete</button>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
        }
        ?>

    </div>

</div>
</div>
<!-- ==========================================show=form=============== -->
<div id="venue-form" class="flex justify-center items-center h-full w-full bg-[#000000a5] "
    style="position: fixed;display:none;">
    <form id="regForm" action="" method="post" enctype="multipart/form-data"
        class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[60%] p-[10px] rounded-[30px]  bg-[#101827] mt-[3%] mb-5">
        <h1 class="text-[30px] text-white font-bold text-center">EDIT SHOW</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab m-3 ">
            <div class="flex gap-2.5">
                <div class="title w-full">
                    <input placeholder="Title" id="title" name="name"
                        class="<?php echo $titleValid ? '' : 'input-red' ?>">
                    <small id="title-message" class="text-red-600 ml-2"></small>
                </div>

                <div class="author w-full">
                    <input class="<?php echo $authorValid ? '' : 'input-red' ?>" placeholder="Author" id="author"
                        name="author">
                    <small id="author-message" class="text-red-600 ml-2">

                    </small>
                </div>
            </div>
            <div class="flex gap-2.5">
                <div class="screen w-full">
                    <select name="screen" id="screen"
                        class="<?php echo $authorValid ? '' : 'input-red' ?> p-2.5 rounded-[30px] mt-[15px] bg-transparent border w-[100%] bg ">
                        <option value="" disabled selected>Screen</option>
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="SCEEN-X">SCREEN-X</option>
                    </select>
                    <small id="screen-message" class="text-red-600 ml-2">
                    </small>
                </div>

                <div class="category w-full ">
                    <select name="category" id="type-movie"
                        class="<?php echo $catetoryValid ? '' : 'input-red' ?> p-2.5 rounded-[30px] mt-[15px] bg-transparent border w-full ">
                        <option value="" disabled selected>Type Movie</option>
                        <option value="Action">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Horror">Horror</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                        <option value="Fantasy">Fantasy</option>
                    </select>
                    <small id="category-message" class="text-red-600 ml-2">
                    </small>
                </div>
            </div>
            <div class="duration w-full gap-2.5">
                <div class="flex gap-2.5 mt-2.5">
                    <input type="number" placeholder="Hours" id="hour" name="h"
                        class="hour <?php echo $authorValid ? '' : 'input-red' ?> w-full p-2.5 rounded-[30px]">
                    <input type="number" placeholder="Minutes" id="minute" name="m"
                        class="minute <?php echo $authorValid ? '' : 'input-red' ?> w-full p-2.5 rounded-[30px]">
                </div>
                <small id="duration-message" class="text-red-600 ml-2">

                </small>
            </div>
            <div class="flex w-full justify-between gap-2.5 ">
                <div class="category w-[49%] ">
                    <select name="language" id="language"
                        class="<?php echo $languageValid ? '' : 'input-red' ?> p-2.5 rounded-[30px] mt-[10px] bg-transparent border border-white w-full ">
                        <option value="" disabled selected>Movie language</option>
                        <option value="Khmer">Khmer</option>
                        <option value="English">English</option>
                        <option value="China">China</option>
                    </select>
                    <small id="language-message" class="text-red-600">

                    </small>
                </div>
                <div class="w-[49%] ">
                    <div id="image"
                        class="<?php echo $imageValid ? '' : 'input-red' ?> mt-[15px] text-center p-1.5 border border-white rounded-[30px] w-full">
                        <label class="" for="inputTag">Choose Image <br />
                            <input name="imageUpload" id="inputTag" type="file" />
                            <i class="fa fa-2x fa-camera text-white text-2xl ml-10"></i>
                            <span id="imageName" class="text-green-600"></span>
                        </label>

                    </div>
                    <small id="image-message" class="text-red-600 ml-2">

                    </small>
                </div>
            </div>
            <div class="trailer">
                <input class="<?php echo $trailerValid ? '' : 'input-red' ?>" placeholder="Trailler" id="trailler"
                    name="trailer">
                <small id="trailler-message" class="text-red-600 ml-2">

                </small>

            </div>
            <div class="description">
                <textarea class="<?php echo $descriptionValid ? '' : 'input-red' ?>" name="descripton" id="description"
                    cols="10" placeholder="Description"></textarea>
                <small id="descripton-message" class="text-red-600 ml-2">

                </small>
            </div>


        </div>
        <div class="mr-5 ml-5 h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <button type="button"
                    class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]"
                    id="canBtn">Cancel</button>
                <button type="button"
                    class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]"
                    name="submit" id="nextBtn">Edit</button>
            </div>
        </div>
    </form>
</div>



<!-- ==========================================venue==form=============== -->
<div class="venue-edit-container h-full w-full fixed " style="display:none;">
    <div id="venue-edit" class="justify-center flex item-center mt-[100px] ">
        <form id="form-venue" action="" method="post" enctype="multipart/form-data"
            class=" border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[55%] p-[15px] rounded-[30px] bg-[#101827]">
            <h1 class="text-[30px] text-white font-bold text-center">EDIT VENUE</h1>
            <div class="">
                <div class="hall-venue">
                    <select name="hall" id="hall-venue"
                        class="p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border  border-white w-full ">
                        <option value="" disabled selected>Choose Hall</option>
                        <option value="Hall 1">Hall 1</option>
                        <option value="Hall 2">Hall 2</option>
                        <option value="Hall 3">Hall 3</option>
                        <option value="Hall 4">Hall 4</option>
                    </select>
                    <small id="hall-message" class="text-red-600">
                    </small>
                </div>
                <div class="time-venue flex mt-[15px] justify-between gap-2.5">
                    <input type="text" id="hour-venue " name="time"
                        class="p-2.5 rounded-[30px] w-full bg-[#101827] border border-white" placeholder="Hour">
                    <!-- <small id="time-message" class="text-red-600">
                </small> -->
                    <input type="text" id="min-venue" name="time"
                        class="p-2.5 rounded-[30px] w-full bg-[#101827] border border-white" placeholder="Minute">
                    <!-- <small id="time-message" class="text-red-600">
                </small> -->
                </div>
                <div class="date-venue mt-[15px]">
                    <input datepicker type="date" placeholder="Select date" id="date-venue" name="date"
                        class="bg-[#101827] p-2.5 rounded-[30px] w-full border text-white border-white">
                    </small>
                </div>
                <div class="price">
                    <input type="number" id="price" name="price" placeholder="Price">
                    <!-- <small id="price-message" class="text-red-600">
                    </small> -->
                </div>
            </div>
            <div class="h-[45px] mt-[15px]" style="overflow:auto;">
                <div class="flex w-full h-full justify-between">
                    <a href="/seller"
                        class=" flex w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] text-center justify-center rounded-[20px]"
                        id="canBtn"><button type="button">Cancel</button></a>
                    <button type="submit"
                        class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]"
                        name="showId" id="nextBtn">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="views/js/edit_show.js"></script>