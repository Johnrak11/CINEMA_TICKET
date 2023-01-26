<?php
function showList() : array
{
    global $connection;
    $statement = $connection->prepare("select * from shows");
    $statement->execute();
    return $statement->fetchAll();
}
