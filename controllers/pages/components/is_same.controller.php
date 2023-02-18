<?php
require_once('../../../database/database.php');
require_once('../../../models/show_list.model.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['name'])) {
        $isName = 'exist';
        if (empty(getShowByName($_GET['name']))) {
            if (empty(getNameShow($_COOKIE['id'],$_GET['name']))) {
                $isName = 'none';
            }  
        } else {
            $isName = 'exist';
        }
        echo $isName;
    }
}
?>