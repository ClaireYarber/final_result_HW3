<h1>F1 Driver Ranks</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Points</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($ranks = $rank->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $ranks['rank_id']; ?></td>
          <td><?php echo $ranks['rank_number']; ?></td>
          <td><?php echo $ranks['total_points']; ?></td>
          <td>
            <form method="post" action="gp-by-rank.php" style="display:inline;">
              <input type="hidden" name="rid" value="<?php echo $ranks['rank_id']; ?>">
              <button type="submit" class="btn btn-primary">Grand Prix</button>
            </form>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editRankModal-<?php echo $ranks['rank_id']; ?>">Edit</button>
            <form method="post" action="" style="display:inline;">
              <input type="hidden" name="rank_id" value="<?php echo $ranks['rank_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        <?php include "view-rank-editform.php"; ?>
      <?php } ?>
    </tbody>
  </table>
</div>
