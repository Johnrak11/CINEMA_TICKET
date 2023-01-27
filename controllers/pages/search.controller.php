<?php 
require_once('../../database/database.php');
require_once('../../models/search.model.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['query'])){
        $contentName = getContantName($_GET['query']);
        $numberContent = 8;
        if (count($contentName) < $numberContent){
            $numberContent = count($contentName);
        }
        for ($i = 0; $i < $numberContent; $i++) {
            echo "<li><a href='/detail?id=" . $contentName[$i]['id']. "'>" . $contentName[$i]['name'] . "</a></li>";
        }
    }
}