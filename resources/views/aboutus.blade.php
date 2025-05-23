<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - BookVerse</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f3f0ff;
      color: #333;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 60px 20px;
    }

    h2 {
      text-align: center;
      font-size: 40px;
      margin-bottom: 40px;
      color: #4B0082;
    }

    .about-content {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }

    .about-image {
      flex: 1;
      min-width: 300px;
    }

    .about-image img {
      width: 100%;
      border-radius: 12px;
      border: 4px solid #FFD700;
    }

    .about-text {
      flex: 1;
      min-width: 300px;
    }

    .about-text h3 {
      font-size: 26px;
      margin-bottom: 15px;
      color: #4B0082;
    }

    .about-text p {
      line-height: 1.7;
      margin-bottom: 15px;
      color: #444;
    }

    .about-text h4 {
      font-size: 20px;
      margin-top: 20px;
      color: #4B0082;
    }

    .features-list {
      list-style-type: square;
      padding-left: 20px;
      color: #444;
    }

    .features-list li::marker {
      color: #FFD700;
    }

    .story-section {
      margin-top: 60px;
      text-align: center;
      background-color: #fff8dc;
      padding: 40px;
      border-radius: 16px;
    }

    .story-section h3 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #4B0082;
    }

    .story-section p {
      max-width: 800px;
      margin: 0 auto;
      line-height: 1.8;
      color: #333;
    }

    @media (max-width: 768px) {
      .about-content {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>About Us</h2>

    <div class="about-content">
      <div class="about-image">
        <img src="{{ asset('images/about-bookstore.jpg') }}" alt="About BookVerse">
      </div>
      <div class="about-text">
        <h3>Who We Are</h3>
        <p>
          Welcome to <strong>BooksHaven</strong> – your online destination for everything books. Whether you're a passionate reader or a curious learner, our bookstore brings stories, knowledge, and adventures to your fingertips.
        </p>
        <p>
          We believe that books can change lives. That’s why our mission is to connect readers with books they'll love, through an easy and joyful shopping experience.
        </p>
        <h4>Why Choose Us?</h4>
        <ul class="features-list">
          <li>Over 1 million titles in all genres</li>
          <li>Lightning-fast nationwide delivery</li>
          <li>Secure checkout & friendly return policy</li>
          <li>Book-loving customer support</li>
        </ul>
      </div>
    </div>

    <div class="story-section">
      <h3>Our Story</h3>
      <p>
        It all started in a small dorm room in 2020 with two friends and a shared passion for books. Today, BookVerse has grown into a vibrant community of readers, offering thousands of titles and serving book lovers across the country. Our journey continues with every story we deliver.
      </p>
    </div>
  </div>
</body>
</html>
