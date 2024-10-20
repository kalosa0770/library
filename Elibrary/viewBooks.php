<?php
// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching books from the database
$sql = "SELECT id, title, author FROM books";
$result = $conn->query($sql);

// Checking if there are any books
if ($result->num_rows > 0) {
    // Outputting the data for each book
    echo "<div class='book-list'>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='book-item' data-id='" . $row['id'] . "'>";
            echo "<h4>" . $row['title'] . "</h4>";
            echo "<p>Author: " . $row['author'] . "</p>";
            echo "<div class='btn'>";
                echo "<button class='download' id='download'>Download</button>";
                echo "<button class='save' id='save'>Save</button>";
            echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p>No books available at the moment.</p>";
}


$conn->close();
?>

<script>
    const download = document.getElementById("download").addEventListener("click", function() {
        alert("The book has been downloaded");
    });


    const saveBook = document.getElementById("save");
    saveBook.addEventListener("click", function() {
        alert("The book has been saved to library");
    })
    
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>County Library</title>
    <style>

    .book-list {
        text-align: center;
        align-items: center;
        justify-content: center;
    }
         .btn {
        margin-top: 10px;
    }

    /* Style for the buttons */
    .btn button {
        background-color: #3498db; 
        color: white;              
        padding: 10px 20px;         
        border: none;              
        border-radius: 5px;        
        cursor: pointer;           
        margin-right: 10px;        
        font-size: 14px;           
    }

   
    .btn button:hover {
        background-color: #2980b9; 
    }

   
    .btn #download {
        background-color: #2ecc71; 
    }

    
    .btn #save {
        background-color: #e74c3c;
    }
    </style>
</head>
<body>
 
</body>
</html>





