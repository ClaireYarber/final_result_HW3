<!-- Edit Cost of Damage Form -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCostOfDamageModal-<?php echo $costofdamages['costofdamage_id']; ?>">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editCostOfDamageModal-<?php echo $costofdamages['costofdamage_id']; ?>" tabindex="-1" aria-labelledby="editCostOfDamageModalLabel-<?php echo $costofdamages['costofdamage_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="editCostOfDamageModalLabel-<?php echo $costofdamages['costofdamage_id']; ?>">Edit Cost of Damage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="cod_brand-<?php echo $costofdamages['costofdamage_id']; ?>" class="form-label">Brand</label>
            <input type="text" class="form-control" id="cod_brand-<?php echo $costofdamages['costofdamage_id']; ?>" name="cod_brand" value="<?php echo $costofdamages['cod_brand']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="cod_cost-<?php echo $costofdamages['costofdamage_id']; ?>" class="form-label">Cost</label>
            <input type="number" class="form-control" id="cod_cost-<?php echo $costofdamages['costofdamage_id']; ?>" name="cod_cost" value="<?php echo $costofdamages['cod_cost']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="f1driver_id-<?php echo $costofdamages['costofdamage_id']; ?>" class="form-label">F1 Driver</label>
            <select class="form-select" id="f1driver_id-<?php echo $costofdamages['costofdamage_id']; ?>" name="f1driver_id" required>
              <option value="">Select Driver</option>
              <?php while ($driver = $drivers->fetch_assoc()) { ?>
                <option value="<?php echo $driver['driver_id']; ?>" <?php echo ($costofdamages['f1driver_id'] == $driver['driver_id']) ? 'selected' : ''; ?>>
                  <?php echo $driver['driver_name']; ?>
                </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="actionType" value="Edit">
          <input type="hidden" name="costofdamage_id" value="<?php echo $costofdamages['costofdamage_id']; ?>">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
