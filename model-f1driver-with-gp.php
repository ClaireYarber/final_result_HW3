<?php
function selectf1drivers() {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name, country FROM `f1driver` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}
?>

<?php
function selectgpbyf1driver($fid) {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT r.rank_id, rank_number, total_points, gp_name, country, day_time FROM `rank` r JOIN gp g ON g.rank_id = r.rank_id WHERE g.f1driver_id = ?");
        $stmt->bind_param("i", $fid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        if ($conn) {
            $conn->close();
        }
        throw $e;
    }
}
?>
