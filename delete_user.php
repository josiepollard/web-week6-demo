<?php
include 'db_connect.php';
 
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM users WHERE user_id=$user_id";
    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>