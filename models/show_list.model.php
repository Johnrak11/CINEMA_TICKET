<?php
function show_list() : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows");
    $statement->execute();
    $show_lists = $statement->fetchAll();
    return $show_lists;
}


