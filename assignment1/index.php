<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">Bookstore</h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="#books">Books</a></li>
                    <li><a href="#authors">Authors</a></li>
                    <li><a href="#genres">Genres</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="books" class="section">
        <div class="container">
            <h2 class="section-title">Books</h2>
            <?php include 'books.php'; ?>
        </div>
    </section>

    <section id="authors" class="section">
        <div class="container">
            <h2 class="section-title">Authors</h2>
            <?php include 'authors.php'; ?>
        </div>
    </section>

    <section id="genres" class="section">
        <div class="container">
            <h2 class="section-title">Genres</h2>
            <?php include 'genres.php'; ?>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Bookstore. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
