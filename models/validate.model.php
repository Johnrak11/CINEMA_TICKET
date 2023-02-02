<?php
function validateAddress(string $message): bool
{
    return (strlen(trim($message, "")) <= 100);
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
    return strlen($password) <= 8 || !$number || !$lowercase || !$specialChars;
}
function validateDate(string $date, $format = 'Y-m-d'): bool
{
    $d = DateTime::createFromFormat($format, $date);
    echo $d;
    return $d && $d->format($format) === $date;
}
?>