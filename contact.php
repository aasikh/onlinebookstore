<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Online Store</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
    * Optional custom styles for the images */
 .img-fluid {
            width: 100%;
            height: auto;
        }
/* Basic styles for the navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #131921;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 100px;
            padding-left: 20px;
        }

        .logo img {
            width: 100%;
        }

        .search-bar {
            display: flex;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
            width: 100%;
        }

        .search-bar input[type="text"] {
            width: 80%;
            padding: 8px;
            margin: 0;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .search-bar button {
            padding: 8px 16px;
            background-color: #f2a900;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #f2a900;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .search-bar input[type="text"] {
                width: 70%;
            }

            .nav-links {
                display: none; /* Hide links on mobile */
            }

            .search-bar {
                justify-content: center;
            }
        }

</style>
<body>

<nav>
    <!-- Logo -->
    <div class="logo">
        <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon"></a>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" placeholder="Search Amazon" name="search">
        <button type="submit">Search</button>
    </div>

    <!-- Navbar Links -->
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="index.php">Login</a>
        <a href="index.php">Signup</a>
    </div>
</nav>

<!-- Contact Us Section -->
<div class="contact-section">
    <div class="container">
        <div class="row">
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

            <!-- Contact Information Column -->
            <div class="col-md-6 contact-info">
                <h3>Our Contact Information</h3>
                <p><strong>Email:</strong> aasifmohd1385@gmail.com</p>
                <p><strong>Phone:</strong> +91 (875) 530-1385</p>
                <p><strong>Address:</strong> Navi Mumbai,India,</p>

                <h4>Follow Us:</h4>
                <a href="#" class="btn btn-primary">Linkedin</a>
                <a href="#" class="btn btn-primary">Twitter</a>
                <a href="#" class="btn btn-primary">Instagram</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>We are an online bookstore offering a wide range of books in various categories. Enjoy browsing and purchasing your favorite books!</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a href="categories.php" class="text-white">Categories</a></li>
                    <li><a href="about.php" class="text-white">About Us</a></li>
                    <li><a href="contact.php" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: aasifmohd1385@gmail.com</p>
                <p>Phone: +91 (875) 530-1385</p>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="row mt-4">
            <div class="col text-center">
                <p>&copy; <?php echo date("Y"); ?> Online Bookstore. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
