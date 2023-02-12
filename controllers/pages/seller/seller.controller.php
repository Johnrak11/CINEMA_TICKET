<?php
require_once('models/seller.model.php');
require_once ('models/show_detail.model.php');
$seller = getSeller($_COOKIE['id']);
$allShow = getProduct($_COOKIE['id'],1);
$previewProducts = getProduct($_COOKIE['id'], 0);
require_once('views/pages/seller/seller.view.php');

?>