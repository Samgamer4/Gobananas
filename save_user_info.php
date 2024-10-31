<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "shop_db"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_info (name, contact, address) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $contact, $address);

    // Execute statement and check success
    if ($stmt->execute()) {
        echo "<script>alert('Details saved successfully!'); window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Error saving details.'); window.location.href='offers.html';</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
