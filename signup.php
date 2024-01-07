<?php
// Connect to MySQL (replace these variables with your actual database credentials)




// Handle registration form submission
if (isset($_POST["register"])) {
    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT email FROM sign_up WHERE email = '$email'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if(mysqli_num_rows($result)> 0){
        echo "Email already Exists";
    }
    else{
        $sql1 = "INSERT INTO sign_up (email, password) VALUES ('$email', '$password')";

        if(mysqli_query($conn, $sql1)){
            header("Location: http://localhost/suigasbillingsystem/adminForm.php");
        }
    }
}

$conn->close();
?>
