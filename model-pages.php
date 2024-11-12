<?php
function selectPages() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT page_id, author_id, book_id, year, month, day FROM `page`");
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

