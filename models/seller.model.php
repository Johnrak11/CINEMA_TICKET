<?php
function getProduct(int $id, int $active): array
{
    global $connection;
    $statement = $connection->prepare("SELECT s.* FROM shows s 
                                        INNER JOIN users u  ON s.seller_id = u.id
                                        WHERE u.id = :id and s.is_confirm = :active");
    $statement->execute([
        ":id" => $id,
        ":active" => $active
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function getPublichProduct(int $active): array
{
    global $connection;
    $statement = $connection->prepare("SELECT s.* FROM shows s WHERE s.is_confirm = :active");
    $statement->execute([
        ":active" => $active
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function deleteShow(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM shows WHERE id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->rowCount() > 0;
}
function deleteTicket(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM show_details WHERE id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->rowCount() > 0;
}
function publicShow(int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE shows SET is_confirm = 1 WHERE id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->rowCount() > 0;
}
function getSeller(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

