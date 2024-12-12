<?php
require_once("util-db.php");
require_once("model-pages-by-book.php");

$pageTitle = "pages by book";
include "view-header.php";
$pages = selectpagesBybook($_POST['bid']);
include "view-pages-by-book.php";
include "view-footer.php";
?>
