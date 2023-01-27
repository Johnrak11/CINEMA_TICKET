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
function getVenue( int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT v.name FROM shows s INNER JOIN venues v ON S.venue_id = v.id WHERE s.id = :id ;"); 
    $statement -> execute([
        ":id" => $id,
    ]);
    return $statement ->fetch();
}  
?>