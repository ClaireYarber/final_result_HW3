<?php
function selectcostofdamage() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT costofdamage_id, cod_brand, cod_cost, f1driver_id FROM `costofdamage` ");
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
