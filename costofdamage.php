<?php
require_once("util-db.php");
require_once("model-costofdamage.php");

$pageTitle = "Cost of Damage to Car";
include "view-header.php";
$costofdamage = selectcostofdamage ();
include "view-costofdamage.php";
include "view-footer.php";
?>
