<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCostOfDamageModal">
  Add New Cost of Damage
</button>

<!-- Modal -->
<div class="modal fade" id="newCostOfDamageModal" tabindex="-1" aria-labelledby="newCostOfDamageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="newCostOfDamageModalLabel">Add New Cost of Damage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="cod_brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="cod_brand" name="cod_brand" required>
          </div>
          <div class="mb-3">
            <label for="cod_cost" class="form-label">Cost</label>
            <input type="number" class="form-control" id="cod_cost" name="cod_cost" required>
          </div>
          <div class="mb-3">
            <label for="f1driver_id" class="form-label">F1 Driver ID</label>
            <input type="number" class="form-control" id="f1driver_id" name="f1driver_id" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="actionType" value="Add">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Cost of Damage</button>
        </div>
      </form>
    </div>
  </div>
</div>
