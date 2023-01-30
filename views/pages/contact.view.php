<?php 
require_once ("views/partials/head.php");
require_once ("views/partials/nav.php");
?>
<div class="flex mt-[6%] space-x-8 bg-gray-900 justify-center p-10 ml-80 mr-80 text-white bg-opacity-50 border-t-4 border-[#ff0000] rounded-2xl w-[60%]">
    <div>
        <br><br><br>
        <h1 class="uppercase text-2xl">Business development</h1><br>
        <p>OPENING HOUSE : <span>8h</span></p><br>
        <p>TELEPHONE     : <span>0712540816</span></p><br>
        <p>E-MAIL        : <span>group5@strong.com</span></p><br><br>
        <h1 class="text-2xl">MARKETING</h1><br>
        <p>OPENING HOUSE : <span>8h</span></p><br>
        <p>TELEPHONE    : <span>0712540816</span></p><br>
        <p>E-MAIL       : <span>group5@strong.com</span></p>
    </div>
    <div class="border-r-2 border-white"></div>
    <div class="flex-col">
        <h1 class="flex justify-center text-2xl">CONTACT US</h1><br>
        <div class="flex gap-4">
            <input type="text" placeholder="First Name" class="p-2 rounded-full bg-zinc-800" style="border:1px solid white">
            <input type="text" placeholder="Last Name" class="p-2 rounded-full bg-zinc-800" style="border:1px solid white">
        </div><br>
        <input type="email" placeholder="Email address" class="w-[100%] p-2 rounded-full bg-zinc-800" style="border:1px solid white"><br><br>
        <input type="text" placeholder="Phone number" class="w-[100%] p-2 rounded-full bg-zinc-800" style="border:1px solid white"><br><br>
        <input type="text" placeholder="Topic" class="w-[100%] p-2 rounded-full bg-zinc-800" style="border:1px solid white"><br><br>
        <label for="">MESSAGE</label><br><br>
        <textarea name="" id="" cols="50" rows="4" class="resize-none w-[100%] bg-zinc-800" style="border:1px solid white"></textarea><br><br>
        <button  class="bg-red-600 hover:bg-white text-white hover:text-black font-bold py-2 px-4 w-[100%] rounded-full ">SEND</button>
    </div>
</div>
<?php require_once ("views/partials/footer.php") ?>