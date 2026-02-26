<?php
include 'db_connect.php';
 
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE user_id=$user_id";
    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>