<?php
function createVenue(string $name, string $address):bool
{
    global $connection;
    echo $name;
    echo $address;
    $statement = $connection->prepare("INSERT INTO venues (name, address) VALUES (:venueName, :venueAddress)");
    $statement->execute([
        ':venueName' => $name,
        ':venueAddress' => $address

    ]);
    return $statement->rowCount() > 0;
}
function editVenue(string $name, string $address, int $id):bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE venues SET name = :venueName, address = :venueAddress WHERE id = :id");
    $statement->execute([
        ':venueName' => $name,
        ':venueAddress' => $address,
        ':id' => $id
    ]);
    return $statement->rowCount() > 0;
}
function deleteVenue(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM venues WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}
?>