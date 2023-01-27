<?php 
function getContantName($name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT name,id FROM shows WHERE name LIKE:name");
    $statement->execute([
        ":name" => "%$name%",
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}