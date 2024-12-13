<?php
function selectRank() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT rank_id, rank_number, total_points FROM `rank` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertRank($rank_number, $total_points) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `rank` (rank_number, total_points) VALUES (?, ?)");
        $stmt->bind_param("ii", $rank_number, $total_points);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRank($rank_id, $rank_number, $total_points) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `rank` SET rank_number = ?, total_points = ? WHERE rank_id = ?");
        $stmt->bind_param("iii", $rank_number, $total_points, $rank_id);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRank($rank_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `rank` WHERE rank_id = ?");
        $stmt->bind_param("i", $rank_id);
        $stmt->execute();
        $conn->close();
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
``
