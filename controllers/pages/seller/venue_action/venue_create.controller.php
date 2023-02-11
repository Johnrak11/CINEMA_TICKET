<?php
require_once ('../../../../models/venue_action.model.php');
require_once ('../../../../database/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['name']) && isset($_GET['address'])){
        createVenue($_GET['name'],$_GET['address']);
        header('location:/sellerVenue');
    }
}
