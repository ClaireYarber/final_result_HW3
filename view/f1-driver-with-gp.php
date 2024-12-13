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
