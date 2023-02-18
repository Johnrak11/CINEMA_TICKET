<?php
require_once('../../../../database/database.php');
require_once('../../../../models/edit_show.model.php');
require_once("../../../../models/validate.model.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset($_POST['name']) && isset($_POST['author']) && isset($_POST['screen']) && isset($_POST['category'])
        && isset($_POST['h']) && isset($_POST['m']) && isset($_POST['language'])  && isset($_POST['trailer'])  && isset($_POST['descripton'])  && isset($_POST['id'])
    ) {
        $duration = $_POST["h"] . ":" . $_POST["m"];
        if (isset($_FILES["imageUpload"]["name"])) {
            if (!empty($_FILES["imageUpload"]["name"])) {
                $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo $_POST['name'];
                    // -----------image insert into folder---------------
                    $target_file = basename($_FILES["imageUpload"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // -----------image insert name into db---------------
                    $random_file_name = randomNameImage();
                    move_uploaded_file($_FILES["imageUpload"]["tmp_name"], "../../../../views/images/shows_image/" . $random_file_name . "." . $imageFileType);
                    $image = $random_file_name . "." . $imageFileType;
                    editShow($_POST['name'], $_POST['author'], $_POST['screen'], $duration, $_POST['language'], $image, $_POST['trailer'], $_POST['descripton'], $_POST['id'], $_POST['category']);
                    $duration = 'location:/edit-show?id=' . $_POST['id'] . '&isSuccess=1';
                    header($duration);
                } else {
                    $duration = 'location:/edit-show?id=' . $_POST['id'] . '&isSuccess=0';
                    header($duration);
                }
            }
        }
    } else {
        $duration = 'location:/edit-show?id=' . $_POST['id'] . '&isSuccess=0';
        header($duration);
    }
}
