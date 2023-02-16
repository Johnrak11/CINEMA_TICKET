<?php
require_once ('models/show_detail.model.php');
require_once ('models/edit_show.model.php');
$movieShow  = [];
$detail = [];
$venueName = [];
$seat = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $movieShow  = showDetail($id); 
    }
    if (isset($_GET['detailId'])){
        $detail = getShowDetail($_GET['detailId']); 
        $venueName = getVenueName($_GET['detailId']);
        $seat = getSeat($_GET['detailId']);
    }
}
require_once('views/pages/booking/seat/seat.view.php')
?>