<?php
function showDetail( int $id) :array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM shows WHERE id = :id'); 
    $statement -> execute([
        ":id" => $id,
    ]);
    return $statement ->fetch();
}  

function getTime( int $id, string $dateNow): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  d.date, MIN(d.date) as 'date' FROM show_details d 
                                        INNER JOIN  venues v ON d.venue_id = v.id
                                        INNER JOIN shows s ON v.show_id = s.id 
                                        WHERE v.show_id = :id AND d.date >= :dateNow ;"); 
    $statement -> execute([
        ":id" => $id,
        ":dateNow" => $dateNow,
    ]);
    return $statement ->fetch();
}
