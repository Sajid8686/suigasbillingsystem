<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sui Gas Billing System</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    
  </head>
  <body>
  <?php
        include 'navbar.php';
    ?>
    <div class="section-1" style="padding: 100px;">
    <h1 style="text-align: center;">Add Bill</h1>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");
        $bil_id = $_GET['id'];
        $sql = "SELECT * FROM add_bill WHERE bill_id = '{$bil_id}'";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
    ?>

    <form action="update_data.php" method="post">

   		<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bill ID</label>
            <input type="hidden" name="bill_id" value="<?php echo $row['bill_id'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
   		<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Connection ID</label>
            <input type="number" name="consumerID" value="<?php echo $row['consumer_id'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Billing Month</label>
          <input type="text" name="billing_month" value="<?php echo $row['billing_month'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Current Reading</label>
            <input type="number" name="current_reading" value="<?php echo $row['current_reading'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Previous Reading</label>
          <input type="number" name="previous_reading" value="<?php echo $row['previous_reading'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Total Units</label>
          <input type="number" name="total_units" value="<?php echo $row['total_units'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Unit Price</label>
          <input type="number" name="unit_price" value="<?php echo $row['unit_price'];?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Final Amount</label>
          <input type="number" name="final_amount" value="<?php echo $row['final_amount'];?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Due Date</label>
          <input type="date" name="due_date" value="<?php echo $row['due_date'];?>" class="form-control" id="exampleInputPassword1">
        </div>
       <input class="submit" type="submit" value="Update">
        <!-- <button style = "background-color: #3ed0c5" type="submit" class="btn btn-primary">Update</button> -->
      </form>
      <?php
            }}
?>

      </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
