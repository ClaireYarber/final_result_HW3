<h1>Pages</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Year</th>
      <th>Month</th>
      <th>Day</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($page = $pages->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $page['page_id']; ?></td>
    <td><?php echo $page['year']; ?></td>
    <td><?php echo $page['month']; ?></td>
    <td><?php echo $page['day']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
