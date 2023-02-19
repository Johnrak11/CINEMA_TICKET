<?php
function getShows()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM shows WHERE is_confirm = 0");
    $statement->execute();
    return $statement ->fetchAll();
}
function createNewShow(string $name, string $description, string $image, string $author, string $trailer, string $duration, string $category, string $screen, int $sellerId,string $language) : int
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (name,description,image,author,trailer,duration,category,screen,seller_id,language) 
                                        VALUES (:name,:description,:image,:author,:trailer,:duration,:category,:screen,:seller_id,:language)");
    $statement -> execute([
        ":name" => $name,
        ":description" => $description,
        ":image" => $image,
        ":author" => $author,
        ":trailer" => $trailer,
        ":duration" => $duration,
        ":category" => $category,
        ":screen" => $screen,
        ":seller_id" => $sellerId,
        ":language" => $language
    ]);
    $allShows = getShows();
    $lastShow = count($allShows)-1;
    return $allShows[$lastShow]['id'];
}
function getShowsName(string $name, int $sellerId, int $confirm)
{
    global $connection;
    $statement = $connection->prepare("SELECT s.name FROM shows s INNER JOIN 
                                        users u ON s.seller_id = u.id WHERE seller_id = :id 
                                        AND s.is_confirm = :confirm AND s.name like :nameShow;");
    $statement->execute([
        ":id" => $sellerId,
        ":confirm" => $confirm,
        ":nameShow" => "%$name",
    ]);
    return $statement ->rowCount() > 0;
}
function createShowDetails(int $venueId, string $dateShow, string $timeShow, string $hall, int $showId, string $price): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO show_details (venue_id,date,time,hall,show_id,price) 
                                        VALUES (:venue_id,:dateShow,:timeShow,:hall,:show_id,:price)");
    $statement -> execute([
       ":venue_id" => $venueId,
       ":dateShow" => $dateShow,
       ":timeShow" => $timeShow,
       ":hall" => $hall,
       ":show_id" => $showId,
       ":price" => $price
    ]);
    return $statement -> rowCount() >0;
}

function isOrderShow(int $sellerId)
{
    global $connection;
    $statement = $connection->prepare("SELECT t.* FROM ticket_orders t 
                                        INNER JOIN show_details sd ON t.show_detail_id = sd.id
                                        INNER JOIN shows s ON sd.show_id = s.id WHERE s.id = :id ;");
    $statement->execute([
        ":id" => $sellerId,
    ]);
    return $statement ->fetch();
}
function isOrderTicket(int $sellerId)
{
    global $connection;
    $statement = $connection->prepare("SELECT t.* FROM ticket_orders t 
                                        INNER JOIN show_details sd ON t.show_detail_id = sd.id
                                        WHERE sd.id = :id ;");
    $statement->execute([
        ":id" => $sellerId,
    ]);
    return $statement ->fetch();
}
?>