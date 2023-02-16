<?php
require_once ('models/edit_show.model.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo "hello";

    if (isset($_GET['name']) && isset($_GET['author']) && isset($_GET['screen']) && isset($_GET['category'])
    && isset($_GET['h']) && isset($_GET['m']) && isset($_GET['language'])  && isset($_GET['trailer'])  && isset($_GET['descripton'])  && isset($_GET['id']) ){
        
        $duration = $_GET["h"] . ":" . $_GET["m"] ;
        editShow($_GET['name'], $_GET['author'], $_GET['screen'], $_GET['category'], $duration, $_GET['language'], $_GET['trailer'], $_GET['descripton'],  $_GET['id']);
        
    
    }
    $duration = 'location:/edit-show?id=50' ;
    header($duration);
    





    

}
?>


