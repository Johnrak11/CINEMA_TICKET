<?php
require_once ('models/show_detail.model.php');
$showDetail = [];
$date = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $showDetail = showDetail($id); 
        $date = getTime($id,date("Y-m-d"));
    }
}
require_once('views/pages/detail/detail.view.php')
?>
