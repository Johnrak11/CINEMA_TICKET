<?php
$emailError = "";
$passwordError = "";
// ----------------message correct--------------
$email = "";
$password = "";
// --------------------if correct conditions----------------------
$emailValid = true;
$passwordValid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // --------------------if correct conditions----------------------
    $emailValid = false;
    $passwordValid = false;
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
    if ($emailValid && $passwordValid) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        // code here
        $users = getUsers();
        $emailExist = false;
        $passwordExist = false;
        foreach ($users as $user) {
            if (strcmp(trim($user['email'], " "), trim($_POST['email'], " ")) === 0 ) {
                $emailExist = true;
            }
            else{
                $emailError = 'Incorrect email address';
            }
            if (password_verify($password,$user['password']) && $emailExist) {
                $passwordExist = true;
            }else{
                $passwordError = 'Incorrect password';
            }
        }
        if ($emailExist && $passwordExist) {
            header('Location: /' );
        }
    }
};