<?php
function getVenues(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(v.name) FROM venues v 
                                        INNER JOIN show_details sd ON v.id = sd.venue_id 
                                        INNER JOIN shows s  ON s.id = sd.show_id WHERE s.id = :id");
    $statement->execute([":id" => $id]);
    return $statement->fetchAll();
}
function getVenuesHall(int $id, string $name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT sd.* FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
    ]);
    return $statement->fetchAll();
}

// ---------------getVenuesHall on booking page--------

function getVenuesHallSpecific(int $id, string $name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(sd.hall) FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
    ]);
    return $statement->fetchAll();
}

// ----------------date--on page booking---
function getVenuesDate(int $id, string $name, string $hall, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(sd.date) FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name 
                                        AND sd.hall = :hall AND sd.date >= :date ORDER BY date ASC;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
        ":hall" => $hall,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
function getVenuesTime(int $id, string $name, string $hall, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT sd.* FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name 
                                        AND sd.hall = :hall AND sd.date = :date ORDER BY time ASC;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
        ":hall" => $hall,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
