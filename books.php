<?php
include 'db_connect.php';
 
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>
 
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Published Date</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['book_id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['author']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['published_date']; ?></td>

            <td>
                <a href="edit_book.php?book_id=<?php echo $row['book_id']; ?>">Edit</a>
                |
                <a href="delete_book.php?book_id=<?php echo $row['book_id']; ?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>