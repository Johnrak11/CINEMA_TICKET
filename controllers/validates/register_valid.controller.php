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
            $addressError = 'Address must be less than 100 caracters long';
        }
    }
    // ----------------------------passsword-------------------------
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $passwordError = 'Password must be input';
        } elseif (validatePassword($_POST['password'])) {
            $passwordError = "Password must be at least 8 digits and must contain at least one number and sign";
        } else {
            $passwordValid = true;
        }
    }
    // ----------------------------date-------------------------
    if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $dateError = "Date must be input";
        } elseif (validateDate($_POST['date']) && $_POST['date'] <= date("Y-m-d")) {
            $dateValid = true;
        } else {
            $dateError = "Date incorrect";
        }
    }
    if ($emailValid && $passwordValid && $usernameValid && $dateValid && $addressValid) {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);
        $date = htmlspecialchars($_POST['date']);
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
            $isCustomer = getUser($newUser);
            // Login time is stored in a session variable 
            if ($isCustomer['role'] === 'customer') {
                createCustomer($newUser);
                setcookie('email',$email ,time() + 86400*5);
                setcookie('id',$newUser ,time() + 86400*5); 
                header('location: /');
            }
            
        }
    };
};