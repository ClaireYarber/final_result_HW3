<h1>Books</h1>
<form method="post" action="books.php">
  <div class="form-group">
    <label for="author_id">Filter by Author:</label>
    <select name="author_id" id="author_id" class="form-control">
      <?php
      $authors = selectAuthors();
      while ($author = $authors->fetch_assoc()) {
      ?>
        <option value="<?php echo $author['author_id']; ?>"><?php echo $author['author_name']; ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($book = $books->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $book['book_id']; ?></td>
    <td><?php echo $book['book_name']; ?></td>
    <td><?php echo $book['book_description']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
