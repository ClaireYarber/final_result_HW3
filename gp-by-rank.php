<?php
require_once("util-db.php");
require_once("model/gp-by-rank.php");

$pageTitle = "Grand Prix by Rank";
include "view-header.php";
$gp = selectgpbyrank ($_POST['rid']);
include "view/gp-by-rank.php";
include "view/footer.php";
?>
