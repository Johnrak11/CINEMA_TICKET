<?php
require_once('views/partials/head.php');
require_once('views/partials/nav.php');
require_once('views/partials/banner.php');
?>
<div class="flex justify-between text-white ml-[7%] mr-[7%]  pr-[5%]">
  <a href="" class="hover:bg-red-600 px-5 py-2 rounded-full text-2xl">NOW SHOWING</a>
</div>
<?php
require_once('models/show_list.model.php');
require_once('views/partials/show_home.php');    
require_once('views/partials/footer.php');

?>