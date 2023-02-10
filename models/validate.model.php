<?php
function validateAddress(string $message): bool
{
    return (strlen(trim($message, "")) <= 100 && (strlen(trim($message, "")) >=3) );
}

function validateUsername(string $username): bool
{
    // function to check if username is correct (must be alphanumeric => Use the function 'ctype_alnum()')
    return ($username[0] === strtoupper($username[0]));
}

function validateEmail(string $email): bool
{
    // function to check if email is correct (must contain '@')
    return (filter_var($email, FILTER_VALIDATE_EMAIL));
}
function validatePassword(string $password): bool
{
    $number = preg_match('@[0-9]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    return strlen($password) < 5 || !$number || !$lowercase || !$specialChars;
}

function validateDate(string $date, $format = 'Y-m-d'): bool
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
function validateHour(string $hour, $format = 'h:i:sa'): bool
{
    $d = DateTime::createFromFormat($format, $hour);
    return $d && $d->format($format) === $hour;
}


// --------------------create shows--------------------------


function titleshow(string $title):bool
{
    return (strlen(trim($title, "")) <= 40 && (strlen(trim($title, "")) >=2) );
   
}

function authorOfShow(string $author):bool
{
    $specialChars = preg_match('@[^\w]@', $author);
    $number = preg_match('@[0-9]@', $author);
    return (!$specialChars && !$number);
}

function durationShow(int $h,int $m):bool
{
    return (($h >=0 && $h <= 10) && ($m >= 0 && $m <= 59));
}

function randomNameImage()
{
    $text = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "Y", "W", "X", "Y", "Z"];
    $text_rand = $text[rand(0, count($text))];
    $num_rand = rand(0, 10000000);
    return $text_rand . "$num_rand";
}

function describtionShow(string $description):bool
{
    return (strlen(trim($description, "")) <=250  && (strlen(trim($description, "")) >=3) );
   
}

function traillerShow($trailler):bool
{
    return (!filter_var($trailler, FILTER_VALIDATE_URL) === false);
   
}
