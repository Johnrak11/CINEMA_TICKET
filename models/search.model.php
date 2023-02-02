<?php 
function getContantName($name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT name,id FROM shows WHERE name LIKE :name AND is_confirm = 1");
    $statement->execute([
        ":name" => "%$name%",
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>