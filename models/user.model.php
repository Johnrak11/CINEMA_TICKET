<?php
function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}
function createUser(string $username, string $email, string $password, string $date, string $address) : int
{
    global $connection;
    $statement = $connection->prepare("insert into users (name, email, password, date_of_birth, address) values (:username, :email, :password, :date, :address)");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':date' => $date,
        ':address' => $address
    ]);
    $allUser = getUsers();
    $lastNumber = count($allUser)-1;
    return $allUser[$lastNumber]['id'];
}

function getUser(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

?>