<?php
include 'db_connect.php';
 
if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $sql = "DELETE FROM books WHERE book_id=$book_id";
    if (mysqli_query($conn, $sql)) {
        echo "Book deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>