<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the search term from the form
    $searchTerm = $_POST["search"];

    // Perform a MySQL query to search for data
    $sql = "SELECT * FROM your_table_name WHERE column_name LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Display the search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output the results as needed
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "No results found";
    }
}

// Close the database connection
$conn->close();
?>
