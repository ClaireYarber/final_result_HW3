<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form method="POST" action="index.php">
    <label for="author_id">Select Author:</label>
    <select name="author_id" id="author_id">
        <?php
        // Fetch authors for the dropdown
        $authorsQuery = "SELECT * FROM authors";
        $authorsResult = mysqli_query($conn, $authorsQuery);
        while ($author = mysqli_fetch_assoc($authorsResult)) {
            echo "<option value='" . $author['id'] . "'>" . $author['name'] . "</option>";
        }
        ?>
    </select>
    <button type="submit">Filter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['author_id'])) {
    $author_id = $_POST['author_id'];
    $authorsQuery = "SELECT * FROM authors WHERE id=$author_id";
} else {
    $authorsQuery = "SELECT * FROM authors";
}
$authorsResult = mysqli_query($conn, $authorsQuery);

while ($author = mysqli_fetch_assoc($authorsResult)) {
    echo "<h2>" . $author['name'] . "</h2>";

    $booksQuery = "SELECT * FROM books WHERE author_id=" . $author['id'];
    $booksResult = mysqli_query($conn, $booksQuery);

    while ($book = mysqli_fetch_assoc($booksResult)) {
        echo "<p>" . $book['title'] . "</p>";
    }
}

if (isset($_GET['author_id'])) {
    $author_id = $_GET['author_id'];
    $booksQuery = "SELECT * FROM books WHERE author_id=$author_id";
    $booksResult = mysqli_query($conn, $booksQuery);

    while ($book = mysqli_fetch_assoc($booksResult)) {
        echo "<p>" . $book['title'] . "</p>";
    }
}
?>

<a href="index.php?author_id=1">Author 1</a>
<a href="index.php?author_id=2">Author 2</a>
<a href="index.php?author_id=3">Author 3</a>


</body>
</html>

<?php
mysqli_close($conn);
?>
