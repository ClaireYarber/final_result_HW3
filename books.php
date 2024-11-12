<?php
require_once("util-db.php");
require_once("model-books.php");

$pageTitle= "Books";
include "view-header.php";

$author_id = isset($_POST['author_id']) ? intval($_POST['author_id']) : 0;

if ($author_id > 0) {
    $books = selectBooksByAuthor($author_id);
} else {
    $books = selectBooks();
}

include "view-books.php";
include "view-footer.php";
?>
