<?php
function showList() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows");
    $statement->execute();
    $show_lists = $statement->fetchAll();
    return $show_lists;
}


