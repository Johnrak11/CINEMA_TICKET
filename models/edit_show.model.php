<?php
function getVenues(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(v.name) FROM venues v 
                                        INNER JOIN show_details sd ON v.id = sd.venue_id 
                                        INNER JOIN shows s  ON s.id = sd.show_id WHERE s.id = :id");
    $statement->execute([":id" => $id]);
    return $statement->fetchAll();
}
function getVenuesHall(int $id, string $name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT sd.* FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
    ]);
    return $statement->fetchAll();
}

// ---------------getVenuesHall on booking page--------

function getVenuesHallSpecific(int $id, string $name): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(sd.hall) FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
    ]);
    return $statement->fetchAll();
}

// ----------------date--on page booking---
function getVenuesDate(int $id, string $name, string $hall, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT DISTINCT(sd.date) FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name 
                                        AND sd.hall = :hall AND sd.date >= :date ORDER BY date ASC;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
        ":hall" => $hall,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
function getVenuesTime(int $id, string $name, string $hall, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT sd.* FROM show_details sd 
                                        INNER JOIN shows s ON sd.show_id = s.id 
                                        INNER JOIN venues v ON v.id = sd.venue_id 
                                        WHERE s.id = :id AND v.name = :name 
                                        AND sd.hall = :hall AND sd.date = :date ORDER BY time ASC;");
    $statement->execute([
        ":id" => $id,
        ":name" => $name,
        ":hall" => $hall,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
function getShowDetail(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM show_details WHERE id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}
function getVenueName(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT v.name FROM venues v 
                                        INNER JOIN show_details sd ON v.id = sd.venue_id WHERE sd.id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}
function getSeat(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT td.seat as 'name' FROM ticket_orders td
                                        INNER JOIN show_details sd ON td.show_detail_id = sd.id 
                                        WHERE sd.id = :id ;");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetchAll();
}
function uploadPayment(int $user_id, string $name, int $cvv, int $number, string $type, string $date_exp)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO credit_card (user_id,name,cvv,number,type,date_exp) 
                                        VALUES (:user_id,:name,:cvv,:number,:type,:date_exp);");
    $statement->execute([
        ":user_id" => $user_id,
        ":name" => $name,
        ":cvv" => $cvv,
        ":number" => $number,
        ":type" => $type,
        ":date_exp" => $date_exp
    ]);
    return $statement -> rowCount() >0;
}
function ticketOrder(int $user_id, int $detailId, string $date, string $seat)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO ticket_orders (user_id,show_detail_id,date,seat) 
                                        VALUES (:user_id,:detailId,:date,:seat);");
    $statement->execute([
        ":user_id" => $user_id,
        ":detailId" => $detailId,
        ":date" => $date,
        ":seat" => $seat
    ]);
    return $statement -> rowCount() >0;
}
function creditCard(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT cd.* FROM credit_card cd
                                        INNER JOIN users u ON cd.user_id  = u.id 
                                        WHERE u.id = :id ;");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetchAll();
}