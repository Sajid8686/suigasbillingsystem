<?php

    $bill_ID = $_POST['bill_id'];
    $bill_consumerID = $_POST['consumerID'];
    $bill_billing_month = $_POST['billing_month'];
    $bill_current_reading = $_POST['current_reading'];
    $bill_previous_reading = $_POST['previous_reading'];
    $bill_total_units = $_POST['total_units'];
    $bill_unit_price = $_POST['unit_price'];
    $bill_final_amount = $_POST['final_amount'];
    $bill_due_date = $_POST['due_date'];


    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

    $sql = "UPDATE add_bill SET consumer_id='{$bill_consumerID}', billing_month='{$bill_billing_month}', current_reading='{$bill_current_reading}', previous_reading='{$bill_previous_reading}', total_units='{$bill_total_units}', unit_price='{$bill_unit_price}', final_amount='{$bill_final_amount}', due_date='{$bill_due_date}' WHERE bill_id='{$bill_ID}'";
   
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/suigasbillingsystem/view_bill.php");

    mysqli_close($conn);
?>