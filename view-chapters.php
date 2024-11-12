<h1>Chapters</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Number</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($chapter = $chapters->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $chapter['chapter_id']; ?></td>
    <td><?php echo $chapter['chapter_name']; ?></td>
    <td><?php echo $chapter['chapter_number']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

