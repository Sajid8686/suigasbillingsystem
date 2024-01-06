<?php

    $cstmr_id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "DELETE FROM add_customer WHERE customer_id= {$cstmr_id}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    header(" Location: http://localhost/suigasbillingsystem/view_customer.php");

    mysqli_close($conn);

?>