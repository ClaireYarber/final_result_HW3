<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cost of Damage to Car</title>
  <style>
    /* Set the background image for the page */
    body {
      background-image: url('https://t3.ftcdn.net/jpg/08/69/38/52/360_F_869385263_KaJukEv4E2qm9vxw27G6uq1aXQcJad9k.jpg');
      background-size: cover;
      background-position: center;
      color: white; /* Make all text white */
    }

    h1, h2 {
      color: white; /* Ensure h1 and h2 text are white */
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

    /* Optional: Style for button */
    .btn {
      background-color: #d9534f; /* Red button color */
      color: white;
    }
  </style>
</head>
<body>

<h1>Cost of Damage to Car</h1>

<div class="row">
  <div class="col">
    <h2>Cost of Damage</h2>
  </div>
  <div class="col-auto">
    <?php include "view/costofdamage-newform.php"; ?>
  </div>
</div>

<div class="table-responsive">
  <table class="table" id="damage-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Cost</th>
        <th>F1 Driver ID</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($costofdamages = $costofdamage->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $costofdamages['costofdamage_id']; ?></td>
          <td class="cod_brand"><?php echo $costofdamages['cod_brand']; ?></td>
          <td class="cod_cost"><?php echo $costofdamages['cod_cost']; ?></td>
          <td><?php echo $costofdamages['f1driver_id']; ?></td>
          <td>
            <?php include "view/costofdamage-editform.php"; ?>
          </td>
          <td>
            <form method="post" action="">
              <input type="hidden" name="costofdamage_id" value="<?php echo $costofdamages['costofdamage_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">
                Delete
              </button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  
  <!-- Summary table for total damages by brand -->
  <table class="table" id="damage-summary">
    <thead>
      <tr>
        <th><strong>Total Damages by Brand</strong></th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      <!-- The summary row will be dynamically populated here -->
    </tbody>
  </table>
</div>

<!-- Include jQuery for handling dynamic functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Initialize an object to hold damage sums by brand
    let damageSums = {};

    // Iterate over each row in the cost of damage table and calculate the total by brand
    $('#damage-table tbody tr').each(function() {
      let brand = $(this).find('.cod_brand').text();  // Get brand name
      let cost = parseFloat($(this).find('.cod_cost').text());  // Get cost value

      // If the cost is a valid number, accumulate it for the corresponding brand
      if (!isNaN(cost)) {
        if (damageSums[brand]) {
          damageSums[brand] += cost;
        } else {
          damageSums[brand] = cost;
        }
      }
    });

    // Create and append th
