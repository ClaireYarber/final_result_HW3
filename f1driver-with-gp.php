<?php
require_once("util-db.php");
require_once("model-f1driver-with-gp.php");

$pageTitle = "F1 Drivers Grand Prix";
include "view-header.php";
$womenstennispros = selectf1drivers ();
include "view-f1drivers-with-gp.php";
include "view-footer.php";
?>
