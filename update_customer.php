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
    <h1>Update Customer</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");
        $customer_id = $_GET['id'];
        $sql = "SELECT * FROM add_customer WHERE customer_id = '{$customer_id}'";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <form action="save_data.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Customer ID</label>
          <input type="hidden" name="customer_id" value="<?php echo $row['customer_id'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Customer Name</label>
          <input type="text" name="customer_name" value="<?php echo $row['customer_name'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Contact</label>
          <input type="number" name="contact" value="<?php echo $row['contact'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="E-mail" value="<?php echo $row['email_id'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pwd" value="<?php echo $row['password'];?>" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" name="address" value="<?php echo $row['address'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

          <input class="submit" type="submit" value="Update">
        <!-- <button style = "background-color: #3ed0c5" type="submit" class="btn btn-primary">Submit</button> -->
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
