<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1 Driver Ranks</title>
  <style>
    /* Set the background image for the page */
    body {
      background-image: url('https://t3.ftcdn.net/jpg/08/69/38/52/360_F_869385263_KaJukEv4E2qm9vxw27G6uq1aXQcJad9k.jpg');
      background-size: cover;
      background-position: center;
      color: white; /* Make text white */
    }

    h1 {
      color: white; /* Ensure header text is white */
      font-size: 3rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional: Add shadow for better visibility */
    }

    /* Style for the table */
    .table {
      background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background for contrast */
      color: white; /* Make table text white */
    }

    /* Optional: Add some style for table headers */
    .table th {
      background-color: rgba(0, 0, 0, 0.7);
    }

    /* Optional: Add style to buttons */
    .btn-primary, .btn-warning, .btn-danger {
      color: white;
      background-color: #007bff; /* Blue */
    }

    .btn-warning {
      background-color: #ffc107; /* Yellow */
    }

    .btn-danger {
      background-color: #dc3545; /* Red */
    }

    /* Style for the Chart */
    canvas {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

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
        <?php include "view/rank-editform.php"; ?>
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

</body>
</html>
