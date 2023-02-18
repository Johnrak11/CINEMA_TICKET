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
// --------------------------edit show------------------------
function editShow(string $title, string $auhtor, string $screen, string $duration, string $language, string $imager, $trailer, string $descripton, int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE shows SET title = :name, author = :auther, screen = :screen,
    duration = :duration, imager = :imager, trailer = :trailer, descripton = :descripton  WHERE id = :id");
    $statement->execute([
        ':name' => $title,
        ':venueAddress' =>$auhtor,
        ':venueAddress' =>$screen,
        ':venueAddress' =>$duration,
        ':venueAddress' =>$language,
        ':venueAddress' =>$imager,
        ':venueAddress' =>$trailer,
        ':id' => $id
    ]);
    return $statement->rowCount() > 0;
}

