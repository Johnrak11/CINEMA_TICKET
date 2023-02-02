<?php
function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users");
    $statement->execute();
    return $statement->fetchAll();
}
function createUser(string $username, string $email, string $password, string $date, string $address) : int
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (name, email, password, date_of_birth, address) VALUES (:username, :email, :password, :date, :address)");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':date' => $date,
        ':address' => $address
    ]);
    return $statement->rowCount() > 0;
}

function getUser(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
?>