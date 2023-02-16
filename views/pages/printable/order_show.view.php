<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');



?>
<div class="container flex justify-center items-center flex-col ">
    <div class="flex w-[85%] p-10 mt-[5%] ">
        <input type="text" placeholder="search show..." class="p-2 mb-0 w-[40%] rounded-xl">
    </div>
    <div class="bg-gray-800  border-t-4 border-[#ff0000] rounded-2xl w-[80%] flex-col">
        <h1 class="justify-center flex text-2xl mt-4 text-white">Your Order</h1>
        <div class="flex justify-end mr-[5%]">
            <button class="p-2 mt-8 w-[10%] bg-red-600 border-b-6 text-white rounded-xl hover:bg-white hover:text-black">History</button>
        </div>
        <div class="ml-[5%] mb-[5%]">
            <div class="mr-[10%]">
                <button class="p-2 mt-8 bg-red-600 border-b-6 text-white hover:bg-white hover:text-black">Coming Soon</button>
            </div>
            <h1 class="border w-[95%] border-red-600"></h1>

            <div class="contain flex flex-wrap gap-4">
                <?php
                    for( $i = 0; $i <6 ; $i++):{
                ?>
                <div class="card mt-5 ">
                    <img src="image/avarta.png" alt="" class="rounded-xl ">
                    <div class="info text-white">
                        <h1>Thana</h1>
                        <p>Category</p>
                        <p>02/12/2023</p>
                        <p>05:30</p>
                        <p>3G</p>
                        <button>Cancel</button>
                    </div>
                </div> 
                <?php
                    }
                endfor ?>
            </div>
        </div>  
    </div>

</div>
    
<?php
require_once('views/partials/footer.php');
?>
   
