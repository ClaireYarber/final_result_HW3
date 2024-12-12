<?php
function selectBooksByAuthor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.book_id, book_number, book_description, year, month, day FROM `book` b join page p on p.book_id = b.book_id where p.Author_id=?");
        $stmt->bind_param("a", $aid);
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
