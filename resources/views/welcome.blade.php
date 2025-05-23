<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven - Your Online Bookstore</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #1a237e;
            color: white;
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .logo span {
            color: #ffc107;
        }

        .search-bar {
            flex-grow: 1;
            max-width: 500px;
            margin: 0 1rem;
        }

        .search-bar form {
            display: flex;
        }

        .search-bar input {
            width: 100%;
            padding: 0.6rem;
            border: none;
            border-radius: 4px 0 0 4px;
        }

        .search-bar button {
            padding: 0 1rem;
            background: #ffc107;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .nav-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .nav-buttons a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
        }

        .nav-buttons a:hover {
            color: #ffc107;
        }

        nav {
            background-color: #283593;
            padding: 0.5rem 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .main-nav {
            display: flex;
            list-style: none;
        }

        .main-nav li {
            margin-right: 1rem;
        }

        .main-nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
            font-weight: 500;
        }

        .main-nav a:hover {
            color: #ffc107;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 2rem;
            border-radius: 8px;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .cta-button {
            background-color: #ffc107;
            color: #333;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            background-color: #ffb300;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #1a237e;
            padding-bottom: 0.5rem;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .book-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
            color: #555;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .book-price {
            font-weight: bold;
            color: #1a237e;
        }

        .discount {
            color: #e53935;
            font-size: 0.9rem;
            margin-left: 0.5rem;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.8rem;
        }

        .add-to-cart {
            background-color: #1a237e;
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 0.5rem;
        }

        .add-to-cart:hover {
            background-color: #283593;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .category-card {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .category-card i {
            font-size: 2rem;
            color: #1a237e;
            margin-bottom: 0.5rem;
        }

        footer {
            background-color: #1a237e;
            color: white;
            padding: 2rem 0;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            padding: 0 1rem;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer-logo span {
            color: #ffc107;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #ffc107;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: white;
            border-radius: 50%;
            color: #1a237e;
            text-align: center;
            line-height: 36px;
        }

        .social-icons a:hover {
            background-color: #ffc107;
        }

        .copyright {
            text-align: center;
            padding: 1rem 0;
            background-color: #0e1442;
            color: white;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }

            .search-bar {
                max-width: 100%;
                margin: 1rem 0;
            }

            .nav-container {
                flex-direction: column;
            }

            .main-nav {
                margin-top: 1rem;
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .book-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">Book<span>Haven</span></div>
            <div class="search-bar">
                <form>
                    <input type="text" placeholder="Search by title, author, or ISBN...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="nav-buttons">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
                <a href="/crt">Cart (0)</a>
            </div>
        </div>
    </header>

    <nav>
        <div class="nav-container">
            <ul class="main-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Bestsellers</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Deals</a></li>
                <li><a href="/ff">About Us</a></li>
                <li><a href="/cc">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <section class="hero">
                <div class="hero-content">
                    <h1>Discover Your Next Favorite Book</h1>
                    <p>Thousands of books at your fingertips. Free shipping on orders over $25.</p>
                    <a href="#" class="cta-button">Shop Now</a>
                </div>
            </section>

            <section>
                <h2 class="section-title">Featured Books</h2>
                <div class="book-grid">
                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">The Silent Patient</div>
                            <div class="book-author">Alex Michaelides</div>
                            <div class="book-price">
                                $16.99
                                <span class="discount">20% OFF</span>
                                <div class="original-price">$21.99</div>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">Atomic Habits</div>
                            <div class="book-author">James Clear</div>
                            <div class="book-price">$18.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">Project Hail Mary</div>
                            <div class="book-author">Andy Weir</div>
                            <div class="book-price">
                                $14.99
                                <span class="discount">25% OFF</span>
                                <div class="original-price">$19.99</div>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">The Midnight Library</div>
                            <div class="book-author">Matt Haig</div>
                            <div class="book-price">$12.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">Educated</div>
                            <div class="book-author">Tara Westover</div>
                            <div class="book-price">$13.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="section-title">Browse Categories</h2>
                <div class="categories">
                    <div class="category-card">
                        <i>📚</i>
                        <div>Fiction</div>
                    </div>

                    <div class="category-card">
                        <i>🔍</i>
                        <div>Mystery</div>
                    </div>

                    <div class="category-card">
                        <i>🚀</i>
                        <div>Sci-Fi</div>
                    </div>

                    <div class="category-card">
                        <i>💼</i>
                        <div>Business</div>
                    </div>

                    <div class="category-card">
                        <i>❤️</i>
                        <div>Romance</div>
                    </div>

                    <div class="category-card">
                        <i>🧠</i>
                        <div>Self-Help</div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="section-title">New Releases</h2>
                <div class="book-grid">
                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">The Invisible Life of Addie LaRue</div>
                            <div class="book-author">V.E. Schwab</div>
                            <div class="book-price">$20.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">Klara and the Sun</div>
                            <div class="book-author">Kazuo Ishiguro</div>
                            <div class="book-price">$22.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">The Four Winds</div>
                            <div class="book-author">Kristin Hannah</div>
                            <div class="book-price">$19.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>

                    <div class="book-card">
                        <img src="/api/placeholder/200/250" alt="Book cover">
                        <div class="book-info">
                            <div class="book-title">The Hill We Climb</div>
                            <div class="book-author">Amanda Gorman</div>
                            <div class="book-price">$9.99</div>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <div class="footer-logo">Book<span>Haven</span></div>
                <p>Your one-stop destination for all your reading needs. Quality books at affordable prices.</p>
                <div class="social-icons">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="Instagram">i</a>
                    <a href="#" title="Pinterest">p</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Customer Service</h3>
                <ul>
                    <li><a href="/cc">Contact Us</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="#">Shipping & Returns</a></li>
                    <li><a href="#">Track Order</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>About Us</h3>
                <ul>
                    <li><a href="ourstory">Our Story</a></li>
                    <li><a href="blogs">Blog</a></li>
                    <li><a href="careers">Careers</a></li>
                    <li><a href="press">Press</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Subscribe</h3>
                <p>Join our newsletter for updates on new releases and exclusive deals.</p>
                <form>
                    <input type="email" placeholder="Your Email Address"
                        style="width: 100%; padding: 0.6rem; margin-top: 0.5rem; border: none; border-radius: 4px;">
                    <button type="submit"
                        style="background-color: #ffc107; color: #333; padding: 0.6rem; width: 100%; border: none; border-radius: 4px; margin-top: 0.5rem; cursor: pointer;">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="copyright">
            © 2025 BookHaven. All rights reserved.
        </div>
    </footer>
</body>

</html>