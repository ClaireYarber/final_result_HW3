// <?php
// require_once("util-db.php");
// require_once("model-gp-by-f1driver.php");

// $pageTitle = "F1 Grand Prix";
// include "view-header.php";

// // Make sure the 'rid' parameter is set
// if (isset($_GET['rid'])) {
//     $rid = $_GET['rid'];
//     // Get the rank data by the given rank ID
//     $rank = selectgpbyf1driver($rid);
    
//     // Check if data was returned
//     if ($rank->num_rows > 0) {
//         include "view-gp-by-f1driver.php";
//     } else {
//         echo "No Grand Prix data found for this rank.";
//     }
// } else {
//     echo "Error: Rank ID (rid) is missing.";
// }

// include "view-footer.php";
// ?>

<?php
require_once("util-db.php");
require_once("model-gp-by-f1driver.php");

$pageTitle = "F1 Grand Prix";
include "view-header.php";

// Make sure the 'rank_id' parameter is set via POST
if (isset($_POST['rank_id'])) {
    $rank_id = $_POST['rank_id']; // Get the rank_id from the form submission
    // Get the rank data by the given rank ID
    $rank = selectgpbyf1driver($rank_id);
    
    // Check if data was returned
    if ($rank->num_rows > 0) {
        include "view-gp-by-f1driver.php"; // Display the data
    } else {
        echo "No Grand Prix data found for this rank.";
    }
} else {
    echo "Error: Rank ID (rank_id) is missing.";
}

include "view-footer.php";
?>






