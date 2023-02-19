<?php
require_once("views/partials/head.php");
?>
<div class="flex justify-center items-center h-full w-full">
<form id="regForm" action="" method = "post" enctype="multipart/form-data" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[55%] p-[15px] rounded-[30px] bg-[#101827]" >
        <h1 class="text-[30px] text-white font-bold text-center">CREATE NEW TICKET</h1>
        <div class="tab">
            <div class="date">
                <input type="text"  placeholder="Select date" oninput="this.className = ''" id="date" name="date">
                <small id = "date-message" class = "text-red-600" >
                        <?= $dateError?>
                </small>
            </div>
            <div class="time">
                <input type="time" oninput="this.className = ''" id="time" name="time">
                <small id = "time-message" class = "text-red-600">
                        <?= $timeError?>
                </small>
            </div>
            <div class="hall">
                <select name="hall" id = "hall" class="p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
                    <option value="" disabled selected>Choose Hall</option>
                    <option value="Hall-1">Hall 1</option>
                    <option value="Hall-2">Hall 2</option>
                    <option value="Hall-3">Hall 3</option>
                    <option value="Hall-4">Hall 4</option>
                </select>
                <small id = "hall-message"class = "text-red-600">
                        <?= $hallError?>
                </small>
            </div>
            <div class="venue">
                <select name="venue"  id="venue-name" class="p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
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
                <input type="number" oninput="this.className = ''" id="price" name="price" placeholder="Price">
                <small id = "price-message" class = "text-red-600">
                        <?= $priceError ?>
                </small>
            </div>
        </div>
        <div class="h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <a href="<?= ($_GET['role'] === 'admin') ? "/admin" : "/seller" ?>" class=" flex w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] text-center justify-center rounded-[20px]" id="canBtn"><button type="button">Cancel</button></a>
                <button type="submit" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" name = "showId" value="<?= $_GET['showId'] ?>" id="nextBtn">Create</button>
            </div>
        </div>
    </form>
</div>
<script src="views/js/create_ticket.js"></script>