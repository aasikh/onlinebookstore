<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style> 
 /* Optional custom styles for the images */
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
         /* Optional: Styling for the carousel images */
         .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover; /* Keeps images proportional */
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
        <a href="signup.php">Signup</a>
        <a href="login.php">Login</a>
    </div>
</nav>
<body>

<!-- Carousel Wrapper -->
<div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- First Image -->
        <div class="carousel-item active">
            <img src="images/paul-melki-bByhWydZLW0-unsplash.jpg" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="images/carousel1.avif" class="d-block w-100" alt="Image 3">
        </div>
        <!-- Second Image -->
        <div class="carousel-item">
            <img src="images/carousel1.avif" class="d-block w-100" alt="Image 3">
        </div>
    </div>

    <!-- Carousel Controls (Prev and Next buttons) -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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

</html>
