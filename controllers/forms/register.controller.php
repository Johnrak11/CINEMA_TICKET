<?php
require_once('models/validate.model.php');
// ----------------message error--------------
$emailError = "";
$passwordError = "";
$usernameError = "";
$addressError = "";
$dateError = "";
// ----------------message correct--------------
$email = "";
$password = "";
$username = "";
$address = "";
$date = "";
// --------------------if correct conditions----------------------
$usernameValid = false;
$emailValid = false;
$passwordValid = false;
$dateValid = false;
$addressValid = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // --------------------email-------------------
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $emailError = 'email must be input';
        } elseif (validateEmail($_POST['email'])) {
            $emailValid = true;
        } else {
            $emailError = "email must contain '@'";
        }
    }
    // --------------------username-------------------
    if (isset($_POST['username'])) {
        if (empty($_POST['username'])) {
            $usernameError = 'username must be a input';
        } elseif (ctype_alnum($_POST['username'])) {
            if (validateUsername($_POST['username'])) {
                $usernameValid = true;
            } else {
                $usernameError = 'first letter must be uppercase';
            }
        } else {
            $usernameError = 'username must be a string';
        }
    }
    // --------------------------------address ---------------------------
    if (isset($_POST['address'])) {
        if (empty($_POST['address'])) {
            $addressError = 'address must be input';
        } elseif (validateAddress($_POST['address'])) {
            $addressValid = true;
        } else {
            $addressError = 'address must be less than 100 caracters long';
        }
    }
    // ----------------------------passsword-------------------------
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $passwordError = 'password must be input';
        } elseif (validatePassword($_POST['password'])) {
            $passwordError = "password must be at least 8 characters in length and must contain at least one number";
        } else {
            $passwordValid = true;
        }
    }
    if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $dateError = "Date must be input";
        } elseif (validateDate($_POST['date']) && $_POST['date'] <= date("Y-m-d")) {
            $dateValid = true;
        } else {
            $dateError = "date incorrect";
        }
    }
}
if ($emailValid && $passwordValid && $usernameValid && $dateValid && $addressValid) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $date = htmlspecialchars($_POST['date']);
    $password = htmlspecialchars($_POST['password']);
}
echo $emailValid . $passwordValid . $usernameValid . $dateValid . $addressValid;

?>
