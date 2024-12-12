// <?php
// function selectF1Drivers() {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name, country FROM `f1driver`");
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $conn->close();
//         return $result;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }
// function insertF1DriverGP($driver_id, $gp_name, $rank_number, $total_points, $country, $day_time) {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("INSERT INTO `gp` (`f1driver_id`, `gp_name`, `rank_number`, `total_points`, `country`, `day_time`) VALUES (?, ?, ?, ?, ?, ?)");
//         $stmt->bind_param("isidss", $driver_id, $gp_name, $rank_number, $total_points, $country, $day_time);
//         $success = $stmt->execute();
//         $conn->close();
//         return $success;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }

// function updateF1DriverGP($driver_id, $gp_name, $rank_number, $total_points, $country, $day_time, $rank_id) {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("UPDATE `gp` SET `f1driver_id` = ?, `gp_name` = ?, `rank_number` = ?, `total_points` = ?, `country` = ?, `day_time` = ? WHERE `rank_id` = ?");
//         $stmt->bind_param("isidssi", $driver_id, $gp_name, $rank_number, $total_points, $country, $day_time, $rank_id);
//         $success = $stmt->execute();
//         $conn->close();
//         return $success;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }

// function deleteF1DriverGP($rank_id) {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("DELETE FROM `gp` WHERE `rank_id` = ?");
//         $stmt->bind_param("i", $rank_id);
//         $success = $stmt->execute();
//         $conn->close();
//         return $success;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }

// // Updated function to select Grand Prix records by F1 driver ID with JOIN
// function selectGPByF1Driver($f1driver_id) {
//     try {
//         $conn = get_db_connection();
//         // Use JOIN to fetch data from both `gp` and `rank` tables
//         $stmt = $conn->prepare("
//             SELECT gp.gp_name, gp.day_time, gp.country, rank.rank_id, rank.rank_number, rank.total_points
//             FROM `gp`
//             JOIN `rank` ON gp.rank_id = rank.rank_id
//             WHERE gp.f1driver_id = ?");
        
//         // Bind the F1 driver ID as an integer
//         $stmt->bind_param("i", $f1driver_id);
//         $stmt->execute();
//         $result = $stmt->get_result();  // Execute and get result
//         $conn->close();
//         return $result;  // Return the result
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;  // If error occurs, throw the exception
//     }
// }

// ?>
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

function insertF1DriverGP($driver_id, $gp_id, $gp_name, $rank_number, $total_points, $country, $day_time) {
    try {
        $conn = get_db_connection();
        
        // Start transaction
        $conn->begin_transaction();
        
        // Insert into `gp` table
        $stmt_gp = $conn->prepare("INSERT INTO `gp` (`f1driver_id`, `gp_id`, `gp_name`, `country`, `day_time`) VALUES (?, ?, ?, ?, ?)");
        $stmt_gp->bind_param("iisss", $driver_id, $gp_id, $gp_name, $country, $day_time);
        $stmt_gp->execute();

        // Get the last inserted gp_id
        $last_gp_id = $conn->insert_id;

        // Insert into `rank` table
        $stmt_rank = $conn->prepare("INSERT INTO `rank` (`rank_id`, `rank_number`, `total_points`) VALUES (?, ?, ?)");
        $stmt_rank->bind_param("iii", $last_gp_id, $rank_number, $total_points);
        $stmt_rank->execute();
        
        // Commit transaction
        $conn->commit();
        
        $stmt_gp->close();
        $stmt_rank->close();
        $conn->close();
        
        return true;
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $conn->rollback();
        $conn->close();
        throw $e;
    }
}

function updateF1DriverGP($driver_id, $gp_id, $gp_name, $rank_number, $total_points, $country, $day_time, $rank_id) {
    try {
        $conn = get_db_connection();
        
        // Start transaction
        $conn->begin_transaction();
        
        // Update `gp` table
        $stmt_gp = $conn->prepare("UPDATE `gp` SET `f1driver_id` = ?, `gp_name` = ?, `country` = ?, `day_time` = ? WHERE `gp_id` = ?");
        $stmt_gp->bind_param("isssi", $driver_id, $gp_name, $country, $day_time, $gp_id);
        $stmt_gp->execute();

        // Update `rank` table
        $stmt_rank = $conn->prepare("UPDATE `rank` SET `rank_number` = ?, `total_points` = ? WHERE `rank_id` = ?");
        $stmt_rank->bind_param("iii", $rank_number, $total_points, $rank_id);
        $stmt_rank->execute();
        
        // Commit transaction
        $conn->commit();
        
        $stmt_gp->close();
        $stmt_rank->close();
        $conn->close();
        
        return true;
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $conn->rollback();
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

function selectGPByF1Driver($f1driver_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT gp.gp_id, gp.gp_name, gp.country, gp.day_time FROM `gp` WHERE gp.f1driver_id = ?");
        $stmt->bind_param("i", $f1driver_id);
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
