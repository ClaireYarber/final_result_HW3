<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newF1DriverModal">
  Add New Driver
</button>

<!-- Modal -->
<div class="modal fade" id="newF1DriverModal" tabindex="-1" aria-labelledby="newF1DriverModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="newF1DriverModalLabel">Add New Driver</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="f1driver_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="f1driver_name" name="f1driver_name" required>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="actionType" value="Add">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Driver</button>
        </div>
      </form>
    </div>
  </div>
</div>
