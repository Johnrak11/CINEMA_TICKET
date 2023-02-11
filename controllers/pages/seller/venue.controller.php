<?php
require_once('models/seller.model.php');
require_once ('models/show_detail.model.php');
$seller = getSeller($_COOKIE['id']);
require_once('views/pages/seller/venue.view.php');

?>