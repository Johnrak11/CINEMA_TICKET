<?php
function showList() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows  ORDER BY id DESC");
    $statement->execute();
    $show_lists = $statement->fetchAll();
    return $show_lists;
}
function showMore($row) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows  ORDER BY id DESC LIMIT $row");
    $statement->execute();
    $show_lists = $statement->fetchAll();
    return $show_lists;
}
?>


