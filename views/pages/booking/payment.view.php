<?php
require_once('views/partials/head.php');
?>
<div class="payment-container flex bg-gray-900 ml-[20%] mr-[20%] border-t-4 border-[#ff0000] rounded-2xl mt-5">
    <div class="pay-ment mr-[4%]">
        <form class="w-full ml-[3%]">
            <h3 class="text-xl mt-2 text-center text-white"> PAYMENT </h3>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase mt-2 tracking-wide text-gray-400 text-xs font-bold mb-2">CARDHOLDER'S NAME </label><br>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-20 rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Name on card">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2">CARD NUMBER</label><br>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="----- -----">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 ">
                    <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2">EXPIRY DATE</label><br>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" placeholder="mm/dd/yy">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2">cvv</label><br>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Code">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-400 text-xs font-bold mb-2">Email</label><br>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-full py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Enter your email">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <button class="bg-[#ff0000] hover:text-black hover:bg-white mt-2  p-2.5 w-full rounded-full " style="border-radius:20px;" type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>
    <div class="border-r-2 border-white"></div>
    <div class="flex-col ml-[5%]">
        <h1 class="flex text-xl mt-2 h-10 text-white">ORDER</h1>
        <hr width="250px">
        <div class="flex gap-32 mt-8">
            <img class="w-[25%] h-[25%]" src="image/avarta.png" alt="">
            <p class="text-white">$19.20</p>
        </div>
        <div class="flex gap-32 mt-5">
            <img class="w-[25%] h-[25%]" src="/image/avarta.png">
            <p class="text-white">$10.5</p>
        </div>
        <div class="flex mt-20 h-10 gap-28">
            <p class="text-white">Shoping</p>
            <p class="text-white">$12.30</p>
        </div>
        <hr width="250px">
        <div class="flex mt-5 gap-32">
            <p class="text-white">Total</p>
            <p class="text-white">$15.20</p>
        </div>
    </div>
</div>
</body>

</html>