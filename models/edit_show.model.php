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
function editShow(string $title, string $auhtor, string $screen, string $duration, string $language, string $image,string $trailer, string $descripton, int $id, string $category):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE shows SET name = :name, author = :auther, screen = :screen,
                                        duration = :duration, image = :image, trailer = :trailer, description = :descripton,
                                        language = :language , category = :category
                                        WHERE id = :id");
    $statement->execute([
        ':name' => $title,
        ':auther' =>$auhtor,
        ':screen' =>$screen,
        ':duration' =>$duration,
        ':image' =>$image,
        ':trailer' =>$trailer,
        ':descripton' =>$descripton,
        ':language' =>$language,
        ':category' =>$category,
        ':id' => $id    
    ]);
    return $statement->rowCount() > 0;
}


// --------------------------edit venue and price------------------------
function editVenuePrice(string $hall, string $price, string $date, string $time, int $show_id, int $detail_id, int $venue_id ): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE show_details SET hall = :hall,  price= :price, date = :date, time = :time,show_id = :show_id,venue_id = :venue_id
    WHERE id = :id");
    $statement->execute([
        ':hall' => $hall,
        ':price' =>$price,
        ':date' =>$date,
        ':time' =>$time,
        ':id' => $detail_id,  
        ':show_id' => $show_id,  
        ':venue_id' => $venue_id   
    ]);
    return $statement->rowCount() > 0;

    
}
    

 