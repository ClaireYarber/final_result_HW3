<?php
require_once("util-db.php");
require_once("model-f1driver-with-gp.php");

$pageTitle = "F1 Driver Grand Prix";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertF1DriverGP($_POST['f1driver_id'], $_POST['gp_name'], $_POST['rank_number'], $_POST['total_points'], $_POST['country'], $_POST['day_time'])) {
        echo '<div class="alert alert-success" role="alert">Grand Prix record added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateF1DriverGP($_POST['f1driver_id'], $_POST['gp_name'], $_POST['rank_number'], $_POST['total_points'], $_POST['country'], $_POST['day_time'], $_POST['rank_id'])) {
        echo '<div class="alert alert-success" role="alert">Grand Prix record updated.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteF1DriverGP($_POST['rank_id'])) {
        echo '<div class="alert alert-success" role="alert">Grand Prix record deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$f1drivers = selectf1drivers();
$grandPrixRecords = selectGPByF1Driver($f1drivers->fetch_assoc()['f1driver_id']);
include "view-f1-driver-with-gp.php";
include "view-footer.php";
?>
