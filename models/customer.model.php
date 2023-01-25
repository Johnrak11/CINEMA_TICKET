<?php

function createCustomer(int $userId) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into customers (user_id) values (:id)");
    $statement->execute([
        ':id' => $userId,
    ]);
    return $statement->rowCount() > 0;
}
