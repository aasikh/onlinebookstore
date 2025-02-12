<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Online Book Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .about-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .about-title {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }
        .about-content {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }
        .about-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigation (Optional) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Online Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <div class="about-section text-center">
        <div class="container">
            <h2 class="about-title">About Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/img6.jpg" alt="About Us Image" class="about-image">
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <p>Welcome to <strong>Online Book Store</strong>! We are your go-to destination for a wide selection of books across all genres. Whether you're looking for the latest bestsellers, timeless classics, or niche titles, we have something for every reader.</p>
                        <p>Our mission is to provide an easy, accessible, and enjoyable way for people to purchase books online. We offer fast shipping, great customer service, and a user-friendly website to ensure a seamless shopping experience for you.</p>
                        <p>At Online Book Store, we believe in the power of reading to inspire, educate, and entertain. Our curated collection of books is handpicked to satisfy the needs and interests of every reader. From fiction to non-fiction, children's books to adult novels, you'll find everything you're looking for!</p>
                        <p>Thank you for choosing us for your reading journey. Happy reading!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
