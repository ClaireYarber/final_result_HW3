<?php
function selectF1Drivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name, country FROM `f1driver`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

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

// New function to select Grand Prix records by F1 driver ID
function selectGPByF1Driver($f1driver_id) {
    try {
        $conn = get_db_connection();
        // Prepare SQL query to fetch Grand Prix records for a specific F1 driver
        $stmt = $conn->prepare("SELECT * FROM `gp` WHERE `f1driver_id` = ?");
        $stmt->bind_param("i", $f1driver_id);  // Bind the F1 driver ID as an integer
        $stmt->execute();
        $result = $stmt->get_result();  // Execute and get result
        $conn->close();
        return $result;  // Return the result (associated array)
    } catch (Exception $e) {
        $conn->close();
        throw $e;  // If error occurs, throw the exception
    }
}
?>

