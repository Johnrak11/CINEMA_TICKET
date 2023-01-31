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
};
function getCategory( int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT c.name FROM categories c INNER JOIN shows s ON s.category_id = c.id WHERE s.id = :id ;"); 
    $statement -> execute([
        ":id" => $id,
    ]);
    return $statement ->fetch();
};
function getTime( int $id, string $dateNow): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  t.time, MAX(t.date) as 'date' FROM show_times t INNER JOIN shows s ON t.show_id = s.id WHERE s.id = :id AND t.date >= :dateNow ;"); 
    $statement -> execute([
        ":id" => $id,
        ":dateNow" => $dateNow,
    ]);
    return $statement ->fetch();
}  
?>