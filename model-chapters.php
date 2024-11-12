<?php
function selectChapters() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT chapter_id, chapter_name, chapter_number FROM `chapter`");
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
