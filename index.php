<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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

/* Mobile responsiveness */
@media (max-width: 768px) {
    .navbar-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .search-bar {
        width: 100%;
    }

    .navbar-links {
        flex-direction: column;
        gap: 10px;
        align-items: flex-start;
    }
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles for the images */
        .img-fluid {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <!-- Container for the Online Book Store -->
    <div class="container-fluid py-5">
        <h2 class="text-center">Online Book Store</h2>
        <div class="container">
            <div class="row">
                <!-- First Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img1.jpg" class="img-fluid" alt="Image 1">
                </div>
                <!-- Second Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img1.jpg" class="img-fluid" alt="Image 2">
                </div>
                <!-- Third Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img1.jpg" class="img-fluid" alt="Image 3">
                </div>
                <!-- Fourth Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img1.jpg" class="img-fluid" alt="Image 4">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3">
        <h2 class="text-center">Online Book Store</h2>
        <div class="container">
            <div class="row">
                <!-- First Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img5.jpg" class="img-fluid" alt="Image 1">
                </div>
                <!-- Second Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img2.jpg" class="img-fluid" alt="Image 2">
                </div>
                <!-- Third Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img3.jpg" class="img-fluid" alt="Image 3">
                </div>
                <!-- Fourth Image Column -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-4">
                    <img src="images\img4.jpg" class="img-fluid" alt="Image 4">
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- Bootstrap JS and dependencies -->
</body>
<!-- Footer Section -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>We are an online bookstore offering a wide range of books in various categories. Enjoy browsing and purchasing your favorite books!</p>
            </div>

            <!-- Quick Links Section -->
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a href="categories.php" class="text-white">Categories</a></li>
                    <li><a href="about.php" class="text-white">About Us</a></li>
                    <li><a href="contact.php" class="text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
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

</html>
