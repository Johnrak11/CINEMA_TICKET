<?php
require_once('models/seller.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    // --------------------detele previews-----------------
    if (isset($_GET['delete'])){
        deleteShow($_GET['delete']);
        header('location:/seller');
    }
    if (isset($_GET['public'])){
        publicShow($_GET['public']);
        header('location:/seller');
    }
}
?>