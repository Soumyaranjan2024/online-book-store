<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Haven - Fiction Only</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #4b2e83;
            color: white;
            padding: 1.5rem;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 2rem;
        }

        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1.5rem;
        }

        .book {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            text-align: center;
            transition: transform 0.2s ease;
        }

        .book:hover {
            transform: translateY(-5px);
        }

        .book img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 5px;
        }

        .book-title {
            margin-top: 0.75rem;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header>
        <h1>Book Haven - Fiction Collection</h1>
    </header>

    <div class="container">
        <div class="book-grid">
            <div class="book">
                <img src="https://via.placeholder.com/150x220?text=Fiction+Book+1" alt="Fiction Book 1" />
                <div class="book-title">The Whispering Forest</div>
            </div>
            <div class="book">
                <img src="https://via.placeholder.com/150x220?text=Fiction+Book+2" alt="Fiction Book 2" />
                <div class="book-title">Tales of the Stars</div>
            </div>
            <div class="book">
                <img src="https://via.placeholder.com/150x220?text=Fiction+Book+3" alt="Fiction Book 3" />
                <div class="book-title">Echoes of Tomorrow</div>
            </div>
            <!-- Add more books here -->
        </div>
    </div>

</body>

</html>