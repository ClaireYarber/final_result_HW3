// <?php
// function selectgpbyf1driver($fid) {
//     try {
//         $conn = get_db_connection();
//         $stmt = $conn->prepare("SELECT r.rank_id, rank_number, total_points, gp_name, country, day_time FROM `rank` r join gp g on g.rank_id = r.rank_id where g.f1driver_id=?");
//         $stmt->bind_param("i", $fid);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $conn->close();
//         return $result;
//     } catch (Exception $e) {
//         $conn->close();
//         throw $e;
//     }
// }
// ?>

<?php
function selectgpbyf1driver($rid) {
    try {
        $conn = get_db_connection();
        // SQL query to get the Grand Prix details based on the Rank ID (rid)
        $stmt = $conn->prepare("SELECT r.rank_id, rank_number, total_points, gp_name, country, day_time 
                                FROM `rank` r 
                                JOIN gp g ON g.rank_id = r.rank_id 
                                WHERE r.rank_id = ?");
        $stmt->bind_param("i", $rid); // Bind the Rank ID to the query
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result; // Return the result set
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

