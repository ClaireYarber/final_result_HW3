// <?php
// require_once("util-db.php");
// require_once("model-gp-by-f1driver.php");

// $pageTitle = "F1 Grand Prix";
// include "view-header.php";
// $rank = selectgpbyf1driver ($_POST['rank_id']);
// include "view-gp-by-f1driver.php";
// include "view-footer.php";
// ?>

<?php
require_once("util-db.php");
require_once("model-gp-by-f1driver.php");

$pageTitle = "F1 Grand Prix";
include "view-header.php";

// Check if 'rid' (rank_id) is set in the URL query parameter
if (isset($_GET['rid'])) {
    $rid = $_GET['rid'];
    
    // Fetch the Grand Prix data for the given Rank ID
    $rank = selectgpbyf1driver($rid);
    
    // Include the view to display the data
    include "view-gp-by-f1driver.php";
} else {
    // Handle the case when 'rid' is not provided in the URL, show an error message
    echo "Error: Rank ID (rid) is missing.";
}

include "view-footer.php";
?>

