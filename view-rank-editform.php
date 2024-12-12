<!-- Modal -->
<div class="modal fade" id="editRankModal-<?php echo $ranks['rank_id']; ?>" tabindex="-1" aria-labelledby="editRankModalLabel-<?php echo $ranks['rank_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="editRankModalLabel-<?php echo $ranks['rank_id']; ?>">Edit Rank</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="rank_number-<?php echo $ranks['rank_id']; ?>" class="form-label">Rank Number</label>
            <input type="number" class="form-control" id="rank_number-<?php echo $ranks['rank_id']; ?>" name="rank_number" value="<?php echo $ranks['rank_number']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="total_points-<?php echo $ranks['rank_id']; ?>" class="form-label">Total Points</label>
            <input type="number" class="form-control" id="total_points-<?php echo $ranks['rank_id']; ?>" name="total_points" value="<?php echo $ranks['total_points']; ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="rank_id" value="<?php echo $ranks['rank_id']; ?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
