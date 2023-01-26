<style>
  .container-card {
    position: relative;
    width: 21.6%;
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

  button {
    width: 100%;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 8px;
    padding-bottom: 8px;
    border-radius: 10px;
    color: white;
  }
</style>
<div>
  <div class="flex justify-between text-white ml-[7%] mr-[7%]  pr-[5%] pl-[5%]">
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">NOW SHOWING</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">MOVIES</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">SHOWS COMING</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">CONCERT</a>
  </div>
  <div class="flex gap-12 flex-wrap mt-5 ml-[7%] mr-[7%]">
    <?php
    for ($i = 0; $i < 10; $i++) :
    ?>
        <div class="container-card cursor-pointer p-2">
          <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/arctic-dogs-1564417919.jpg?crop=0.9876543209876543xw:1xh;center,top&resize=480:*" alt="Avatar" class="image rounded-lg" style="width:100%">
          <div class="middle">
            <!-- <h1 class="text-3xl text-white">HELLO THE BEST TEAM</h1> -->
            <button class="text">Get ticket</button>
          </div>
        </div>
    <?php endfor ?>
  </div>
</div>