<?php
require_once('views/partials/head.php');
?>
<div class=" h-full flex justify-center items-center w-2/2 p-3" style="background-image: url('views/images/components_image/cinema_seat.jpg'); background-size: cover;" >
     <div class="flex bg-gray-900 border-t-4 border-[#ff0000] w-2/6 h-fit mt-2 rounded-2xl text-white  shadow-2xl shadow-[#ff0000] bg-opacity-50">
          <div class="flex-1   ">
               <div class="flex flex-col justify-center items-center mt-4 ">
                    <img src="views/images/components_image/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
                    <h3 class="text-xl font-bold "> WELLCOME BACK</h3>
               </div>
               <form action="" class="m-5" method="post">
                    <input class=" appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800 <?php echo  $emailValid ?  'border-white' : 'border-[#ff0000]' ?> bg-opacity-0" style="border-radius:20px;" id="email" type="email" name="email" placeholder="Email">
                    <small class="text-[#ff0000]" id="emailError"> <?= $emailError ?></small>
                    <input class="<?php echo $passwordValid ?  'border-white' : 'border-[#ff0000]' ?> appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800 mb-3 bg-opacity-0" style="border-radius:20px;" id="password" type="password" name="password" placeholder="Your password">
                    <small class="text-[#ff0000]" id="passwordError"> <?= $passwordError ?> </small><br>
                    <a href="" class="text-blue-600 hover:text-[#ff0000]">Forgot password</a>
                    <button class="bg-[#ff0000] hover:bg-white hover:text-black mt-4 p-2 w-full rounded-1xl mb-3 font-bold" style="border-radius:20px;" type="submit"> LOGIN</button>
                    <p class="flex justify-center">Don't have an account?<a href="register" class="text-blue-600 hover:text-[#ff0000] ml-3">Register</a></p>
               </form>
          </div>
     </div>
</div>
<script src="views/js/login.view.js"></script>