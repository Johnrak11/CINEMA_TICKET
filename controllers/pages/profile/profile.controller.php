<?php
require_once('models/profile.model.php');
// require_once('database/database.php');
$user = getProfile($_COOKIE['id']);
require_once('views/pages/profile/profile.view.php')
?>