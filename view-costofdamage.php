<h1>Cost of damage to Car</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Cost</th>
        <th>F1 Driver ID</th>   
      </tr>
    </thead>
    <tbody>
      <?php

      while ($costofdamages = $costofdamage->fetch_assoc()) { 
      ?>
        <tr>
          <td><?php echo $costofdamages['costofdamages_id']; ?></td>
          <td><?php echo $costofdamages['cod_brand']; ?></td>
          <td><?php echo $costofdamages['cod_cost']; ?></td>
          <td><?php echo $costofdamages['f1driver_id']; ?></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>
</div>
