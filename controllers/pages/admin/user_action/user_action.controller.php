<?php
require_once ('models/user.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if (isset($_GET['role']) && $_GET['id']){
        updateUserRole($_GET['role'],$_GET['id']);
        header('location:/admin?change-success=1');
    }
    if (isset($_GET['deleteId'])){
        deleteUser($_GET['deleteId']);
    }
}
?>