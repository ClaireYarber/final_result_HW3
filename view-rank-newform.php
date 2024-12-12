<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newRankModal">
  Add New Rank
</button>

<!-- Modal -->
<div class="modal fade" id="newRankModal" tabindex="-1" aria-labelledby="newRankModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="newRankModalLabel">Add New Rank</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="rank_number" class="form-label">Rank Number</label>
            <input type="number" class="form-control" id="rank_number" name="rank_number" required>
          </div>
          <div class="mb-3">
            <label for="total_points" class="form-label">Total Points</label>
            <input type="number" class="form-control" id="total_points" name="total_points" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="actionType" value="Add">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Rank</button>
        </div>
      </form>
    </div>
  </div>
</div>
