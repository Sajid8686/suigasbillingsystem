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
    <h1>View Bill</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

        $sql = "SELECT * FROM add_bill";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if(mysqli_num_rows($result)>0){
    ?>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Bill ID</th>
            <th scope="col">Connection ID</th>
            <th scope="col">Billing Month</th>
            <th scope="col">Current Reading</th>
            <th scope="col">Previous Reading</th>
            <th scope="col">Total Units</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Final Amount</th>
            <th scope="col">Due Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            <?php

                while($row = mysqli_fetch_assoc($result)){

            ?>

          <tr>
            <td><?php echo $row['bill_id'] ?></td>
            <td><?php echo $row['consumer_id'] ?></td>
            <td><?php echo $row['billing_month'] ?></td>
            <td><?php echo $row['current_reading'] ?></td>
            <td><?php echo $row['previous_reading'] ?></td>
            <td><?php echo $row['total_units'] ?></td>
            <td><?php echo $row['unit_price'] ?></td>
            <td><?php echo $row['final_amount'] ?></td>
            <td><?php echo $row['due_date'] ?></td>
            <td  style="display: flex; justify-content: center; align-items: center;"><a href="delete_bill.php?id=<?php echo $row['bill_id']; ?>"><img src="./assets/icons8-trash.svg" alt=""></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php  } ?>
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