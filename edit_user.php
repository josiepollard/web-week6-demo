<?php
include 'db_connect.php'; 
 
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "User not found.";
        exit;
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User Details</h2>
    <form method="POST" action="update_user.php">
        <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo $user['first_name']; ?>" required><br>
        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $user['last_name']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>