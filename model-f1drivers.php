<?php
function selectf1drivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT f1driver_id, f1driver_name, country FROM `f1driver` ");
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
