<?php

function createCustomer(int $userId) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO customers (user_id) VALUES (:id)");
    $statement->execute([
        ':id' => $userId,
    ]);
    return $statement->rowCount() > 0;
}
?>