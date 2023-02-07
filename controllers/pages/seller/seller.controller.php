<?php
require_once('models/seller.model.php');
require_once ('models/show_detail.model.php');
$allShow = getProduct($_COOKIE['id'],1);
require_once('views/pages/seller/seller.view.php');

?>