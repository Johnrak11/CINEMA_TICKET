
<div class="flex gap-12 flex-wrap mt-5 ml-[7%] mr-[7%]">
  <?php
  $listShows = showList();
  $number = 16;
  if (count($listShows) <= 16) {
    $number = count($listShows);
  }
  for ($i = 0; $i < $number; $i++) :
    if (file_exists("views/images/" . $listShows[$i]['image'])) {
  ?>
      <div class="card"><img src="<?= "views/images/" . $listShows[$i]['image'] ?>" />
        <div class="info">
          <h1><?= $listShows[$i]['name'] ?></h1>
          <button>Get ticket</button>
        </div>
      </div>
  <?php
    }
  endfor ?>
</div>