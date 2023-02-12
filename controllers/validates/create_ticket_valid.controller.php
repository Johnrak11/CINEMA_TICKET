<?php
// Error text display
$dateError = "";
$timeError = "";
$hallError = "";
$venueError = "";
$addressError = "";
//correct text display
$date = "";
$time = "";
$hall = "";
$venue = "";
//    if correct condition
$dateValid  = true;
$timeValid =  true;
$hallValid = true;
$venueValid = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dateValid = FALSE;
    $timeValid = FALSE;
    $hallValid = FALSE;
    $venueValid = FALSE;
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
    // ---------------------------------------condection is correct---------
    if ($dateValid && $timeValid && $hallValid && $venueValid) {
        // --------------table show_detail data-------------
        $date = $_POST["date"];
        $time = $_POST["time"];
        $hall = $_POST["hall"];
        $venue = $_POST["venue"];
        $idShowCurrent = $_POST["showId"];
        createShowDetails($venue, $date, $time, $hall, $idShowCurrent);
        header('location:/seller');
    }
}
