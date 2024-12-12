<?php
require_once("util-db.php");
require_once("model-chapters-by-pages.php");

$pageTitle = "chapters by pages";
include "view-header.php";
$chapters = selectchaptersBypages($_POST['cid']);
include "view-chapters-by-pages.php";
include "view-footer.php";
?>
