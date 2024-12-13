<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1 Grand Prix's</title>
  <style>
    /* Set the background image for the page */
    body {
      background-image: url('https://t3.ftcdn.net/jpg/08/69/38/52/360_F_869385263_KaJukEv4E2qm9vxw27G6uq1aXQcJad9k.jpg');
      background-size: cover;
      background-position: center;
      color: white; /* Make all text white */
    }

    h1 {
      color: white; /* Ensure h1 text is white */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional: Add shadow for better visibility */
    }

    /* Style for the table */
    .table {
      background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background for contrast */
      color: white; /* Make table text white */
    }

    /* Optional: Add some style for table headers */
    .table th {
      background-color: rgba(0, 0, 0, 0.7); /* Dark background for table headers */
    }

    /* Optional: Style for table cells */
    .table td {
      color: white; /* Ensure table cell text is white */
    }
  </style>
</head>
<body>

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
      </tr>
    </thead>
    <tbody>
      <?php
      // Loop through the result set and display the data
      while ($gp = $rank->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $gp['rank_id']; ?></td> <!-- Display rank_id -->
          <td><?php echo $gp['rank_number']; ?></td>
          <td><?php echo $gp['total_points']; ?></td>
          <td><?php echo $gp['gp_name']; ?></td>
          <td><?php echo $gp['country']; ?></td>
          <td><?php echo $gp['day_time']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
