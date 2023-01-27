<?php
require_once ('models/show_detail.model.php');
$showDetail = [];
$venue = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $showDetail = showDetail($id); 
        $venue = getVenue($id);
    }
}
require_once('views/pages/detail.view.php')
?>
