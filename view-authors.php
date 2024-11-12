<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Publisher</th>
        <th>Books</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($author = $authors->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $author['author_id']; ?></td>
    <td><a href="books.php?author_id=<?php echo $author['author_id']; ?>"><?php echo $author['author_name']; ?></a></td>
    <td><?php echo $author['publisher']; ?></td>
    <td>
      <ul>
      <?php
      while ($book = $author['books']->fetch_assoc()) {
      ?>
        <li><?php echo $book['book_name']; ?></li>
      <?php
      }
      ?>
      </ul>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
