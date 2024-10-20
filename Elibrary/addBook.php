<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission to add books
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['author'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];

    $stmt = $conn->prepare("INSERT INTO books (title, author) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $author);
    $stmt->execute();
    $stmt->close();
}

// Fetch books from the database
$books = $conn->query("SELECT * FROM books");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>County Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: arial, sans-serif;
            background-color: hsl(0, 0%, 95%);
        }

        header {
            margin: 0;
            text-align: center;
            background-color: hsl(204, 82%, 39%);
            color: white;
            padding: 10px;
            display: flex;
        }

        header h1 {
            font-size: 1.5em;
            text-transform: uppercase;
            padding: 8px;
        }

        .nav-links {
            margin-left: auto;
            text-align: center;
            margin-right: 20px;
            padding: 8px;
            display: flex;
        }

        .inner-nav-links {
            list-style: none;
            display: flex;
            margin-right: 20px;
            padding-right: 20px;
        }

        .inner-nav-links li {
            margin-right: 10px;
            background-color: #000;
            width: 110px;
            border: none;
            border-radius: 4px;
            padding: 4px;
        }

        .inner-nav-links li:hover {
            background-color: hsl(0, 6%, 13%);
        }

        .inner-nav-links li a {
            text-decoration: none;
            color: hsl(0, 0%, 100%);
            font-size: 0.8em;
        }

        .inner-nav-links li a:hover {
            color: hsl(0, 0%, 95%);
        }

        h2 {
            margin-top: 20px;
            margin-left: 20px;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 5px;
            margin-right: 10px;
            border-radius: 5px;
            border: none;
            
        }

        button[type="submit"] {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        #addBookForm {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            width: 50%;
            border-radius: 5px;
            background-color: #1273de;
        }

        button {
            padding: 5px 10px;
        }

        .book {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            align-items: center;
            justify-content: center;
            width: 80%;
            border-radius: 5px;
            background-color: #1273de;
        }

        .book p {
            margin: 0;
            color: #fff;
        }

        .book button {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 15px;
            width: 100px;
        }

        .admin-welcome {
            margin-top: 20px;
            font-size: 1.5em;
            margin-left: 20px;
        }

        p {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>County library</h1>
        <nav class="nav-links">
            <ul class="inner-nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Services</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <h1 class="admin-welcome">Welcome admin</h1>

    <h2>Add a Book</h2>
    <form id="addBookForm" action="addBook.php" method="POST">
        <input type="text" name="title" id="bookTitle" placeholder="Book Title" required>
        <input type="text" name="author" id="bookAuthor" placeholder="Book Author" required>
        <button type="submit">Add Book</button>
    </form>

    <div id="bookList">
        <?php
        if ($books->num_rows > 0) {
            while ($row = $books->fetch_assoc()) {
                echo '<div class="book" id="book-' . $row['id'] . '">';
                echo '<p><strong>Title:</strong> <span class="book-title">' . htmlspecialchars($row['title']) . '</span></p>';
                echo '<p><strong>Author:</strong> <span class="book-author">' . htmlspecialchars($row['author']) . '</span></p>';
                echo '<button class="edit" data-id="' . $row['id'] . '">Edit</button>';
                echo '<button class="delete" data-id="' . $row['id'] . '">Delete</button>';
                echo '</div>';
            }
        } else {
            echo '<p>No books available.</p>';
        }
        ?>
    </div>

    <script>
    // Function to send  requests to PHP scripts for editing or deleting books
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('edit')) {
            // Edit button clicked
            const bookId = event.target.dataset.id;
            const newTitle = prompt("Enter new title:");
            const newAuthor = prompt("Enter new author:");
            
            if (newTitle && newAuthor) {
                // Sends request to update book details
                fetch('editBook.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        id: bookId,
                        title: newTitle,
                        author: newAuthor
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Updates the book's display on the page
                        const bookElement = document.getElementById('book-' + bookId);
                        bookElement.querySelector('.book-title').textContent = newTitle;
                        bookElement.querySelector('.book-author').textContent = newAuthor;
                    } else {
                        alert('Error editing book.');
                    }
                });
            }
        }

        if (event.target.classList.contains('delete')) {
            // Delete button clicked
            const bookId = event.target.dataset.id;

            // Sending request to delete book
            fetch('deleteBook.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    id: bookId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Remove the book from the page
                    const bookElement = document.getElementById('book-' + bookId);
                    bookElement.remove();
                } else {
                    alert('Error deleting book.');
                }
            });
        }
    });
    </script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
