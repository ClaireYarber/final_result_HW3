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

function insertF1Driver($name, $country) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `f1driver` (`f1driver_name`, `country`) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $country);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateF1Driver($name, $country, $id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `f1driver` SET `f1driver_name` = ?, `country` = ? WHERE `f1driver_id` = ?");
        $stmt->bind_param("ssi", $name, $country, $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteF1Driver($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `f1driver` WHERE `f1driver_id` = ?");
        $stmt->bind_param("i", $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

