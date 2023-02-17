<?php
require_once ('../../../../database/database.php');
// require_once ('models/show_detail.model.php');
require_once ('../../../../models/edit_show.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['card-name']) && isset($_POST['card-type']) && isset($_POST['card-number']) && isset($_POST['card-date']) && isset($_POST['card-cvv'])){
        $CardName = 'American Express Card';
        if ($_POST['card-type'] === '1'){
            $CardName = 'Master Card';
        }
         else if ($_POST['card-type'] === '2'){
            $CardName = 'Visa Card';
        }
        uploadPayment($_COOKIE['id'], $_POST['card-name'], $_POST['card-cvv'], $_POST['card-number'],$CardName,$_POST['card-date']);
    }
    if(isset($_POST['seat']) && $_POST['detailId']){
        $seatList = explode(' ', $_POST['seat']);
        for ($i = 0; $i < count($seatList)-1; $i++){
            $seatName = preg_replace('/\s+/', '',($seatList[$i]));
            ticketOrder($_COOKIE['id'],$_POST['detailId'],date("Y-m-d"),$seatName);
        }
    }
    header('location:/select-seat?id='.$_POST['showId'].'&detailId='.$_POST['detailId'].'&payment=1');
}
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['seat']) && $_GET['detailId']){
        $seatList = explode(' ', $_GET['seat']);
        for ($i = 0; $i < count($seatList)-1; $i++){
            $seatName = preg_replace('/\s+/', '',($seatList[$i]));
            ticketOrder($_COOKIE['id'],$_GET['detailId'],date("Y-m-d"),$seatName);
        }
    }
    header('location:/select-seat?id='.$_GET['showId'].'&detailId='.$_GET['detailId'].'&payment=1');
}

