<<<<<<< HEAD:views/forms/register_form.view.php

<body class = "flex justify-center items-center text-white">
  <div class = "flex bg-slate-800 border-t-4 border-red-600 w-4/6 h-2/4 mt-5 rounded-2xl rounded-tl-2xl	">
       <div class = "flex-1">
            <img src="views/images/register_img.png" alt="" class = "w-4/5 ml-1 ">
       </div>
       <div class = "flex-1 mr-2 " >
          
            <div class = "flex flex-col justify-center items-center mt-3 mr-14 ">
               <img src="views/images/user_account.png" alt="" class = "rounded-full w-20 h-20 mb-3	">
               <h3 class = "text-xl"> CREATE YOUR ACOUNT</h3>
            </div>

            <form action="" class = "mr-14">
                 <input class = " appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800 " id="username" type="text" placeholder="Username">
                 <input class = " appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800" id="username" type="text" placeholder="Email address">
                 <input class = " appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800" id="username" type="text" placeholder="Your password">
                 <input class = " appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800" id="username" type="text" placeholder="Date of bairt">
                 <input class = " appearance-none border rounded w-full py-2 px-3 mt-5 bg-slate-800" id="username" type="text" placeholder="Address">
                 <button class = "bg-red-600 mt-4 p-2 w-full rounded-1xl" style= "border-radius:5px;"> CREATE ACCOUNT</button>
            </form>

       </div>

  </div>
  
</body>
=======
<?php
require_once('controllers/forms/register.controller.php');
?>
<div class="flex bg-slate-800 border-t-4 border-red-600 w-4/6 h-2/4 mt-5 rounded-2xl rounded-tl-2xl	text-white">
     <div class="flex-1 bg-blue-400 ">
          <img src="views/images/register_img.png" alt="" width="100%" >
     </div>
     <div class="flex-1 mr-2 ">
          <div class="flex flex-col justify-center items-center mt-3 mr-14 ">
               <img src="views/images/user_account.png" alt="" class="rounded-full w-20 h-20 mb-3	">
               <h3 class="text-xl"> CREATE YOUR ACOUNT</h3>
          </div>
          <form action="#" class="mr-14" method="post">
               <input name="username" class=" appearance-none border <?= $usernameValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-3 bg-slate-800 " type="text" placeholder="Username" id="username">
               <small class="text-red-400 mt--2 bg-red-600" id="usernameError"> <?= $usernameError ?> </small>
               <input name="email" id='email' class=" appearance-none border <?php echo  $emailValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-3 bg-slate-800" type="email" placeholder="Email address">
               <small class="text-red-400" id="emailError"> <?= $emailError ?> </small>
               <input type="password" name="password" id="password" class=" appearance-none border <?php echo $passwordValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-3 bg-slate-800" placeholder="Your password">
               <small class="text-red-400" id="passwordError"> <?= $passwordError ?> </small>
               <input name="date" id="date" class=" appearance-none border <?php echo $dateValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-3 bg-slate-800" type="date" placeholder="Date of bairt">
               <small class="text-red-400" id="dateError"> <?= $dateError ?> </small>
               <input name="address" id="address" class=" appearance-none border <?php echo $addressValid ?  'border-white' : 'border-red-600' ?> rounded w-full py-2 px-3 mt-3 bg-slate-800" type="text" placeholder="Address">
               <small class=" text-red-500 " id="addressError" > <?= $addressError ?> </small>
               <button class="bg-red-600 mt-3 my-4 p-3 w-full rounded-1xl" style="border-radius:5px;" type="submit"> CREATE ACCOUNT</button>
          </form>
     </div>
     <script src="views/formes/register.js"></script>
</div>
>>>>>>> f9c040e191821fa62b59d90237766e5d494f2a3c:views/formes/register_form.view.php
