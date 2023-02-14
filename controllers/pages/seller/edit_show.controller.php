<?php
require_once ('models/show_detail.model.php');
$showDetail = [];
$date = [];
$strikthrough = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $showDetail = showDetail($id); 
        $date = getTime($id,date("Y-m-d"));
        if (empty($date['date'])){
            $date = getTimeExpired($id);
            $strikthrough = "expired";
        }
    }
}
require_once("views/pages/seller/action/edit_show.view.php");
?>