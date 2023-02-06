<?php
function getRole(int $id)
{
    global $connection;
    $statement = $connection->prepare("SELECT role FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
?>