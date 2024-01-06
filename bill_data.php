<?php

    $bill_consumerID = $_POST['consumerID'];
    $bill_billing_month = $_POST['billing_month'];
    $bill_current_reading = $_POST['current_reading'];
    $bill_previous_reading = $_POST['previous_reading'];
    $bill_total_units = $_POST['total_units'];
    $bill_unit_price = $_POST['unit_price'];
    $bill_final_amount = $_POST['final_amount'];
    $bill_due_date = $_POST['due_date'];


    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "INSERT INTO add_bill(consumer_id,billing_month,current_reading,previous_reading,total_units,unit_price,final_amount,due_date) VALUES('{$bill_consumerID}','{$bill_billing_month}','{$bill_current_reading}','{$bill_previous_reading}','{$bill_total_units}','{$bill_unit_price}','{$bill_final_amount}','{$bill_due_date}')";
   
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/suigasbillingsystem/view_connection.php");

    mysqli_close($conn);
?>