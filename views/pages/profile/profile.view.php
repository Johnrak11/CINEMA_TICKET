<?php
require_once("views/partials/head.php");
require_once("views/partials/nav.php");
?>
<form id="form-edit-submit" action="controllers/pages/profile/profile_action/data.profile.php" method="post" class="flex justify-evenly" enctype="multipart/form-data">
    <div class="upload flex-1 flex-col ">
        <div>
            <div class="flex items-center justify-center mt-[15%] upload-profile">
                <img id="image" src="<?= (file_exists('views/images/users/' . $user['image']) and !empty($user['image'])) ? 'views/images/users/' . $user['image'] : "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" ?>" alt="">
            </div>
        </div>
        <div class="round items-center justify-center ml-[30%] hidden" id="change-image">
            <label for="inputTag" class="upload mt-[-20%] w-[5%]"><br />
                <div class="bg-blue-400 p-2 rounded-full text-white" style="border: 2px solid white;">
                    <i class="fa fa-2x fa-camera"></i>
                </div>
                <input name="image" id="inputTag" type="file">
                <input name='id' value="<?= $_COOKIE['id'] ?>" class="hidden"/>
                <br />
            </label>
        </div><br>
        <div class="text-white text-2xl flex items-center justify-center">
            <h1 class="text-white text-2xl flex items-center justify-center name"><?= $user["name"] ?></h1><br>
        </div><br>
        <div class="flex justify-center space-x-1">
            <button type="button" id="btn-action" class="bg-red-600 py-2 px-5 text-white rounded-full hover:bg-white hover:text-black" onclick="btnEditProfile()">Edit profile</button>
            <button type="button" class="bg-red-600 py-2 px-5 text-white rounded-full hover:bg-white hover:text-black hidden" id="save-profile">Save</button>
        </div>
    </div>
    <div class="flex-1 text-2xl text-white mt-[7%] mr-[20%]">
        <h1 class="text-5xl uppercase">Your profile member</h1><br>
        <div class="tab-content" id="tabs-tabContent">
            <div class="tab-pane fade show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                <div class="info-user ">
                    <h1 class="text-2xl mt-3"><span>Full name:</span><Strong class="ml-[4%]"><?php echo $user["name"] ?></Strong></h1>
                    <h1 class="text-2xl mt-3"><span>Email:</span><Strong class="ml-[9%] text-blue-600 underline"><?php echo $user["email"] ?></Strong></h1>
                    <h1 class="text-2xl mt-3"><span>Date of birth:</span><Strong class="ml-[1%]"><?php echo $user["date_of_birth"] ?></Strong></h1>
                    <h1 class="text-2xl mt-3"><span>Address:</span><Strong class="ml-[7%]"><?php echo $user["address"] ?></Strong></h1>
                    <h1 class="text-2xl mt-3"><span>Role:</span><Strong class="ml-[11%]"><?php echo $user["role"] ?></Strong></h1>
                </div>
            </div>
        </div>
        <!----------------Edit profile------------------>
        <div class="text-white hidden edit-profile">
            <div class="text-black" method="get">
                <label for="">Full name</label>
                <input name="name" class="rounded-xl p-1" type="text" id="name-input" value="<?= $user["name"]; ?>">
            </div>
            <h1 class="text-2xl mt-3"><span class="text-white">Email:</span><Strong class="ml-[9%] text-blue-600 underline"><?php echo $user["email"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Date of birth:</span><Strong class="ml-[1%]"><?php echo $user["date_of_birth"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Address:</span><Strong class="ml-[7%]"><?php echo $user["address"] ?></Strong></h1>
            <h1 class="text-2xl mt-3"><span>Role:</span><Strong class="ml-[11%]"><?php echo $user["role"] ?></Strong></h1>
        </div>
    </div>
</form>
<script src="views/js/profile.js"></script>
<?php
require_once("views/partials/footer.php");
?>