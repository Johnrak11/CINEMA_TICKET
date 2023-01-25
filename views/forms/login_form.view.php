<?php
require_once('views/partials/head.php');
?>
<div class=" flex justify-center items-center w-2/2 p-3 mt-5">
     <div class="flex bg-gray-800 border-t-4 border-red-600 w-2/6 h-2/4 mt-5 rounded-2xl text-white">
          <div class="flex-1   ">
               <div class="flex flex-col justify-center items-center mt-4 ">
                    <img src="views/images/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
                    <h3 class="text-xl font-bold "> WELLCOME BACK</h3>
               </div>
               <form action="" class="m-5" method="post">
                    <input class=" appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800 <?php echo  $emailValid ?  'border-white' : 'border-red-600' ?> " id="email" type="email" name="email" placeholder="Email">
                    <small class="text-red-400" id="emailError"> <?= $emailError ?></small>
                    <input class="<?php echo $passwordValid ?  'border-white' : 'border-red-600' ?> appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800 mb-3" id="password" type="password" name="password" placeholder="Your password">
                    <small class="text-red-400" id="passwordError"> <?= $passwordError ?> </small><br>
                    <a href="" class="text-blue-600">Forgot password</a>
                    <button class="bg-red-600 mt-4 p-2 w-full rounded-1xl mb-3 font-bold" style="border-radius:5px;" type="submit"> LOGIN</button>
                    <p>Don't have an account? <a href="register" class="text-blue-600">Register</a></p>
               </form>
          </div>
     </div>
</div>
<script src="views/js/login.view.js"></script>