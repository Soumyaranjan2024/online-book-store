<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - BookVerse</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      color: #333;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      padding: 60px 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
    }

    .header h1 {
      font-size: 42px;
      color: #4B0082;
    }

    .header p {
      font-size: 18px;
      color: #555;
    }

    .contact-section {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .contact-info {
      flex: 1;
      min-width: 280px;
    }

    .contact-info h3 {
      color: #4B0082;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .contact-info p {
      font-size: 16px;
      margin: 10px 0;
    }

    .contact-info i {
      color: #4B0082;
      margin-right: 8px;
    }

    .contact-form {
      flex: 1;
      min-width: 300px;
    }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #4B0082;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 15px;
      background: #f9f9ff;
    }

    .contact-form textarea {
      resize: vertical;
      height: 120px;
    }

    .contact-form button {
      background: #4B0082;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background: #360061;
    }

    @media (max-width: 768px) {
      .contact-section {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you. Reach out with your questions, feedback, or ideas!</p>
    </div>

    <div class="contact-section">
      <div class="contact-info">
        <h3>📍 Address</h3>
        <p>123 Book Lane, Knowledge City,<br>Bhubaneswar, 110001</p>

        <h3>📞 Phone</h3>
        <p>+91-98765-43210</p>

        <h3>✉️ Email</h3>
        <p>support@bookhaven.com</p>

        <h3>🕒 Working Hours</h3>
        <p>Mon - Sat: 9:00 AM – 6:00 PM</p>
      </div>

      <div class="contact-form">
        <label>Your Name</label>
        <input type="text" placeholder="Enter your name" disabled>

        <label>Your Email</label>
        <input type="email" placeholder="Enter your email" disabled>

        <label>Subject</label>
        <input type="text" placeholder="Subject" disabled>

        <label>Message</label>
        <textarea placeholder="Your message" disabled></textarea>

        <button disabled>Send Message</button>
        <p style="color: #777; font-size: 14px; margin-top: 10px;">(Form disabled for now. Contact us via email or phone.)</p>
      </div>
    </div>
  </div>
</body>
</html>
