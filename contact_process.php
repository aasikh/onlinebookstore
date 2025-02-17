<?php
// contact_process.php: This file processes the form data and inserts it into the database

session_start();
include('config.php'); // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data and sanitize it to prevent SQL injection
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Basic validation: Check if all fields are filled in
    if (!empty($name) && !empty($email) && !empty($message)) {

        // Insert the data into the contact_form table
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

        // Check if the insert was successful
        if ($conn->query($sql) === TRUE) {
            // Redirect to a thank you page or display a success message
            echo "Your message has been sent successfully!";
            // Optionally, you can redirect the user to another page (e.g., thank_you.php)
            // header("Location: thank_you.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // If fields are missing
        echo "Please fill in all fields.";
    }
}

// Close the database connection
$conn->close();
?>
