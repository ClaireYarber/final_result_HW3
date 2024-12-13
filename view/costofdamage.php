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
      <?php } 
    ?>
    </tbody>
  </table>
</div>

<h1>Rank by Grand Prix</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Points</th>
        <th>Grand Prix Name</th>
        <th>Country</th>
        <th>Day/Time</th> 
      </tr>
    </thead>
    <tbody>
      <?php

      while ($gps = $gp->fetch_assoc()) { 
      ?>
        <tr>
          <td><?php echo $gps['rank_id']; ?></td>
          <td><?php echo $gps['rank_number']; ?></td>
          <td><?php echo $gps['total_points']; ?></td>
          <td><?php echo $gps['gp_name']; ?></td>
          <td><?php echo $gps['country']; ?></td>
          <td><?php echo $gps['day_time']; ?></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>


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

    // Create and append the summary rows for each brand
    let summaryRows = '';
    for (const brand in damageSums) {
      summaryRows += `<tr><td>${brand}</td><td>${damageSums[brand].toFixed(2)}</td></tr>`;
    }

    // Add the summary rows to the table
    $('#damage-summary tbody').html(summaryRows);
  });
</script>
