<?php 
function getProduct($id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT s.* FROM shows s 
                                        INNER JOIN users u  ON s.seller_id = u.id
                                        WHERE u.id = :id");
    $statement->execute([
          ":id" => $id,
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>