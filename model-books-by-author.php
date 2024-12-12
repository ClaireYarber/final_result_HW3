<?php
function selectBooksByAuthor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.book_id, book_number, book_description, year, month, day FROM `book` c join page s on s.book_id = c.book_id where s.Author_id=?");
        $stmt->bind_param("i", $iid);
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
