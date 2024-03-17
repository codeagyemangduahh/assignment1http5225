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

// Run SELECT query with JOIN to retrieve author names and their corresponding book titles
$query_authors = "SELECT authors.author_name, books.title
                  FROM authors
                  INNER JOIN books ON authors.author_name = books.author";
$result_authors = mysqli_query($connection, $query_authors);

// Check if query was successful
if ($result_authors && mysqli_num_rows($result_authors) > 0) {
    echo "<div class='author'>";
    // Fetch data from the result set
    while ($row = mysqli_fetch_assoc($result_authors)) {
        // Display each author and their corresponding book titles
        echo "<p>{$row['author_name']} - {$row['title']}</p>";
    }
    echo "</div>";

    // Free result set
    mysqli_free_result($result_authors);
} else {
    echo "No authors found";
}

// Close connection
mysqli_close($connection);
?>
