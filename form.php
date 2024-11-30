<?php
// Start the session (optional)
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report";  // Updated database name

// Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input data
    $project = $_POST['project'];
    $material_code = $_POST['material_code'];
    $specification = $_POST['specification'];
    $total = $_POST['total'];

    // Prepare and bind the SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO k3inward (Project, Material_Full_Code, Specification, Total) VALUES (?, ?, ?, ?)");  // Updated table name
    $stmt->bind_param("sssi", $project, $material_code, $specification, $total);

    // Execute the statement
    if ($stmt->execute()) {
        // If successful, display alert and redirect
        echo "<script>
                alert('Data uploaded successfully!');
                window.location.href = 'index.php'; // Redirect to another page after success
              </script>";
    } else {
        // If there's an error, display alert and redirect back to the form
        echo "<script>
                alert('Error: " . addslashes($stmt->error) . "');
                window.location.href = 'form.php'; // Redirect back to the form page
              </script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>