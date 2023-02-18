<?php
function showDetail(int $id): array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM shows WHERE id = :id');
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}
function showHall(int $id): array
{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM show_details WHERE show_id = :id');
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}

function getTime(int $id, string $dateNow): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  dt.date, MIN(dt.date) as 'date' FROM show_details dt 
                                        INNER JOIN shows s ON dt.show_id = s.id 
                                        WHERE dt.show_id = :id AND dt.date >= :dateNow;");
    $statement->execute([
        ":id" => $id,
        ":dateNow" => $dateNow,
    ]);
    return $statement->fetch();
}

function getTimeExpired(int $id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT  dt.date, MAX(dt.date) as 'date' FROM show_details dt 
                                        INNER JOIN shows s ON dt.show_id = s.id 
                                        WHERE dt.show_id = :id");
    $statement->execute([
        ":id" => $id,
    ]);
    return $statement->fetch();
}

// ------------------------------venue-------------------
function getVenue(): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM venues");
    $statement->execute([]);
    return $statement->fetchAll();
}
function getActiveTicket(int $id, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT td.id,s.name,v.name as 'venue',sd.hall,sd.date,sd.time,td.seat,s.image
                                        FROM ticket_orders td 
                                        INNER JOIN users u ON u.id = td.user_id 
                                        INNER JOIN show_details sd ON sd.id = td.show_detail_id 
                                        INNER JOIN shows s ON s.id = sd.show_id 
                                        INNER JOIN venues v ON v.id = sd.venue_id  
                                        WHERE u.id = :id AND sd.date >= :date");
    $statement->execute([
        ":id" => $id,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
function getdisabledTicket(int $id, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT td.id,s.name,v.name as 'venue',sd.hall,sd.date,sd.time,td.seat,sd.price,s.screen,s.image
                                        FROM ticket_orders td 
                                        INNER JOIN users u ON u.id = td.user_id 
                                        INNER JOIN show_details sd ON sd.id = td.show_detail_id 
                                        INNER JOIN shows s ON s.id = sd.show_id 
                                        INNER JOIN venues v ON v.id = sd.venue_id  
                                        WHERE u.id = :id AND sd.date < :date");
    $statement->execute([
        ":id" => $id,
        ":date" => $date
    ]);
    return $statement->fetchAll();
}
function getActiveTicketById(int $td_id, string $date): array
{
    global $connection;
    $statement = $connection->prepare("SELECT td.id,s.name,v.name as 'venue',sd.hall,sd.date,sd.time,td.seat,sd.price,s.screen
                                        FROM ticket_orders td 
                                        INNER JOIN show_details sd ON sd.id = td.show_detail_id 
                                        INNER JOIN shows s ON s.id = sd.show_id 
                                        INNER JOIN venues v ON v.id = sd.venue_id  
                                        WHERE td.id = :td_id");
    $statement->execute([
        ":td_id" => $td_id
    ]);
    return $statement->fetch();
}
