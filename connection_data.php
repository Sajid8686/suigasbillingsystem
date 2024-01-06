<?php

    $con_ID = $_POST['connectionID'];
    $con_customerName = $_POST['customer_name'];
    $con_Type = $_POST['connection_type'];
    $con_Date = $_POST['connection_date'];
    $con_occupation = $_POST['occupation'];
    $con_address = $_POST['address'];


    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "INSERT INTO add_connection(10_dcid,customer_name,connection_type,connection_date,occupation,address) VALUES('{$con_ID}','{$con_customerName}','{$con_Type}','{$con_Date}','{$con_occupation}','{$con_address}')";
   
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/suigasbillingsystem/view_connection.php");

    mysqli_close($conn);
?>