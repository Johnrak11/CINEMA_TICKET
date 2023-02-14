<?php
require_once("views/partials/head.php");
require_once("views/partials/nav.php");
require_once("models/profile.model.php");
?>
<div class="flex justify-evenly">
    <!-- <div class="bg-red-900 w-[25%] h-screen">
    
    </div> -->
    <div class=" upload flex-1 flex-col  w-[30%]">
        <div class="flex items-center justify-center mt-[15%] ">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="" >
        </div>
        <div class="round flex items-center justify-center ml-[30%] hidden">
            <label for="inputTag" class="upload mt-[-20%] w-[5%]"><br />
                <div class="bg-blue-400 p-2 rounded-full text-white" style="border: 2px solid white;">
                    <i class="fa fa-2x fa-camera"></i>
                </div>
                <input name="imageUpload" id="inputTag" type="file" />
                <br />
            </label>
        </div><br>
        <h1 class="text-white text-2xl flex items-center justify-center">Vanda SOPHAL</h1><br>
        <div class="flex justify-center space-x-1">
            <a href="" class="bg-red-600 py-2 px-5 text-white rounded-full hover:bg-white hover:text-black"><button >Edit profile</button></a>
            <!-- <a href="" class="bg-red-600 py-2 px-5 rounded-full text-white hover:bg-white hover:text-black"><button>Edit profile</button></a> -->
        </div>
    </div>
    <div class="flex-1 text-2xl text-white mt-[7%] mr-[20%]">
        <ul class="flex justify-between" style="border-bottom: 1px solid white;">
            <a href=""><li>Your info</li></a>
            <a href=""><li>Your info</li></a>
            <a href=""><li>Your info</li></a>
            <a href=""><li>Your info</li></a>
            <a href=""><li>Your info</li></a>
        </ul><br>
        <!--  -->
        <div class="info-user hidden">
            <h1 class="text-2xl mt-3"><span>Full name:</span><Strong class="ml-[4%]"><?php echo $user["name"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Email:</span><Strong class="ml-[9%] text-blue-600 underline"><?php echo $user["email"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Date of birth:</span><Strong class="ml-[1%]"><?php echo $user["date_of_birth"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Address:</span><Strong class="ml-[7%]"><?php echo $user["address"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Role:</span><Strong class="ml-[11%]"><?php echo $user["role"] ?></Strong></h1>
        </div>
        <!-- // --------------Edit profile---------------- -->
        <div class="text-black edit-profile">
            <label for="">Full name</label>
            <input type="text">
            <label for="">Email</label>
            <input type="text">
            <label for="">Date of birth</label>
            <input type="date">
            <label for="">Address</label>
            <input type="text">
            <label for="">Role</label>
            <input type="text">
        </div>
    </div>
</div>
<?php
require_once("views/partials/footer.php");
?>