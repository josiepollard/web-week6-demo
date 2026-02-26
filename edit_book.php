<?php
include 'db_connect.php'; 
 
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $sql = "SELECT * FROM books WHERE book_id = $book_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "book not found.";
        exit;
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h2>Edit Book Details</h2>
    <form method="POST" action="update_book.php">
        <input type="hidden" name="book_id" value="<?php echo $user['book_id']; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $user['title']; ?>" required><br>
        <label>Author:</label>
        <input type="text" name="author" value="<?php echo $user['author']; ?>" required><br>
        <label>Price:</label>
        <input type="text" name="price" value="<?php echo $user['price']; ?>" required><br>
        <button type="submit">Update Book</button>
    </form>
</body>
</html>