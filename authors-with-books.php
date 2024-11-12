<?php
require_once("util-db.php");
require_once("model-authors-with-books.php");

$pageTitle= "Authors With Books";
include "view-header.php";
$authors-with-books = selectPages();
include "view-pages.php";
include "view-footer.php";
?>
