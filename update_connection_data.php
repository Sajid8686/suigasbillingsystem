<?php

    $con_ID = $_POST['connectionID'];
    $con_tdcid = $_POST['tdcid'];
    $con_customer_name = $_POST['customer_name'];
    $con_connection_type = $_POST['connection_type'];
    $con_connection_date = $_POST['connection_date'];
    $con_occupation = $_POST['occupation'];
    $con_address = $_POST['address'];


    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "UPDATE add_connection SET tdcid='{$con_tdcid}', customer_name='{$con_customer_name}', connection_type='{$con_connection_type}', connection_date='{$con_connection_date}', occupation='{$con_occupation}', addresse='{$con_address}' WHERE connection_id='{$con_ID}'";
   
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/suigasbillingsystem/view_connection.php");

    mysqli_close($conn);
?>