<h1>Pages by book</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>year</th>
      <th>month</th>
      <th>Day/ Time</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($Page = $Pages->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $Page['book_id']; ?></td>
    <td><?php echo $Page['book_number']; ?></td>
    <td><?php echo $Page['book_description']; ?></td>
    <td><?php echo $Page['semester']; ?></td>
    <td><?php echo $Page['room']; ?></td>
    <td><?php echo $Page['day_time']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
