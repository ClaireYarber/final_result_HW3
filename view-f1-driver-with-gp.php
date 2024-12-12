<h1>F1 Drivers Grand Prix</h1>
  
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Driver Name</th>
        <th>Grand Prix Details</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($f1driver = $f1drivers->fetch_assoc()) { 
      ?>
       <div class="card-group">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($f1driver['f1driver_name']); ?></h5>
              <p class="card-text">
              <ul class="list-group">
                <?php 
                // Fetch grand prix details for the current driver
                $gps = selectgpbyf1driver($f1driver['f1driver_id']);
                // Loop through the grand prix results
                while ($gp = $gps->fetch_assoc()) {
                ?>
                  <li class="list-group-item">
                    <?php echo htmlspecialchars($gp['rank_number']); ?> - 
                    <?php echo htmlspecialchars($gp['total_points']); ?> - 
                    <?php echo htmlspecialchars($gp['gp_name']); ?> - 
                    <?php echo htmlspecialchars($gp['country']); ?> - 
                    <?php echo htmlspecialchars($gp['day_time']); ?>
                  </li>
                <?php
                }
                ?>
              </ul>
              </p>
              <p class="card-text"><small class="text-body-secondary">Country Origin: <?php echo htmlspecialchars($f1driver['country']); ?></small></p>
            </div>
          </div>
       </div>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
