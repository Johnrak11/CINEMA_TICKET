<?php
require_once ('../../../../models/venue_action.model.php');
require_once ('../../../../database/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['name']) && isset($_GET['address'])){
        editVenue($_GET['name'],$_GET['address'],$_GET['id']);
        header('location:/admin');
    }
}