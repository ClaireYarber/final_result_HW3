<?php
require_once("util-db.php");
require_once("model-pages.php");

$pageTitle= "Pages";
include "view-header.php";
$pages = selectPages();
include "view-pages.php";
include "view-footer.php";
?>
