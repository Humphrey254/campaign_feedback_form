<?php
// Capture form data using the $_POST array
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$feedback = htmlspecialchars($_POST['feedback']);
$rating = intval($_POST['rating']);  // Ensure rating is an integer

// Database connection credentials
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "campaign_feedback";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES (?, ?, ?, ?)";

// Prepare and bind the SQL statement to prevent SQL injection
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("sssi", $name, $email, $feedback, $rating);

    // Execute the query and check for errors
    if ($stmt->execute()) {
        echo "<h2>Thank you for your feedback, $name!</h2>";
        echo "<p>Your feedback has been successfully submitted.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<p>Error preparing the statement: " . $conn->error . "</p>";
}

// Close the database connection
$conn->close();
?>

