<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editF1DriverModal-<?php echo $f1driver['f1driver_id']; ?>">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editF1DriverModal-<?php echo $f1driver['f1driver_id']; ?>" tabindex="-1" aria-labelledby="editF1DriverModalLabel-<?php echo $f1driver['f1driver_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="editF1DriverModalLabel-<?php echo $f1driver['f1driver_id']; ?>">Edit Driver</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="f1driver_name-<?php echo $f1driver['f1driver_id']; ?>" class="form-label">Name</label>
            <input type="text" class="form-control" id="f1driver_name-<?php echo $f1driver['f1driver_id']; ?>" name="f1driver_name" value="<?php echo $f1driver['f1driver_name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="country-<?php echo $f1driver['f1driver_id']; ?>" class="form-label">Country</label>
            <input type="text" class="form-control" id="country-<?php echo $f1driver['f1driver_id']; ?>" name="country" value="<?php echo $f1driver['country']; ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="f1driver_id" value="<?php echo $f1driver['f1driver_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit Driver</button>
        </div>
      </form>
    </div>
  </div>
</div>
