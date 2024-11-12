<h1>Books</h1>
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
