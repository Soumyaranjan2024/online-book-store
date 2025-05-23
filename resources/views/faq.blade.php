<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ - Bright Pages</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #e3f2fd;
            color: #0d47a1;
        }

        header {
            background-color: #0d47a1;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.8em;
        }

        header p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #bbdefb;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .faq {
            background: white;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .faq-header {
            padding: 20px;
            cursor: pointer;
            background-color: #e3f2fd;
            color: #1565c0;
            font-weight: bold;
            font-size: 1.1em;
            position: relative;
        }

        .faq-header::after {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 1.5em;
            transition: transform 0.3s ease;
        }

        .faq.active .faq-header::after {
            content: '−';
            transform: rotate(180deg);
        }

        .faq-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
            padding: 0 20px;
            background-color: #f1f8ff;
            color: #37474f;
        }

        .faq.active .faq-body {
            padding: 20px;
            max-height: 500px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Frequently Asked Questions</h1>
        <p>Your questions, answered clearly</p>
    </header>

    <div class="container">
        <div class="faq">
            <div class="faq-header">What is Bright Pages?</div>
            <div class="faq-body">
                <p>Bright Pages is an online bookstore and platform that curates personalized book recommendations,
                    supports independent authors, and delivers stories that inspire.</p>
            </div>
        </div>

        <div class="faq">
            <div class="faq-header">How do I track my order?</div>
            <div class="faq-body">
                <p>Once your order is placed, you’ll receive a confirmation email with tracking information. You can
                    also log into your account to view your order history.</p>
            </div>
        </div>

        <div class="faq">
            <div class="faq-header">Can I return or exchange a book?</div>
            <div class="faq-body">
                <p>Yes! We accept returns within 14 days of delivery. Books must be in original condition. Email
                    support@brightpages.com to initiate a return.</p>
            </div>
        </div>

        <div class="faq">
            <div class="faq-header">How can I become a contributor?</div>
            <div class="faq-body">
                <p>We love working with new voices. Visit our “Write With Us” page to learn more about submitting
                    content or becoming a regular contributor.</p>
            </div>
        </div>

        <div class="faq">
            <div class="faq-header">Do you ship internationally?</div>
            <div class="faq-body">
                <p>Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by location and will
                    be calculated at checkout.</p>
            </div>
        </div>
    </div>

    <script>
        const faqs = document.querySelectorAll(".faq");

        faqs.forEach(faq => {
            faq.addEventListener("click", () => {
                faq.classList.toggle("active");
            });
        });
    </script>

</body>

</html>