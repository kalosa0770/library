<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['author'])) {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    // Update the book in the database
    $stmt = $conn->prepare("UPDATE books SET title = ?, author = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $author, $id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to update book"]);
    }

    $stmt->close();
    $conn->close();
}
?>
