<?php
require_once('views/partials/head.php');
?>
<style>

</style>
<div class="h-full flex justify-center items-center"
     style="background-image: url('views/images/components_image/register_background.jpg'); background-size: cover; background-position: center;">
     <div
          class=" flex flex-col bg-gray-900 border-t-4 border-[#ff0000] w-2/6 h-fit rounded-2xl rounded-tl-2 text-white shadow-2xl shadow-[#ff0000] bg-opacity-75">
          <div class="flex flex-col justify-center items-center mt-3 ">
               <img src="views/images/components_image/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
               <h3 class="text-xl"> CREATE YOUR ACOUNT</h3>
          </div>
          <form action="" id="forms" class="mr-6 ml-6" method="post">
               <input name="username"
                    class="bg-opacity-0 appearance-none border <?= $usernameValid ? 'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800 "
                    type="text" style="border-radius:20px;" placeholder="Username" id="username">
               <small class="text-[#ff0000] mt--2" id="usernameError">
                    <?= $usernameError ?>
               </small>
               <input name="email" id='email'
                    class="bg-opacity-0 appearance-none border <?php echo $emailValid ? 'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800"
                    style="border-radius:20px;" type="email" placeholder="Email address">
               <small class="text-[#ff0000]" id="emailError">
                    <?= $emailError ?>
               </small>
               <div class="password-container flex relative">
                    <input type="password" name="password" id="password"
                         class="bg-opacity-0 appearance-none border <?php echo $passwordValid ? 'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800"
                         style="border-radius:20px;" placeholder="Your password">
                    <i class="bi bi-eye-slash" id="togglePassword" style="position:absolute;right:15px;top:33%;"></i>
               </div>
               <small class="text-[#ff0000]" id="passwordError">
                    <?= $passwordError ?>
               </small>
               <div class="appearance-none mt-2 w-full">
                    <select name="days" id="date" class="bg-[#ff0000] rounded-full p-2.5 hover:text-black hover:bg-white">
                         <option value="" disabled selected>Days</option>
                         <?php 
                         for($i=1 ; $i<=31; $i++){ ?>
                              <option value="<?= $i ?>"> <?= $i ?> </option>
                         <?php }
                         ?>
                    </select>
                    <select name="months" id="date" class="bg-[#ff0000] rounded-full p-2.5 hover:text-black hover:bg-white">
                         <option value="" disabled selected>Months</option>
                         <option value="01">January</option>
                         <option value="02">February</option>
                         <option value="03">March</option>
                         <option value="04">April</option>
                         <option value="05">May</option>
                         <option value="06">June</option>
                         <option value="07">July</option>
                         <option value="08">August</option>
                         <option value="09">September</option>
                         <option value="10">October</option>
                         <option value="11">November</option>
                         <option value="12">December</option>
                    </select>
                    <select name="years" id="date" class="bg-[#ff0000] rounded-full p-2.5 hover:text-black hover:bg-white">
                         <option value="" disabled selected>Years</option>
                         <?php 
                         $minYear = 1960;
                         $maxYear = 2008;
                         for($minYear ; $minYear<=$maxYear; $minYear++){ ?>
                              <option value="<?= $minYear ?>"> <?= $minYear ?> </option>
                         <?php }
                         ?>
                    </select>
               </div>
               <small class=" text-[#ff0000] " id="date-error">
                    <?= $dateError ?>
               </small>
               <input name="address" id="address"
                    class="bg-opacity-0 appearance-none border <?php echo $addressValid ? 'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-2 bg-slate-800"
                    style="border-radius:20px;" type="text" placeholder="Address">
               <small class=" text-[#ff0000] " id="addressError">
                    <?= $addressError ?>
               </small>
               <button class="bg-[#ff0000] hover:text-black hover:bg-white mt-2  p-2.5 w-full rounded-full"
                    style="border-radius:20px;" type="submit">
                    CREATE ACCOUNT</button>
               <p class="flex justify-center p-2">Already have an account? <a href="login"
                         class="text-blue-600 hover:text-[#ff0000] ml-3">Login</a></p>
          </form>
     </div>
</div>
<script src="views/js/register.js"></script>
</body>

</html>