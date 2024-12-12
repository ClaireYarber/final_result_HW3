<?php
require_once("util-db.php");
require_once("model-gp-by-f1driver.php");

$pageTitle = "F1 Grand Prix";
include "view-header.php";
$rank = selectgpbyf1driver ($_GET['id']);
include "view-gp-by-f1driver.php";
include "view-footer.php";
?>
