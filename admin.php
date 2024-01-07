<?php

if (isset($_POST["login"])) {
    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT email, password FROM sign_up WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if(mysqli_num_rows($result)> 0){
        
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];

            header("Location: http://localhost/suigasbillingsystem/admin_dashboard.php");
        }
    }
    else{
       echo "Username and Password not Found";
    }
}

$conn->close();
?>
