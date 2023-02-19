<?php 
require_once('../../../database/database.php');
require_once('../../../models/create_newShow.model.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['showId'])){
        $isOrder = 'exist';
        if (empty(isOrderShow($_GET['showId']))){
            $isOrder = 'none';
        }
        echo $isOrder;
    }
    else if(isset($_GET['detailId'])){
        $isTicket = 'exist';
        if (empty(isOrderTicket($_GET['detailId']))){
            $isTicket = 'none';
        }
        echo $isTicket;
    }
}
?>