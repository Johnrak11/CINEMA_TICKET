<?php
function showList(string $dateNow) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT s.* FROM shows s 
                                        INNER JOIN show_details sd ON s.id = sd.show_id
                                        WHERE s.is_confirm = 1 AND sd.date >= :dateNow  ORDER BY id DESC");
    $statement->execute([':dateNow' => $dateNow]);
    $show_lists = $statement->fetchAll();
    return $show_lists;
}
function showMore(int $row, string $dateNow) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT s.* FROM shows s 
                                        INNER JOIN show_details sd ON s.id = sd.show_id
                                        WHERE s.is_confirm = 1 AND sd.date >= :dateNow  ORDER BY id DESC LIMIT $row");;
    $statement->execute([':dateNow' => $dateNow]);
    $show_lists = $statement->fetchAll();
    return $show_lists;
}
