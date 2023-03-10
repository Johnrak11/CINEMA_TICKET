<?php
require_once("views/partials/head.php");
?>
<div class="flex justify-center items-center w-full">
    <form id="regForm" action="" method = "post" enctype="multipart/form-data" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[60%] p-[10px] rounded-[30px]  bg-[#101827] mt-[3%] mb-5" >
        <h1 class="text-[30px] text-white font-bold text-center">CREATE NEW SHOW</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab m-3 ">
            <div class="flex gap-2.5">
                <div class="title w-full">
                    <input placeholder="Title" oninput="this.className = ''" id="title" name="name"
                    class = "<?php echo $titleValid ? '': 'input-red'?>">
                    <small id="title-message" class = "text-red-600 ml-2"><?= ($titleError) ?></small>
                </div>
                
                <div class="author w-full" >
                    <input class = "<?php echo $authorValid ? '': 'input-red'?>"
                    placeholder="Author" oninput="this.className = ''" id="author" name="author">
                    <small id="author-message" class = "text-red-600 ml-2">
                        <?= $authorError?>
                    </small>
                </div>
            </div>
            <div class="flex gap-2.5">
                <div class="screen w-full">
                    <select name="screen" id="screen" class="<?php echo $authorValid ? '': 'input-red'?> p-2.5 rounded-[30px] mt-[15px] bg-transparent border w-[100%]">
                        <option value="" disabled selected>Screen</option>
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                        <option value="SCEEN-X">SCREEN-X</option>
                    </select>
                    <small id="screen-message" class = "text-red-600 ml-2">
                        <?= $screenError?>              
                    </small>
                </div>

                <div class="category w-full ">
                    <select name="category" id="type-movie" class="<?php echo $catetoryValid ? '': 'input-red'?> p-2.5 rounded-[30px] mt-[15px] bg-transparent border w-full ">
                        <option value="" disabled selected>Type Movie</option>
                        <option value="Action">Action</option>
                        <option value="Romance">Romance</option>
                        <option value="Horror">Horror</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                        <option value="Fantasy">Fantasy</option>
                    </select>
                    <small id="category-message"  class = "text-red-600 ml-2">
                        <?= $catetoryError?>
                    </small>
                </div>
            </div>
            <div class="duration w-full gap-2.5">
                    <div class="flex gap-2 ">
                        <input type="number" placeholder="Hours" oninput="this.className = ''" id="duration"  name="h" class="hour <?php echo $authorValid ? '': 'input-red'?> ">
                        <input type="number" placeholder="Minutes" oninput="this.className = ''" id="duration" name = "m" class="minute <?php echo $authorValid ? '': 'input-red'?>">
                    </div>
                    <small id="duration-message" class = "text-red-600 ml-2">
                        <?= $durationError?>
                    </small>
            </div>
            <div class="flex w-full justify-between gap-2.5 ">
                <div class="category w-[49%] ">
                    <select name="language" id="language" class="<?php echo $languageValid ? '': 'input-red'?> p-2.5 rounded-[30px] mt-[10px] bg-transparent border border-white w-full ">
                        <option value="" disabled selected>Movie language</option>
                        <option value="Khmer">Khmer</option>
                        <option value="English">English</option>
                        <option value="China">China</option>
                    </select>
                    <small id="language-message"  class = "text-red-600">
                        <?= $languageError ?>
                    </small>
                </div>
                <div class="w-[49%] ">
                    <div id = "image"class="<?php echo $imageValid ? '': 'input-red'?> mt-[15px] text-center p-1.5 border border-white rounded-[30px] w-full">
                        <label class = "" for="inputTag">Choose Image <br />
                            <input name="imageUpload" id="inputTag" type="file" />
                            <i class="fa fa-2x fa-camera text-white text-2xl ml-10"></i>
                            <span id="imageName" class="text-green-600"></span>
                        </label>
                        
                    </div>
                    <small id="image-message"  class = "text-red-600 ml-2">
                            <?=( $imageError)?>
                    </small>
                </div>    
            </div>
            <div class="trailer">
                <input class = "<?php echo $trailerValid ? '': 'input-red'?>"
                placeholder="Trailler" oninput="this.className = ''" id="trailler" name="trailer">
                <small id="trailler-message" class = "text-red-600 ml-2">
                        <?= $trailerError?>
                </small>

            </div>
            <div class="description">
                <textarea class = "<?php echo $descriptionValid ? '': 'input-red'?>"
                name="descripton" id="description" cols="10" placeholder="Description"></textarea>
                <small id="descripton-message" class = "text-red-600 ml-2">
                        <?= $descriptionError?>
                </small>
            </div>
            

        </div>
        <div class="tab m-3">
            <div class="date">
                <input  type="text"  placeholder="Select date" oninput="this.className = ''" id="date" name="date" class = " <?php echo $descriptionValid ? '': 'input-red'?> p-2.5 rounded-[30px] mt-[15px] bg-[#101827] border  w-full " >
                <small id = "date-message" class = "text-red-600 ml-2" >
                        <?= $dateError?>
                </small>
            </div>
            <div class="time">
                <input type="time" oninput="this.className = ''" id="time" name="time" class = "<?php echo $durationValid ? '': 'input-red'?> p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
                <small id = "time-message" class = "text-red-600 ml-2">
                        <?= $timeError?>
                </small>
            </div>
            
            <div class="hall">
                <select name="hall" id = "hall-show" class="<?php echo $hallValid? '': 'input-red'?> p-3 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full  ">
                    <option value="" disabled selected>Choose Hall</option>
                    <option value="Hall 1">Hall 1</option>
                    <option value="Hall 2">Hall 2</option>
                    <option value="Hall 3">Hall 3</option>
                    <option value="Hall 4">Hall 4</option>
                </select>
                <small id = "hall-message"class = "text-red-600 ml-2">
                        <?= $hallError?>
                </small>
            </div>
            <div class="venue">
                <select name="venue"  id="venue-name" class="<?php echo $venueValid ? '': 'input-red'?> p-3 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
                    <option value="" disabled selected>Venue Name</option>
                    <?php 
                    $venues = getVenue();
                    foreach ($venues as $venue) :
                    ?>
                    <option value="<?= htmlspecialchars($venue['id'])?>"><?= htmlspecialchars($venue['name'])?></option>
                    <?php endforeach ?>
                </select>
                <small id="venue-name-message" class = "text-red-600">
                        <?= $venueError?>
                </small>
            </div>
            <div class="price">
                <input type="number" oninput="this.className = ''" id="price" name="price" placeholder="Price" class = "<?php echo $priceValid ? '': 'input-red'?>">
                <small id = "price-message" class = "text-red-600">
                        <?= $priceError ?>
                </small>
            </div>
        </div>
        <div class="mr-5 ml-5 h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="canBtn" onclick=""><a href="/seller" class="flex item-center justify-center">Cancel</a></button>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" name = "submit" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;" class = " mb-2">
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</div>
<script src="views/js/create_show.js"></script>