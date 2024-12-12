<?php
require_once("util-db.php");
require_once("model-f1drivers.php");

$pageTitle = "F1 Drivers";
include "view-header.php";
$womenstennispros = selectf1drivers();
include "view-f1drivers.php";
include "view-footer.php";
?>
