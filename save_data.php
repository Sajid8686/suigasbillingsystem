<?php

   $cstmr_name = $_POST['customer_name'];
   $cstmr_contact = $_POST['contact'];
   $cstmr_email = $_POST['E-mail'];
   $cstmr_password = $_POST['pwd'];
   $cstmr_address = $_POST['address'];


    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "INSERT INTO add_customer(customer_name,contact,email_id,password,address) VALUES('{$cstmr_name}','{$cstmr_contact}','{$cstmr_email}','{$cstmr_password}','{$cstmr_address}')";
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/suigasbillingsystem/view_customer.php");

    mysqli_close($conn);



?>