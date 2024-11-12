<?php
require_once("util-db.php");
require_once("model-authors.php");
require_once("model-books.php");

$pageTitle = "Authors";
include "view-header.php";

$authors = selectAuthors();

foreach ($authors as $author) {
    $author['books'] = selectBooksByAuthor($author['author_id']);
}

include "view-authors.php";
include "view-footer.php";
?>
