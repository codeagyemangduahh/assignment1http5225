<?php
// Database connection parameters
$host = 'localhost'; // my host name
$username = 'root'; // my MySQL username
$password = '28.livefree'; // my MySQL password
$database = 'Bookstore'; // my database name

try {
    $connection = mysqli_connect($host, $username, $password, $database);
    if (!$connection) {
        throw new Exception("Failed to connect to database");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    exit; // Stop execution if connection fails
}

// Run SELECT query with JOIN to fetch data from multiple tables
$query = "SELECT b.title, a.author_name, b.publication_year, g.genre_name
          FROM books b
          JOIN authors a ON b.author = a.author_name
          JOIN genres g ON b.genre = g.genre_name";
$result = mysqli_query($connection, $query);

// Check if query was successful
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Output to confirm loop iteration
        echo "<div class='book'>";
        echo "<h2>{$row['title']}</h2>";
        echo "<p><strong>Author:</strong> {$row['author_name']}</p>";
        echo "<p><strong>Publication Year:</strong> {$row['publication_year']}</p>";
        echo "<p><strong>Genre:</strong> {$row['genre_name']}</p>";
        echo "</div>";
    }

    // Free result set
    mysqli_free_result($result);
} else {
    echo "No books found";
}

// Close connection
mysqli_close($connection);
?>
