<?php
function insertF1DriverGP($driver_id, $gp_name, $rank_number, $total_points, $country, $day_time) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `gp` (`f1driver_id`, `gp_name`, `rank_number`, `total_points`, `country`, `day_time`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isidss", $driver_id, $gp_name, $rank_number, $total_points, $country, $day_time);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateF1DriverGP($driver_id, $gp_name, $rank_number, $total_points, $country, $day_time, $rank_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `gp` SET `f1driver_id` = ?, `gp_name` = ?, `rank_number` = ?, `total_points` = ?, `country` = ?, `day_time` = ? WHERE `rank_id` = ?");
        $stmt->bind_param("isidssi", $driver_id, $gp_name, $rank_number, $total_points, $country, $day_time, $rank_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteF1DriverGP($rank_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `gp` WHERE `rank_id` = ?");
        $stmt->bind_param("i", $rank_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
