<?php
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
$usernameValid = true;
$emailValid = true;
$passwordValid = true;
$dateValid = true;
$addressValid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // --------------------if correct conditions----------------------
    $usernameValid = false;
    $emailValid = false;
    $passwordValid = false;
    $dateValid = false;
    $addressValid = false;
    // --------------------email-------------------

    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $emailError = 'Email must be input';
        } elseif (validateEmail($_POST['email'])) {
            $emailValid = true;
        } else {
            $emailError = "Email must contain '@'";
        }
    }
    // --------------------username-------------------
    if (isset($_POST['username'])) {
        if (empty($_POST['username'])) {
            $usernameError = 'Username must be a input';
        } elseif (ctype_alnum($_POST['username'])) {
            if (validateUsername($_POST['username'])) {
                $usernameValid = true;
            } else {
                $usernameError = 'First letter must be uppercase';
            }
        } else {
            $usernameError = 'Username must be a string';
        }
    }
    // --------------------------------address ---------------------------
    if (isset($_POST['address'])) {
        if (empty($_POST['address'])) {
            $addressError = 'Address must be input';
        } elseif (validateAddress($_POST['address'])) {
            $addressValid = true;
        } else {
            $addressError = 'Address must be more than 3 letter and less than 100 caracters long ';
        }
    }
    // ----------------------------passsword-------------------------
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $passwordError = 'Password must be input';
        } elseif (validatePassword($_POST['password'])) {
            $passwordError = "Password must be at least 6 digits and must contain at least one number and sign";
        } else {
            $passwordValid = true;
        }
    }
    // ----------------------------date-------------------------
    if (isset($_POST['days']) && isset($_POST['months']) && isset($_POST['years'])) {
        $dateSelect = $_POST['years'].'-'. $_POST['months'].'-'. $_POST['days'];
        if (validateDate($dateSelect) && $dateSelect <= date("Y-m-d")) {
            $dateValid = true;
            $date = $dateSelect;
        }
    }
    else{
        $dateError = "Date must be input";
    }
    if ($emailValid && $passwordValid && $usernameValid && $addressValid) {

        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $users = getUsers();
        $emailExist = true;
        foreach ($users as $user) {
            if (strcmp(trim($user['email'], " "), trim($_POST['email'], " ")) === 0) {
                $emailError = "Email already exists";
                $emailExist = false;
            }
        }
        if ($emailExist) {
            $newUser = createUser($username, $email, $password, $date, $address);
            // Login time is stored in a session variable 
            setcookie('email',$email ,time() + 86400*30);
            setcookie('id',$newUser ,time() + 86400*30); 
            header('location: /');
            
        };
    };
};