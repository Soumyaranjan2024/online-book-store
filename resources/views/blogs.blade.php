<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Bright Pages</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #e3f2fd;
            color: #0d47a1;
        }

        header {
            background: #0d47a1;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .blog-post {
            background: white;
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-post h2 {
            margin-top: 0;
            color: #1565c0;
        }

        .blog-post .date {
            font-size: 0.9em;
            color: #78909c;
            margin-bottom: 10px;
        }

        .blog-post p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #37474f;
        }

        .read-more {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #42a5f5;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .read-more:hover {
            background: #1e88e5;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 2em;
            }

            .blog-post h2 {
                font-size: 1.4em;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Bright Pages Blog</h1>
        <p>Insights, inspiration, and stories from the world of books</p>
    </header>

    <div class="container">
        <div class="blog-post">
            <h2>5 Must-Read Novels for Summer 2025</h2>
            <div class="date">May 15, 2025</div>
            <p>
                Whether you're lounging on a beach or curled up in your favorite chair, these five novels will take you
                on unforgettable adventures...
            </p>
            <a href="#" class="read-more">Read More</a>
        </div>

        <div class="blog-post">
            <h2>Behind the Scenes: How We Curate Books</h2>
            <div class="date">May 8, 2025</div>
            <p>
                Ever wondered how we choose which books to feature? Here’s a sneak peek into the curation process that
                keeps our readers coming back...
            </p>
            <a href="#" class="read-more">Read More</a>
        </div>

        <div class="blog-post">
            <h2>10 Classic Authors Every Reader Should Know</h2>
            <div class="date">April 30, 2025</div>
            <p>
                From Jane Austen to Chinua Achebe, here are ten authors who changed literature forever — and why their
                works still matter today...
            </p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </div>

</body>

</html>