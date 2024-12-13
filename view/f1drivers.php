<h1>F1 Drivers</h1>
<div class="row">
  <div class="col">
    <h2>F1 Drivers</h2>
  </div>
  <div class="col-auto">
    <?php include "view-f1drivers-newform.php"; ?>
  </div>
</div>

<div class="table-responsive">
  <!-- Table for F1 drivers -->
  <table id="f1driversTable" class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php while ($f1driver = $f1drivers->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $f1driver['f1driver_id']; ?></td>
          <td><?php echo $f1driver['f1driver_name']; ?></td>
          <td><?php echo $f1driver['country']; ?></td>
          <td>
            <?php include "view-f1drivers-editform.php"; ?>
          </td>
          <td>
            <form method="post" action="">
              <input type="hidden" name="f1driver_id" value="<?php echo $f1driver['f1driver_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                </svg>
              </button>
            </form>
          </td>
          <td>
            <form method="post" action="gp-by-f1driver.php">
              <input type="hidden" name="f1driver_id" value="<?php echo $f1driver['f1driver_id']; ?>">
              <button type="submit" class="btn btn-primary">Grand Prix</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    // Initialize DataTable
    $('#f1driversTable').DataTable({
      "paging": true,    // Enable pagination
      "searching": true, // Enable search bar
      "ordering": true,  // Enable column sorting
      "info": true       // Display information about the table (e.g., "Showing 1 to 10 of 50 entries")
    });
  });
</script>