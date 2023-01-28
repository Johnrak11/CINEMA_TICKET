<div class="flex gap-12 flex-wrap mt-5 ml-[7%] mr-[7%]">
  <?php
  $listShows = showList();
  $number = 16;
  if (count($listShows) <= 16) {
    $number = count($listShows);
  }
  for ($i = 0; $i < $number; $i++) :
    if (file_exists("views/images/shows_image/" . $listShows[$i]['image'])) {
  ?>
      <div class="card"><img src="<?= "views/images/shows_image/" . $listShows[$i]['image'] ?>" />
        <div class="info">
          <h1><?= $listShows[$i]['name'] ?></h1>
          <a id="more-detail-btn" href="<?= (isset($_COOKIE['email']) and isset($_COOKIE['id'])) ? "/detail?id=" . $listShows[$i]['id'] : "/login" ?>">More detail</a>
          <button>Get ticket</button>
        </div>
      </div>
  <?php
    }
  endfor ?>
</div>
<a href="/show" class="mt-[4%] bg-[#ff0000] py-3 px-3 font-bold uppercase text-white  rounded hover:bg-gray-200 hover:text-gray-800 w-[15%]" style="border-radius: 20px; display:flex; align-self:center; justify-content:center" id="show-more"><button class=" font-bold uppercase text-xs  ">Show more</button></a>