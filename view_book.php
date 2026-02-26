<?php
include 'db_connect.php';
 
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $sql = "SELECT * FROM books WHERE book_id = $book_id";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $book = mysqli_fetch_assoc($result);
    } else {
        echo "Book not found.";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <h2>Book Details</h2>
    <?php if (!empty($book)) { ?>
        <p><strong>Title:</strong> <?php echo $book['title']; ?></p>
        <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
        <p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
        <p><strong>Published Date:</strong> <?php echo $book['published_date']; ?></p>
    <?php } ?>
</body>
</html>