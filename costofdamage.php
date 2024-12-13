<?php
require_once("util-db.php");
require_once("model/costofdamage.php");

$pageTitle = "Cost of Damage to Car";
include "view-header.php";

// Handle form submissions for Add, Edit, and Delete actions
if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertCostOfDamage($_POST['cod_brand'], $_POST['cod_cost'], $_POST['f1driver_id'])) {
                echo '<div class="alert alert-success" role="alert">Cost of damage added.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error adding damage.</div>';
            }
            break;
        case "Edit":
            if (updateCostOfDamage($_POST['cod_brand'], $_POST['cod_cost'], $_POST['f1driver_id'], $_POST['costofdamage_id'])) {
                echo '<div class="alert alert-success" role="alert">Cost of damage updated.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error updating damage.</div>';
            }
            break;
        case "Delete":
            if (deleteCostOfDamage($_POST['costofdamage_id'])) {
                echo '<div class="alert alert-success" role="alert">Cost of damage deleted.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error deleting damage.</div>';
            }
            break;
    }
}

$costofdamage = selectCostOfDamage();
$drivers = selectAllDrivers(); // Fetch all drivers
include "view/costofdamage.php";
include "view/footer.php";
?>

