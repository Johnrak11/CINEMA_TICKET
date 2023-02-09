<?php
require_once ('models/venue_action.model.php');
require_once ('database/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        deleteVenue($_GET['id']);
        header('location:/sellerVenue');
    }
}