<?php 
function getContantName(string $name, string $dateNow): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(s.name),s.id FROM shows s 
                                        INNER JOIN show_details sd ON s.id = sd.show_id
                                        WHERE s.name LIKE :name AND s.is_confirm = 1 AND sd.date >= :dateNow;");
    $statement->execute([
        ":name" => "%$name%",
        ":dateNow" => $dateNow
    ]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
