<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Registration successful!";
        header('Location: login.php');
    } else {
        $_SESSION['error'] = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<style>
      /* Custom styles for the contact form */
      .contact-section {
        background-color: #f4f4f4;
        padding: 50px 0;
    }

    .contact-form {
        background-color: #ffffff;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-form h3 {
        margin-bottom: 20px;
    }

    .contact-form .form-control {
        margin-bottom: 15px;
    }

    .contact-form button {
        background-color: #febd69;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #e9a04f;
    }

    .contact-info {
        margin-top: 50px;
    }
</style>
<body>
<!-- Contact Us Section -->
<div class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Contact Form Column -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>Contact Us</h3>
                    <form action="contact_process.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>

</body>
</html>
