<h1>F1 Grand Prix's</h1>
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

      while ($ranks = $rank->fetch_assoc()) { 
      ?>
        <tr>
          <td><?php echo $ranks['rank_id']; ?></td>
          <td><?php echo $ranks['rank_number']; ?></td>
          <td><?php echo $ranks['total_points']; ?></td>
          <td><?php echo $ranks['gp_name']; ?></td>
          <td><?php echo $ranks['country']; ?></td>
          <td><?php echo $ranks['day_time']; ?></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
