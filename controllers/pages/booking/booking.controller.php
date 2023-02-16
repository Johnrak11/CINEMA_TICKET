<?php
require_once ('models/show_detail.model.php');
require_once ('models/edit_show.model.php');
$showDetail = [];
$showHall = [];
$date = [];
$strikthrough = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $showDetail = showDetail($id); 
        $showHall = showHAll($id); 
        $date = getTime($id,date("Y-m-d"));
        if (empty($date['date'])){
            $date = getTimeExpired($id);
            $strikthrough = "expired";
        }
    }
}
require_once('views/pages/booking/booking.view.php')
?>
