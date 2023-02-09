<?php
function creatNewShow(string $name, string $description, string $image, string $author, string $trailer, string $duration, string $category) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO show (name,description,image,author,trailer,duration,category) VALUES (':name,:description,:image,:author,:trailer,:duration,:category')");
    $statement -> execute([
        ":name" => $name,
        ":description" => $description,
        ":image" => $image,
        ":author" => $author,
        ":trailer" => $trailer,
        ":duration" => $duration,
        ":category" => $category,
    ]);
    return $statement ->rowCount() > 0;
}
?>