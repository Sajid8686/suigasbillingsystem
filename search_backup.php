<?php

$conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the search term from the form
    $searchTerm = $_POST["consumer_number"];

    // Perform a MySQL query to search for data
    $sql = "SELECT * FROM add_bill WHERE consumer_id LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    // Display the search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output the results as needed
            echo "ID: " . $row["bill_id"] . " - consumer ID: " . $row["consumer_id"] . "<br>";
        }
    } else {
        echo "No results found";
    }
}

// Close the database connection
$conn->close();
?>
