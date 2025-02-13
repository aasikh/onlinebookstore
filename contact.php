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
    /* Navbar Styles */
.navbar {
    background-color: #131921; /* Dark Amazon-like background */
    color: white;
    padding: 15px 0;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.logo img {
    height: 40px; /* Adjust the size of your logo */
    width: auto;
}

.search-bar {
    display: flex;
    width: 40%;
}

.search-bar input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px 0 0 5px;
}

.search-bar button {
    padding: 11px;
    background-color: #febd69; /* Search button color */
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.search-bar input:focus, .search-bar button:focus {
    outline: none;
}

.navbar-links {
    display: flex;
    align-items: center;
    gap: 15px;
}

.navbar-links a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    padding: 0 10px;
}

.navbar-links a:hover {
    background-color: #555;
    border-radius: 3px;
}

.cart-icon {
    display: flex;
    align-items: center;
    position: relative;
}

.cart-icon img {
    width: 24px;
    height: 24px;
}

.cart-count {
    font-size: 12px;
    font-weight: bold;
    color: #ff9900; /* Cart count color */
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: #ff9900;
    padding: 2px 6px;
    border-radius: 50%;
}

</style>
<body>

<!-- Navbar Section -->
<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="Online Store Logo">
            </a>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search for products, brands and more" />
            <button>Search</button>
        </div>

        <!-- Navbar Links -->
        <div class="navbar-links">
            <a href="index.php">Home</a>
            <a href="categories.php">Categories</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>

            <?php if (isset($_SESSION['username'])): ?>
                <a href="profile.php">Hello, <?php echo $_SESSION['username']; ?></a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
            <a href="cart.php" class="cart-icon">
                <img src="assets/images/cart-icon.png" alt="Cart">
                <span class="cart-count">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];
                        // Fetch the total number of items in the cart
                        $sql = "SELECT SUM(quantity) AS cart_count FROM cart WHERE user_id = '$user_id'";
                        $result = $conn->query($sql);
                        $cart_count = $result->fetch_assoc()['cart_count'];
                        echo $cart_count > 0 ? $cart_count : '';
                    }
                    ?>
                </span>
            </a>
        </div>
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
                <p><strong>Email:</strong> support@onlinestore.com</p>
                <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                <p><strong>Address:</strong> 123 Online Store St., Booktown, USA</p>

                <h4>Follow Us:</h4>
                <a href="#" class="btn btn-primary">Facebook</a>
                <a href="#" class="btn btn-primary">Instagram</a>
                <a href="#" class="btn btn-primary">Twitter</a>
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
                <p>Email: support@onlinestore.com</p>
                <p>Phone: +1 (123) 456-7890</p>
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
