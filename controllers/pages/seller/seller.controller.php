<?php
require_once('models/seller.model.php');
require_once('models/show_detail.model.php');
require_once('models/create_newShow.model.php');
$seller = getSeller($_COOKIE['id']);
$allShow = getProduct($_COOKIE['id'], 1);
$previewProducts = getProduct($_COOKIE['id'], 0);
require_once('views/pages/seller/seller.view.php');
// ---------------add--venue----------
if (isset($_GET['add-success'])) {
    if ($_GET['add-success'] == 1) {
?>
        <script>
            successfulAlert('success', 'Add ticket successfully')
        </script>
<?php
    }
}
if (isset($_GET['create-show'])) {
    if ($_GET['create-show'] == 1) {
?>
        <script>
            successfulAlert('success', 'Show had created successfully')
        </script>
<?php
    }
}