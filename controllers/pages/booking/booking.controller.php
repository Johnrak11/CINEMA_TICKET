<?php
require_once ('models/booking.model.php');
$showBooking = [];
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $showBooking = showBooking($id);
    };
}
require_once('views/pages/booking/booking.view.php')
?>
