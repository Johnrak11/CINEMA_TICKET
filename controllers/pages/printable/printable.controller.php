<?php
require_once ('models/show_detail.model.php');
if (isset($_COOKIE['id'])){
    $activeTicket = getActiveTicket($_COOKIE['id'], date("Y-m-d"));
}
require_once('views/pages/printable/order_show.view.php')
?>