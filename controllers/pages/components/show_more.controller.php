<?php
require_once('../../../database/database.php');
require_once('../../../models/show_list.model.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['row'])) {
        $rowsCard = showMore($_GET['row']);
        foreach ($rowsCard as $row) {
?>
            <div class="card"><img src="<?= "views/images/shows_image/" . $row['image'] ?>" />
                <div class="info">
                    <h1><?= $row['name'] ?></h1>
                    <a id="more-detail-btn" href="<?= (isset($_COOKIE['email']) and isset($_COOKIE['id'])) ? "/detail?id=" . $row['id'] : "/login" ?>">More detail</a>
                    <button>Get ticket</button>
                </div>
            </div>
<?php
        }
    }
}