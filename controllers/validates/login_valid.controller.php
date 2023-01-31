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
            $passwordError = "Password must be at least 8 digits and must contain at least one number and sign";
        } else {
            $passwordValid = true;
        }
    }
    if ($emailValid && $passwordValid) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $users = getUsers();
        $emailExist = false;
        $passwordExist = false;
        foreach ($users as $user) {
            if (strcmp(trim($user['email'], " "), trim($_POST['email'], " ")) === 0 ) {
                $emailExist = true;
            }
            else{
                $emailError = 'Email does not exist';
            }
            if (password_verify($password,$user['password']) && $emailExist) {
                $passwordExist = true;
                setcookie('email',$user['email'] ,time() + 86400*30);
                setcookie('id',$user['id'] ,time() + 86400*30);
            }else{
                $passwordError = 'Incorrect password';
            }
        }
        if ($emailExist && $passwordExist) {
            header('Location: /' );
        }
    }
};