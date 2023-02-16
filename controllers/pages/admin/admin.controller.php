<?php
require_once('models/seller.model.php');
require_once ('models/show_detail.model.php');
require_once ('models/user.model.php');
$seller = getSeller($_COOKIE['id']);
require_once('views/pages/admin/admin.view.php');

?>