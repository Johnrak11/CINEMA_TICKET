<div>
  <div class="flex justify-between text-white ml-[7%] mr-[7%]  pr-[5%] pl-[5%]">
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">NOW SHOWING</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">MOVIES</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">SHOWS COMING</a>
    <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full">CONCERT</a>
  </div>
  <div class="flex gap-12 flex-wrap mt-5 ml-[7%] mr-[7%]">
    <?php
    $listShows = showList();
    $number = 16;
    if (count($listShows) <= 16 ){
      $number = count($listShows);
    }
    for ($i = 0; $i < $number; $i++) :
      if (file_exists("views/images/" . $listShows[$i]['image'])) {
      ?>
          <div class="card"><img
              src="<?= "views/images/" . $listShows[$i]['image'] ?>" />
            <div class="info">
              <h1><?= $listShows[$i]['name'] ?></h1>
              <button>Get ticket</button>
            </div>
          </div>
    <?php 
      }
    endfor ?>
  </div>
</div>