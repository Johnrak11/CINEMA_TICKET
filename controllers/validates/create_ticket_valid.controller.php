<?php
// Error text display
$dateError = "";
$timeError = "";
$hallError = "";
$venueError = "";
$addressError = "";
$priceError = "";
//correct text display
$date = "";
$time = "";
$hall = "";
$venue = "";
$price = "";
//    if correct condition
$dateValid  = true;
$timeValid =  true;
$hallValid = true;
$venueValid = true;
$priceValid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dateValid = FALSE;
    $timeValid = FALSE;
    $hallValid = FALSE;
    $venueValid = FALSE;
    $priceValid = FALSE;
    // ----------------------------Date of show -- ----------------

    if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $dateError = "Date must be input";
        } elseif (validateDate($_POST['date']) && $_POST['date'] >= date("Y-m-d")) {
            $dateValid = true;
        } else {
            $dateError = "date incorrect";
        }
    }
    // ----------------------------time show-- ----------------
    if (isset($_POST["time"])) {
        if (empty($_POST["time"])) {
            $timeError = "Time must be select a time";
        } else {
            $timeValid = true;
        }
    }
    // ----------------------------hall-- ----------------
    if (isset($_POST["hall"])) {
        $hallValid = true;
    } else {
        $hallError = "You must be fill hall";
    }
    // ----------------------------venue-- ----------------

    if (isset($_POST["venue"])) {
        $venueValid = true;
    } else {
        $venueError = "You must be fill in a venue";
    }
    // ----------------------------price -- ----------------
    if (isset($_POST["price"])) {
        if (empty($_POST["price"])) {
             $priceError = "Price must be fill ";
        } elseif ($_POST["price"] >= 0 && $_POST["price"] <= 100) {
             $priceValid  = true;
        } else {
             $priceError = "Price must be more than 0$ and less than 100$";
        }
   }
    // ---------------------------------------condection is correct---------
    if ($dateValid && $timeValid && $hallValid && $venueValid) {
        // --------------table show_detail data-------------
        $date = $_POST["date"];
        $time = $_POST["time"];
        $hall = $_POST["hall"];
        $venue = $_POST["venue"];
        $idShowCurrent = $_POST["showId"];
        $price = $_POST["price"]."$";
        createShowDetails($venue, $date, $time, $hall, $idShowCurrent,$price);
        header('location:/seller?add-success=successfull');
    }
}
