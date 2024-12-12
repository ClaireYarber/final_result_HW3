<h1>F1 Drivers Grand Prix</h1>
  
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      </tr>
    </thead>
    <tbody>
      <?php

      while ($f1driver = $f1drivers->fetch_assoc()) { 
      ?>
       <div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title"><?php echo $f1driver['f1driver_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
        <?php 
        $gp = selectgpbyf1driver($f1driver['f1driver_id']);
        while ($gp = $gps->fetch_assoc()) {
        ?>
          <li class="list-group-item"><?php echo $gp['rank_number']; ?> - <?php echo $gp['total_points']; ?> - <?php echo $gp['gp_name']; ?> - <?php echo $gp['country']; ?> - <?php echo $gp['day_time']; ?></li>
        
        <?php
        }
        ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Country Origin: <?php echo $f1driver['country']; ?></small></p>
    </div>
  </div>
       
  <?php
  } 
  ?>
  </div>
    
