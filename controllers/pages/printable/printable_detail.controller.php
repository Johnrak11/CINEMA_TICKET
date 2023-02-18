<?php

require_once('models/show_detail.model.php');
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_COOKIE['id'])) {
        $activeTicket = getActiveTicketById($_GET['id'], date("Y-m-d"));
        date_default_timezone_set("Asia/Phnom_Penh");
        $time = $activeTicket['time'];
        $isDateNow = $activeTicket['date'] . ' ' . $activeTicket['time'];
        $formatTime = date('h:i A', strtotime($time));
    }
}
require_once('views/pages/printable/printable.view.php');
