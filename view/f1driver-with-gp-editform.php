<!-- Edit Modal Button (for triggering the modal) -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editF1DriverGPModal<?php echo $record['rank_id']; ?>">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="editF1DriverGPModal<?php echo $record['rank_id']; ?>" tabindex="-1" aria-labelledby="editF1DriverGPModalLabel<?php echo $record['rank_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="editF1DriverGPModalLabel<?php echo $record['rank_id']; ?>">Edit Grand Prix Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form Fields (Pre-filled with existing data) -->
          <div class="mb-3">
            <label for="gp_name" class="form-label">GP Name</label>
            <input type="text" class="form-control" id="gp_name" name="gp_name" value="<?php echo $record['gp_name']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="rank_number" class="form-label">Rank Number</label>
            <input type="number" class="form-control" id="rank_number" name="rank_number" value="<?php echo $record['rank_number']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="total_points" class="form-label">Total Points</label>
            <input type="number" class="form-control" id="total_points" name="total_points" value="<?php echo $record['total_points']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="<?php echo $record['country']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="day_time" class="form-label">Day/Time</label>
            <input type="text" class="form-control" id="day_time" name="day_time" value="<?php echo $record['day_time']; ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <!-- Hidden Fields for Action and Record ID -->
          <input type="hidden" name="actionType" value="Edit">
          <input type="hidden" name="rank_id" value="<?php echo $record['rank_id']; ?>">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>


