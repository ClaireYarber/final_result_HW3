function selectBooksByAuthor($author_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT book_id, book_name, book_description FROM `book` WHERE author_id = ?");
        $stmt->bind_param("i", $author_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
