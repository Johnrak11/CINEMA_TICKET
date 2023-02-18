<?php
function showList(string $dateNow) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT s.* FROM shows s 
                                        INNER JOIN show_details sd ON s.id = sd.show_id
                                        WHERE s.is_confirm = 1 AND sd.date >= :dateNow  ORDER BY id DESC");
    $statement->execute([':dateNow' => $dateNow]);
    $show_lists = $statement->fetchAll();
    return $show_lists;
}
function showMore(int $row, string $dateNow) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT s.* FROM shows s 
                                        INNER JOIN show_details sd ON s.id = sd.show_id
                                        WHERE s.is_confirm = 1 AND sd.date >= :dateNow  ORDER BY id DESC LIMIT $row");;
    $statement->execute([':dateNow' => $dateNow]);
    $show_lists = $statement->fetchAll();
    return $show_lists;
}

function getNameShow( int $sellerId, string $name):array
{
    global $connection;
    $statement = $connection->prepare("SELECT s.* FROM shows s INNER JOIN users u ON u.id = s.seller_id WHERE u.id = :id AND is_confirm = 0 AND s.name = :name ;");
    $statement->execute([
        ":id" => $sellerId,
        ":name" => $name
    ]);
    return $statement->fetchAll();
}
function getShowByName(string $name) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows where is_confirm = 1 AND name = :name ;");
    $statement->execute([':name' => $name]);
    return  $statement->fetchAll();
}
