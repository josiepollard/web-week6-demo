<?php
include 'db_connect.php';
 
if (isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];
    $sql = "SELECT * FROM books WHERE book_id = $book_id";
    $result = mysqli_query($conn, $sql);
    $book = mysqli_fetch_assoc($result);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    
    $sql = "UPDATE books SET title='$title', author='$author', price='$price' WHERE book_id=$book_id";
    if (mysqli_query($conn, $sql)) {
        echo "Book updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>