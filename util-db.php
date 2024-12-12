<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'misclair_finalHW3user', 'CY41727jms!', 'misclair_finalHW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
