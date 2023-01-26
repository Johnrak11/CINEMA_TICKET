<?php
function showList() : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows");
    $statement->execute();
    $show_lists = $statement->fetchAll();
    return $show_lists;
}


