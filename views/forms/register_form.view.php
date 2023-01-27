<?php
require_once('views/partials/head.php');
?>
<style>
     
</style>
<div class= "h-full flex justify-center items-center" style="background-image: url('views/images/components_image/register_background.jpg'); background-size: cover; background-position: center;">
     <div class=" flex flex-col bg-gray-900 border-t-4 border-red-600 w-2/6 h-fit rounded-2xl rounded-tl-2 text-white shadow-2xl shadow-red-500 bg-opacity-50">
          <div class="flex flex-col justify-center items-center mt-3 ">
               <img src="views/images/components_image/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
               <h3 class="text-xl"> CREATE YOUR ACOUNT</h3>
          </div>
          <form action="" id="forms" class="mr-6 ml-6" method="post">
               <input name="username" class="bg-opacity-0 appearance-none border <?= $usernameValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800 " type="text" style="border-radius:20px;" placeholder="Username" id="username">
               <small class="text-red-400 mt--2" id="usernameError"> <?= $usernameError ?> </small>
               <input name="email" id='email' class="bg-opacity-0 appearance-none border <?php echo  $emailValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" style="border-radius:20px;" type="email" placeholder="Email address">
               <small class="text-red-400" id="emailError"> <?= $emailError ?> </small>
               <input type="password" name="password" id="password" class="bg-opacity-0 appearance-none border <?php echo $passwordValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" style="border-radius:20px;" placeholder="Your password">
               <small class="text-red-400" id="passwordError"> <?= $passwordError ?> </small>
               <input name="date" id="date" class="bg-opacity-0 appearance-none border <?php echo $dateValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" style="border-radius:20px;" type="date" placeholder="Date of bairt">
               <small class="text-red-400" id="dateError"> <?= $dateError ?> </small>
               <input name="address" id="address" class="bg-opacity-0 appearance-none border <?php echo $addressValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" style="border-radius:20px;" type="text" placeholder="Address">
               <small class=" text-red-500 " id="addressError"> <?= $addressError ?> </small>
               <button class="bg-red-600 mt-2  p-3 w-full rounded-1xl" style="border-radius:20px;" type="submit"> CREATE ACCOUNT</button>
               <p class="flex justify-center p-2">Already have an account? <a href="login" class="text-blue-600 hover:text-red-800 ml-3">Login</a></p>
          </form>
     </div>
</div>
<script src="views/js/register.js"></script>
</body>
</html>