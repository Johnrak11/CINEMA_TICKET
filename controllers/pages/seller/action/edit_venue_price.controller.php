<?php
require_once('../../../../database/database.php');
require_once('../../../../models/edit_show.model.php');
// require_once("../../../../models/validate.model.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST["hall"]) && isset($_POST["h"]) && isset($_POST["m"]) && isset($_POST["date"]) && isset($_POST["price"]) && isset($_POST["show"])&& isset($_POST["detail"])&& isset($_POST["venue"])) {
                                        echo "hello";
                                        $time = $_POST["h"] . ":" . $_POST["m"];
                                        $price = $_POST["price"] . '$';
                                        editVenuePrice($_POST["hall"], $price, $_POST["date"], $time ,$_POST["show"],$_POST["detail"],$_POST["venue"]);
                                        $duration = 'location:/edit-show?id=' . $_POST['show'] . '&isSuccess=1';
                                        header($duration);
                    } else {
                                        $duration = 'location:/edit-show?id=' . $_POST['show'] . '&isSuccess=0';
                                        header($duration);
                    }
}
