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

// Run SELECT query for genres
$query_genres = "SELECT * FROM genres";
$result_genres = mysqli_query($connection, $query_genres);

// Check if query was successful
if ($result_genres && mysqli_num_rows($result_genres) > 0) {
    echo "<div class='genre'>";
    // Fetch data from the result set
    while ($row = mysqli_fetch_assoc($result_genres)) {
        // Display each genre
        echo "<p>{$row['genre_name']}</p>";
    }
    echo "</div>";

    // Free result set
    mysqli_free_result($result_genres);
} else {
    echo "No genres found";
}

// Close connection
mysqli_close($connection);
?>
