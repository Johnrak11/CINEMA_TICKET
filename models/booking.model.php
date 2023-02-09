<?php
function showBooking(int $id): array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM shows WHERE id = :id');
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}