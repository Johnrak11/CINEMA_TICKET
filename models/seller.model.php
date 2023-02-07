<?php 
function getProduct(int $id,int $active): array
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
