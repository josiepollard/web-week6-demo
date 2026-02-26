# web-wee6-demo
follows on from https://github.com/josiepollard/web-week5-demo

    Mock bookstore that uses a database. lists all books which can then be viewed individually
    
    files need to go into C:\xampp\htdocs
    
    created a db in XAMPP called bookstore. SQL query with the following:
    
        CREATE TABLE books (
            book_id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            author VARCHAR(100),
            price DECIMAL(10,2),
            published_date DATE
        );
         
        INSERT INTO books (title, author, price, published_date) VALUES
        ('Web Application Development', 'Holliday Clara  ', 10.99, '2024-04-12'),
        ('PHP & MySQL', 'Leah Collins', 9.99, '2025-06-08'),
        ('React Javascript Framework', 'Sony Shaino ', 12.50, '2024-05-13');
    then run http://localhost/display_all.php while running xampp database
