<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1 Driver Grand Prix</title>
  <style>
    /* Set the background image for the page */
    body {
      background-image: url('https://t3.ftcdn.net/jpg/08/69/38/52/360_F_869385263_KaJukEv4E2qm9vxw27G6uq1aXQcJad9k.jpg');
      background-size: cover;
      background-position: center;
      color: white; /* Make text white */
    }

    h1, h2 {
      color: white; /* Ensure header text is white */
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
    .btn-danger {
      color: white;
      background-color: #dc3545; /* Red */
    }
  </style>
</head>
<body>

<h1>F1 Driver Grand Prix</h1>
<div class="row">
  <div class="col">
    <h2>Grand Prix Records</h2>
  </div>
  <div class="col-auto">
    <?php include "view/f1driver-with-gp-newform.php"; ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>GP Name</th>
        <th>F1 Driver ID</th>
        <th>Country</th>
        <th>Day/Time</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php while ($record = $grandPrixRecords->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $record['gp_name']; ?></td>
          <td><?php echo $record['f1driver_id']; ?></td>
          <td><?php echo $record['country']; ?></td>
          <td><?php echo $record['day_time']; ?></td>
          <td>
            <?php include "view/f1driver-with-gp-editform.php"; ?>
          </td>
          <td>
            <form method="post" action="">
              <input type="hidden" name="rank_id" value="<?php echo $record['rank_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
