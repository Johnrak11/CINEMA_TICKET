<?php
require_once("views/partials/head.php");
?>
<div class="flex justify-center items-center h-full w-full">
    <form id="regForm" class="border-t-4 border-[#ff0000] shadow-2xl shadow-[#ff0000] w-[55%] p-[15px] rounded-[30px] bg-[#101827]" action="">
        <h1 class="text-[30px] text-white font-bold text-center">CREATE NEW SHOW</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab ">
            <div class="flex gap-2.5">
                <input placeholder="Title" oninput="this.className = ''" id="title" name="title">
                <input placeholder="Author" oninput="this.className = ''" id="author" name="author">
            </div>
            <div class="flex gap-2.5">
                <div class="flex gap-3">
                    <input type="number" placeholder="Hours" oninput="this.className = ''" id="duration"  name="duration" class="hour">
                    <input type="number" placeholder="Minutes" oninput="this.className = ''" id="duration" name="duration" class="minute">
                    <input type="number" placeholder="Second" oninput="this.className = ''" id="duration" name="duration" class="second">
                </div>
                <select name="screen" id="screen" class="p-2.5 rounded-[30px] mt-[15px] bg-transparent border border-white w-full ">
                    <option disabled selected>Screen</option>
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                    <option value="SCEEN-X">SCREEN-X</option>
                </select>
            </div>
            <div class="flex gap-2.5">
                <select name="category" id="type-movie" class="p-2.5 rounded-[30px] mt-[15px] bg-transparent border border-white w-full ">
                    <option value="" disabled selected>Type Movie</option>
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Horror">Horror</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Fantasy">Fantasy</option>
                </select>
                <div class="mt-[15px] text-center p-2.5 border border-white rounded-[30px] w-full">
                    <label for="inputTag">Choose Image <br />
                        <i class="fa fa-2x fa-camera"></i>
                        <input name="imageUpload" id="inputTag" type="file" />
                        <br />
                        <span id="imageName" class="text-green-600"></span>
                    </label>
                </div>
            </div>
            <input placeholder="Trailler" oninput="this.className = ''" id="trailler" name="author">
            <textarea name="descripton" id="description" cols="10" placeholder="Description"></textarea>
        </div>
        <div class="tab">
            <input type="date" oninput="this.className = ''" id="date" name="date">
            <input type="time" oninput="this.className = ''" id="time" name="time">
            <select name="hall" class="p-2.5 rounded-[30px] text-white mt-[15px] bg-[#101827] border border-white w-full ">
                <option value="" disabled selected>Choose Hall</option>
                <option value="Hall-1">Hall 1</option>
                <option value="Hall-2">Hall 2</option>
                <option value="Hall-3">Hall 3</option>
                <option value="Hall-4">Hall 4</option>
            </select>
            <input type="text" placeholder="Venue Name" oninput="this.className = ''" id="venue-name" name="venue">
            <input type="text" placeholder="Address" oninput="this.className = ''" id="venue" name="venue">
        </div>
        <div class="h-[45px] mt-[15px]" style="overflow:auto;">
            <div class="flex w-full h-full justify-between">
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="canBtn" onclick="">Cancel</button>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                <button type="button" class="w-[15%] border-white hover:bg-white hover:text-black bg-[#ff0000] text-white text-[18px] rounded-[20px]" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</div>
<style>
    .input-green:focus {
        outline: 2px green solid;
        border-radius: 2rem;
    }
    #regForm .input-green{
        border: 1px green solid;
    }

    .input-red:focus {
        outline: 2px red solid;
        border-radius: 2rem;
    }
    #regForm .input-red{
        border: 1px red solid;
    }
</style>
<script src="views/js/create_show.js"></script>