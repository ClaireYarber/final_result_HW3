<h1>F1 Driver Ranks</h1>

<!-- Table for Ranks -->
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Points</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Create arrays to store driver names and points for the chart
        $driverNames = [];
        $driverPoints = [];

        while ($ranks = $rank->fetch_assoc()) {
          // Add driver names and points to arrays
          $driverNames[] = $ranks['rank_number'];
          $driverPoints[] = $ranks['total_points'];
      ?>
        <tr>
          <td><?php echo $ranks['rank_id']; ?></td>
          <td><?php echo $ranks['rank_number']; ?></td>
          <td><?php echo $ranks['total_points']; ?></td>
          <td>
            <form method="post" action="gp-by-rank.php" style="display:inline;">
              <input type="hidden" name="rid" value="<?php echo $ranks['rank_id']; ?>">
              <button type="submit" class="btn btn-primary">Grand Prix</button>
            </form>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editRankModal-<?php echo $ranks['rank_id']; ?>">Edit</button>
            <form method="post" action="" style="display:inline;">
              <input type="hidden" name="rank_id" value="<?php echo $ranks['rank_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        <?php include "view-rank-editform.php"; ?>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Canvas element for Chart.js -->
<canvas id="rankChart" width="400" height="200"></canvas>

<!-- Include Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Get driver names and points from PHP
  var driverNames = <?php echo json_encode($driverNames); ?>;
  var driverPoints = <?php echo json_encode($driverPoints); ?>;

  // Create a bar chart using Chart.js
  var ctx = document.getElementById('rankChart').getContext('2d');
  var rankChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: driverNames,  // Driver numbers
      datasets: [{
        label: 'Total Points',
        data: driverPoints,  // Driver points
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
