<?php
function getProfile(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
function updateProfile(string $name, string $image, int $id): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET name = :Name, image= :image WHERE id = :id");
    $statement->execute([
        ":Name" => $name,
        ":image" => $image,
        ":id" => $id,
    ]);
    return $statement->rowCount() > 0;
}
function updateUserName(string $name, int $id): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET name = :Name WHERE id = :id");
    $statement->execute([
        ":Name" => $name,
        ":id" => $id,
    ]);
    return $statement->rowCount() > 0;
}

