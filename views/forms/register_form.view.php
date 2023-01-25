<?php
require_once('views/partials/head.php');
?>
<style>
     body {
          justify-content: center;
          align-items: center;
     }
</style>
<div class="flex bg-slate-800 border-t-4 border-red-600 w-2/6 h-5/8 rounded-2xl rounded-tl-2xl	text-white flex-1 mt-5">
     <div class=" flex justify-center flex-col  ">
          <div class="flex flex-col justify-center items-center mt-3 ">
               <img src="views/images/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
               <h3 class="text-xl"> CREATE YOUR ACOUNT</h3>
          </div>
          <form action="" id="forms" class="mr-6 ml-6" method="post">
               <input name="username" class=" appearance-none border <?= $usernameValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800 " type="text" placeholder="Username" id="username">
               <small class="text-red-400 mt--2" id="usernameError"> <?= $usernameError ?> </small>
               <input name="email" id='email' class=" appearance-none border <?php echo  $emailValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" type="email" placeholder="Email address">
               <small class="text-red-400" id="emailError"> <?= $emailError ?> </small>
               <input type="password" name="password" id="password" class=" appearance-none border <?php echo $passwordValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" placeholder="Your password">
               <small class="text-red-400" id="passwordError"> <?= $passwordError ?> </small>
               <input name="date" id="date" class=" appearance-none border <?php echo $dateValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" type="date" placeholder="Date of bairt">
               <small class="text-red-400" id="dateError"> <?= $dateError ?> </small>
               <input name="address" id="address" class=" appearance-none border <?php echo $addressValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800" type="text" placeholder="Address">
               <small class=" text-red-500 " id="addressError"> <?= $addressError ?> </small>
               <button class="bg-red-600 mt-2  p-3 w-full rounded-1xl" style="border-radius:5px;" type="submit"> CREATE ACCOUNT</button>
               <span class="flex justify-center p-1 mt--10 text-sm">Already have an account <a href="login" class="text-purple-600">? login</a></span>
          </form>
     </div>
</div>
<script src="views/js/register.js"></script>
</body>
</html>