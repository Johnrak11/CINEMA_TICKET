<?php 
// require 'models/model.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(isset($_GET['query'])){
        $contentName = getContantName($_GET['query']);
        $numberContent = 7;
        if (count($contentName) < $numberContent){
            $numberContent = count($contentName);
        }
        for ($i = 0; $i < $numberContent; $i++) {
            echo "<li><a href=". $contentName[$i]['id']. ">". $contentName[$i]['name'] . "</a></li>";
        }
    }
}