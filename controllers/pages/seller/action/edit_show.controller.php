<?php
require_once('models/show_detail.model.php');
require_once('models/edit_show.model.php');
require_once('models/create_newShow.model.php');
$showDetail = [];
$date = [];
$strikthrough = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $showDetail = showDetail($id);
        $date = getTime($id, date("Y-m-d"));
        if (empty($date['date'])) {
            $date = getTimeExpired($id);
            $strikthrough = "expired";
        }
    }
}
require_once("views/pages/seller/action/edit_show.view.php");
// ---------------add--venue----------
if (isset($_GET['isSuccess'])) {
    if ($_GET['isSuccess'] == 1) {
?>
        <script>
            successfulAlert('success', 'Add ticket successfully', <?= $_GET['id'] ?>)
        </script>
    <?php
    }
    if ($_GET['isSuccess'] == 0) {
    ?>
        <script>
            successfulAlert('error', 'Add ticket successfully', <?= $_GET['id'] ?>)
        </script>
<?php
    }
}
?>