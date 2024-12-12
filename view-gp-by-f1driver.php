<h1>F1 Grand Prix's</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Points</th>
        <th>Grand Prix Name</th>
        <th>Country</th>
        <th>Date and Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Loop through the result set and display the data
      while ($gp = $rank->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $gp['rank_id']; ?></td>
          <td><?php echo $gp['rank_number']; ?></td>
          <td><?php echo $gp['total_points']; ?></td>
          <td><?php echo $gp['gp_name']; ?></td>
          <td><?php echo $gp['country']; ?></td>
          <td><?php echo $gp['day_time']; ?></td>
          <!-- Add a form with a button to select the rank_id -->
          <td>
            <form action="gp-by-f1driver.php" method="POST">
              <input type="hidden" name="rank_id" value="<?php echo $gp['rank_id']; ?>">
              <button type="submit" class="btn btn-primary">Select</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

