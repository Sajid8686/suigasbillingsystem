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
    <h1>Add Connection</h1>
    <form action="connection_data.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">10-Digit Connection ID</label>
            <input type="number" name="connectionID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
            <div class="mb-3">
            <label for="customerName" class="form-label">Customer Name</label>
            <select name="customerID" class="form-select" aria-label="Default select example">
                <option selected>Select Customer Name</option>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

                    $sql = "SELECT * FROM add_customer";
                    $result = mysqli_query($conn, $sql) or die("Query Failed");

                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                      <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['customer_name']; ?></option>
                   <?php }
                ?>
            </select>
        </div>
  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Connection Type</label>
            <input type="text" name="connection_type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Connection Date</label>
          <input type="date" name="connection_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Occupation</label>
          <input type="text" name="occupation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <select name="address" class="form-select" aria-label="Default select example">
                <option selected>Select Address</option>
                <?php
                    // Reset the pointer of the result set before fetching addresses
                    mysqli_data_seek($result, 0);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='".$row['connection_id']."'>".$row['address']."</option>";
                    }
                ?>
            </select>
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
