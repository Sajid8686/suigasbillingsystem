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
    <h1>Add Bill</h1>
    <form action="bill_data.php" method="post">
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Customer Name</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Select Customer Name</option>
              <?php
                $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

                $sql = "SELECT * FROM add_connection";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
            
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <option value="<?php echo $row['connection_id'] ?>"><?php echo $row['10_dcid'] ?></option>

                <?php } ?>
            </select>
            </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Billing Month</label>
          <input type="text" name="billing_month" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Current Reading</label>
            <input type="number" name="current_reading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Previous Reading</label>
          <input type="number" name="previous_reading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Total Units</label>
          <input type="number" name="total_units" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Unit Price</label>
          <input type="number" name="unit_price" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Final Amount</label>
          <input type="number" name="final_amount" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Due Date</label>
          <input type="date" name="due_date" class="form-control" id="exampleInputPassword1">
        </div>
       
        <button style = "background-color: #3ed0c5" type="submit" class="btn btn-primary">Submit</button>
      </form>

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
