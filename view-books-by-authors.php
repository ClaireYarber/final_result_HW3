<h1>Books by Author</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>Year</th>
      <th>Month</th>
      <th>Day</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($book = $books->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $book['book_id']; ?></td>
    <td><?php echo $book['book_number']; ?></td>
    <td><?php echo $book['book_description']; ?></td>
    <td><?php echo $book['year']; ?></td>
    <td><?php echo $book['month']; ?></td>
    <td><?php echo $book['day']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
