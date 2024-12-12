<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newF1DriverGPModal">
  Add New Grand Prix Record
</button>

<!-- Modal -->
<div class="modal fade" id="newF1DriverGPModal" tabindex="-1" aria-labelledby="newF1DriverGPModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="">
        <div class="modal-header">
          <h5 class="modal-title" id="newF1DriverGPModalLabel">Add New Grand Prix Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form Fields -->
          <div class="mb-3">
            <label for="gp_name" class="form-label">GP Name</label>
            <input type="text" class="form-control" id="gp_name" name="gp_name" required>
          </div>
          <div class="mb-3">
            <label for="rank_number" class="form-label">Rank Number</label>
            <input type="number" class="form-control" id="rank_number" name="rank_number" required>
          </div>
          <div class="mb-3">
            <label for="total_points" class="form-label">Total Points</label>
            <input type="number" class="form-control" id="total_points" name="total_points" required>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
          </div>
          <div class="mb-3">
            <label for="day_time" class="form-label">Day/Time</label>
            <input type="text" class="form-control" id="day_time" name="day_time" required>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="actionType" value="Add">
          <button type
