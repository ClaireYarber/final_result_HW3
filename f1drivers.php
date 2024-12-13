<?php
require_once("util-db.php");
require_once("model/f1drivers.php");

$pageTitle = "F1 Drivers";
include "view/header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertF1Driver($_POST['f1driver_name'], $_POST['country'])) {
        echo '<div class="alert alert-success" role="alert">Driver added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateF1Driver($_POST['f1driver_name'], $_POST['country'], $_POST['f1driver_id'])) {
        echo '<div class="alert alert-success" role="alert">Driver edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteF1Driver($_POST['f1driver_id'])) {
        echo '<div class="alert alert-success" role="alert">Driver deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$f1drivers = selectF1Drivers();
include "view/f1drivers.php";
include "view/footer.php";
?>
