<?php
function selectgpbyrank($rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT r.rank_id, rank_number, total_points, gp_name, country, day_time FROM `rank` r join gp g on g.rank_id = r.rank_id where g.rank_id=?");
        $stmt->bind_param("i", $rid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
