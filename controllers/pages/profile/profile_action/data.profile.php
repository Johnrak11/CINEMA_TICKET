<?php
require_once('../../../../models/profile.model.php');
require_once('../../../../models/validate.model.php');
require_once('../../../../database/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_FILES["image"]["name"];
    if (isset($_POST["name"]) && isset($_FILES["image"]["name"])) {
        if (!empty($_FILES["image"]["name"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                // -----------image update into folder---------------
                $target_file = basename($_FILES["image"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // -----------image update name into db---------------
                $random_file_name = randomNameImage();
                move_uploaded_file($_FILES["image"]["tmp_name"], "../../../../views/images/users/" . $random_file_name . "." . $imageFileType);
                $image = $random_file_name . "." . $imageFileType;
                updateProfile($_POST["name"], $image, $_POST["id"]);
                header('location:/profile');
            }
        }
    }
    if (isset($_POST["name"])){
        updateUserName($_POST["name"], $_POST["id"]);
        header('location:/profile');
    }
}
