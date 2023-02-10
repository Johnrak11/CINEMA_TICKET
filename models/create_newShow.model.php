<?php
function createNewShow(string $name, string $description, string $image, string $author, string $trailer, string $duration, string $category, string $screen, int $sellerId) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO shows (name,description,image,author,trailer,duration,category,screen,seller_id) 
                                        VALUES (:name,:description,:image,:author,:trailer,:duration,:category,:screen,:seller_id)");
    $statement -> execute([
        ":name" => $name,
        ":description" => $description,
        ":image" => $image,
        ":author" => $author,
        ":trailer" => $trailer,
        ":duration" => $duration,
        ":category" => $category,
        ":screen" => $screen,
        ":seller_id" => $sellerId
    ]);
    return $statement ->rowCount() > 0;
}
function getPreviewShows(string $name, int $sellerId, int $confirm)
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
?>