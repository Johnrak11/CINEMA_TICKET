<?php 
require_once('../../../database/database.php');
require_once('../../../models/create_newShow.model.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['showName'])){
        $isPublic = 'exist';
        if (!getShowsName($_GET['showName'],$_COOKIE['id'],1)){
            $isPublic = 'none';
        }
        echo $isPublic;
    }
}
?>