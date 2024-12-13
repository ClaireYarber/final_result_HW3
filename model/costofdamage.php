<?php
function selectAllDrivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name FROM f1driver");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectCostOfDamage() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT costofdamage_id, cod_brand, cod_cost, f1driver_id FROM `costofdamage`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCostOfDamage($brand, $cost, $f1driver_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `costofdamage` (`cod_brand`, `cod_cost`, `f1driver_id`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssd", $brand, $cost, $f1driver_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateCostOfDamage($brand, $cost, $f1driver_id, $id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `costofdamage` SET `cod_brand` = ?, `cod_cost` = ?, `f1driver_id` = ? WHERE `costofdamage_id` = ?");
        $stmt->bind_param("ssdi", $brand, $cost, $f1driver_id, $id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCostOfDamage($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `costofdamage` WHERE `costofdamage_id` = ?");
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
