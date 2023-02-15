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
    $allUser = getUsers();
    $lastUser = count($allUser)-1;
    return $allUser[$lastUser]['id'];
}

function getUser(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
function getUsersLimit(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT name,email,role,id FROM users ORDER BY name ASC LIMIT 20");
    $statement->execute();
    return $statement->fetchAll();
}
function updateUserRole(string $role, int $id): array
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET role = :role WHERE id = :id");
    $statement->execute([
        ":role" => $role,
        ":id" => $id
    ]);
    return $statement->fetchAll();
}
function deleteUser(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM users WHERE id = :id");
    $statement->execute([
        ":id" => $id
    ]);
    return $statement -> rowCount() >0;
}

?>