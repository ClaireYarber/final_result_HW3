<?php
$pageTitle= "Home";
Include "view-header.php";
?>
<h1>Homework 3</h1>
<?php
Include "view-footer.php";
?>

<?php
include 'util-db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Filter form using POST -->
<form method="POST" action="index.php">
    <label for="author_id">Select Author:</label>
    <select name="author_id" id="author_id">
        <option value="">-- Select an Author --</option>
        <?php
        // Fetch authors for the dropdown
        $authorsQuery = "SELECT * FROM authors";
        $authorsResult = mysqli_query($conn, $authorsQuery);

        // Check if authors are fetched successfully
        if ($authorsResult) {
            while ($author = mysqli_fetch_assoc($authorsResult)) {
                echo "<option value='" . $author['id'] . "'>" . $author['name'] . "</option>";
            }
        } else {
            echo "<option value=''>No authors available</option>";
        }
        ?>
    </select>
    <button type="submit">Filter</button>
</form>

<!-- Display authors and their books -->
<?php
// Check if filtering by POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['author_id']) && $_POST['author_id'] != "") {
    $author_id = $_POST['author_id'];
    $authorsQuery = "SELECT * FROM authors WHERE id=$author_id";
} else {
    // Default display
    $authorsQuery = "SELECT * FROM authors";
}
$authorsResult = mysqli_query($conn, $authorsQuery);

while ($author = mysqli_fetch_assoc($authorsResult)) {
    echo "<h2>" . $author['name'] . "</h2>";

    // Fetch related records (e.g., Books)
    $booksQuery = "SELECT * FROM books WHERE author_id=" . $author['id'];
    $booksResult = mysqli_query($conn, $booksQuery);

    while ($book = mysqli_fetch_assoc($booksResult)) {
        echo "<p>" . $book['title'] . "</p>";
    }
}

// If filtering by GET (Hyperlink)
if (isset($_GET['author_id'])) {
    $author_id = $_GET['author_id'];
    $booksQuery = "SELECT * FROM books WHERE author_id=$author_id";
    $booksResult = mysqli_query($conn, $booksQuery);

    while ($book = mysqli_fetch_assoc($booksResult)) {
        echo "<p>" . $book['title'] . "</p>";
    }
}
?>

<!-- Hyperlinks to filter data -->
<a href="index.php?author_id=1">William Shakespeare</a>
<a href="index.php?author_id=2">Stephen King</a>
<a href="index.php?author_id=3">George Orwell</a>

</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
