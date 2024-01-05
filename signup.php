<?php
// Connect to MySQL (replace these variables with your actual database credentials)

$conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");


// Handle registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert user data into the database
    $sql = "INSERT INTO sign_up (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
