<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Publisher</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($author = $authors->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $author['author_id']; ?></td>
    <td><?php echo $author['author_name']; ?></td>
    <td><?php echo $author['publisher']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </tabl
