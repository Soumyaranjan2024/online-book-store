<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books - BookHaven</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #1a237e;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .nav {
            text-align: center;
            background-color: #283593;
            padding: 0.5rem;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: bold;
        }
        .nav a:hover {
            color: #ffc107;
        }
        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
        }
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
        }
        .book-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .book-card:hover {
            transform: translateY(-5px);
        }
        .book-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .book-info {
            padding: 1rem;
        }
        .book-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .book-author {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.5rem;
        }
        .book-price {
            font-weight: bold;
            color: #1a237e;
        }
        .add-to-cart {
            margin-top: 0.5rem;
            width: 100%;
            background-color: #1a237e;
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-to-cart:hover {
            background-color: #3949ab;
        }
    </style>
</head>
<body>
    <header>
        <h1>All Books - BookHaven</h1>
    </header>

    <nav class="nav">
        <a href="/a">Home</a>
        <a href="featured.html">Featured Books</a>
        <a href="newbooks.html">New Releases</a>
        <a href="categories.html">Categories</a>
        <a href="#" id="cart-link">Cart (0)</a>
    </nav>

    <div class="container">
        <div class="book-grid">
            <!-- Sample books - Add more as needed -->
            <div class="book-card">
                <img src="/api/placeholder/200/250" alt="Book cover">
                <div class="book-info">
                    <div class="book-title">A Tale of Light</div>
                    <div class="book-author">Sophie Bright</div>
                    <div class="book-price">$11.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="book-card">
                <img src="/api/placeholder/200/250" alt="Book cover">
                <div class="book-info">
                    <div class="book-title">Into the Mist</div>
                    <div class="book-author">Jordan Hall</div>
                    <div class="book-price">$13.45</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <!-- Repeat similar blocks up to 30 -->
        </div>
    </div>

    <footer>
        <p>&copy; 2025 BookHaven. All rights reserved.</p>
    </footer>

    <script>
        let cartCount = 0;

        function updateCart(bookTitle) {
            cartCount++;
            document.getElementById('cart-link').textContent = `Cart (${cartCount})`;
            const cartUrl = `https://yourcartwebsite.com/cart?add=${encodeURIComponent(bookTitle)}`;
            window.location.href = cartUrl;
        }

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function () {
                const bookTitle = this.closest('.book-card').querySelector('.book-title').textContent;
                updateCart(bookTitle);
            });
        });
    </script>
</body>
</html>
