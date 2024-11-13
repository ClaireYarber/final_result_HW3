<?php
require_once("util-db.php");
require_once("model-books-by-author.php");

$pageTitle= "Books by Author";
include "view-header.php";
$books = selectBooksByAuthor($_GET['id']);
include "view-books-by-author.php";
include "view-footer.php";
?>
