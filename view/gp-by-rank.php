<h1>Rank by Grand Prix</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Number</th>
        <th>Points</th>
        <th>Grand Prix Name</th>
        <th>Country</th>
        <th>Day/Time</th> 
      </tr>
    </thead>
    <tbody>
      <?php

      while ($gps = $gp->fetch_assoc()) { 
      ?>
        <tr>
          <td><?php echo $gps['rank_id']; ?></td>
          <td><?php echo $gps['rank_number']; ?></td>
          <td><?php echo $gps['total_points']; ?></td>
          <td><?php echo $gps['gp_name']; ?></td>
          <td><?php echo $gps['country']; ?></td>
          <td><?php echo $gps['day_time']; ?></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
