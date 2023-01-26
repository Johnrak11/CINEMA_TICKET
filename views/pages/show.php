<?php
require_once('views/partials/head.php');
?>
<style>
.container-card {
  position: relative;
  width: 22%;
  /* background: #000; */
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 80%;
  left: 25%;
  /* transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%); */
  text-align: center;
}

.container-card:hover .image {
  opacity: 0.3;
}

.container-card:hover .middle {
  opacity: 1;
}

.text {
  background-color: red;
}
button{
    width: 100%;
    padding-left:30px;
    padding-right:30px;
    padding-top:8px;
    padding-bottom:8px;
    border-radius:10px;
    color:white;
}
</style>
<div>
    <div class="flex justify-between text-white ml-[7%] mr-[7%]  pr-[5%] pl-[5%]">
        <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">NOW SHOWING</a>
        <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">MOVIES</a>
        <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">SHOWS COMING</a>
        <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">CONCERT</a>
    </div>
    
</div>
  

}