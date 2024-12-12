<h1>Cost of Damage to Car</h1>
<div class="row">
  <div class="col">
    <h2>Cost of Damage</h2>
  </div>
  <div class="col-auto">
    <?php include "view-costofdamage-newform.php"; ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
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
          <td><?php echo $costofdamages['cod_brand']; ?></td>
          <td><?php echo $costofdamages['cod_cost']; ?></td>
          <td><?php echo $costofdamages['f1driver_id']; ?></td>
          <td>
            <?php include "view-costofdamage-editform.php"; ?>
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
</div>
