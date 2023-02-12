<?php
function showDetail(int $id): array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM shows WHERE id = :id');
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}

function getTime(int $id, string $dateNow): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  dt.date, MIN(dt.date) as 'date' FROM show_details dt 
                                        INNER JOIN shows s ON dt.show_id = s.id 
                                        WHERE dt.show_id = :id AND dt.date >= :dateNow;");
    $statement->execute([
        ":id" => $id,
        ":dateNow" => $dateNow,
    ]);
    return $statement->fetch();
}

function getTimeExpired(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  dt.date, MAX(dt.date) as 'date' FROM show_details dt 
                                        INNER JOIN shows s ON dt.show_id = s.id 
                                        WHERE dt.show_id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}

// ------------------------------venue-------------------
function getVenue(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM venues");
    $statement->execute([]);
    return $statement->fetchAll();
}

