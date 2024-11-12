<?php
require_once("util-db.php");
require_once("model-chapters.php");

$pageTitle= "Chapters";
include "view-header.php";
$chapters = selectChapters();
include "view-chapters.php";
include "view-footer.php";
?>
