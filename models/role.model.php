<?php
function getRole(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT role FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
?>