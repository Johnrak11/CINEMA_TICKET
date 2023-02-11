<?php
require_once("views/partials/head.php");
?>
<div class="flex justify-center items-center h-full w-full">
    <form class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[55%] p-[15px] rounded-[30px] bg-[#101827]" action="">
        <h1 class="text-[30px] text-white font-bold text-center">ADD NEW VENUE</h1>
        <div class="tab block">
            <input type="date" id="date" name="date">
            <input type="time" id="time" name="time">
            <select name="hall" class="p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
                <option value="" disabled selected>Choose Hall</option>
                <option value="Hall-1">Hall 1</option>
                <option value="Hall-2">Hall 2</option>
                <option value="Hall-3">Hall 3</option>
                <option value="Hall-4">Hall 4</option>
            </select>
            <input type="text" placeholder="Venue Name" id="venue-name" name="venue">
            <input type="text" placeholder="Address" id="venue" name="venue">
        </div>
        <div class="h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <a href="/seller" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px] flex justify-center item-center"><button type="button">Cancel</button></a>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
    </form>
</div>
<script src="views/js/create_venue.js"></script>