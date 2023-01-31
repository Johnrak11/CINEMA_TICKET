<?php
require_once ('models/show_detail.model.php');
$showDetail = [];
$venue = [];
$date = [];
$category= [];
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $showDetail = showDetail($id); 
        $venue = getVenue($id);
        $date = getTime($id,date("Y-m-d"));
        $category = getCategory($id);
    }
}
require_once('views/pages/detail.view.php')
?>
