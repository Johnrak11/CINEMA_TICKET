<?php
    function getProfile(int $id) : array
    {
        global $connection;
        $statement = $connection->prepare("SELECT * FROM users WHERE id = :id");
        $statement->execute([':id' => $id]);
        return $statement->fetch();
    }
?>