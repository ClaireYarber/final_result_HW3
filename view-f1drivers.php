<<h1>F1 Drivers</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th></th>   
      </tr>
    </thead>
    <tbody>
      <?php

      while ($f1driver = $f1drivers->fetch_assoc()) { 
      ?>
        <tr>
          <td><?php echo $f1driver['f1driver_id']; ?></td>
          <td><?php echo $f1driver['f1driver_name']; ?></td>
          <td><?php echo $f1driver['country']; ?></td>
          <td><a href="gp-by-f1driver.php?id=<?php echo $f1driver['f1driver_id']; ?>">Grand Prix</a></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
