<?php

    $bil_id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "DELETE FROM add_bill WHERE bill_id= {$bil_id}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    header("Location: http://localhost/suigasbillingsystem/view_bill.php");

    mysqli_close($conn);

?>