<?php
require_once("util-db.php");
require_once("model-rank.php");

$pageTitle = "Rank";
include "view-header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actionType = $_POST['actionType'];
    $rank_number = $_POST['rank_number'];
    $total_points = $_POST['total_points'];

    if ($actionType == "Add") {
        insertRank($rank_number, $total_points);
    } elseif ($actionType == "Edit") {
        $rank_id = $_POST['rank_id'];
        updateRank($rank_id, $rank_number, $total_points);
    } elseif ($actionType == "Delete") {
        $rank_id = $_POST['rank_id'];
        deleteRank($rank_id);
    }
}

$rank = selectRank();
include "view-rank.php";
include "view-rank-newform.php";
include "view-footer.php";
?>
