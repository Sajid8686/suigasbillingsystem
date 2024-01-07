
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin-Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
<style>
* {
  box-sizing: border-box;
}
.column-1 {
  float: left;
  width: 25%;
  padding: 0 5px;
}
.row-1 {
    margin: 0 -5px;
    display: flex;
  justify-content: center; /* Centers horizontally */
  align-items: center;

}
.row-1:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column-1 {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}
.card-1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #3ed0c5;
  color: white;
}
.fa {font-size:50px;} 
.section-1 {
    /* display: grid;
    place-items: center; */
}
    </style>
</head>
<body>

<?php
  include 'navbar.php';

  $conn = mysqli_connect("localhost", "root", "", "sui_gas") or die("Connection Failed");

  // Step 2: Execute a query to retrieve data
  $sql = "SELECT 
    (SELECT COUNT(*) FROM add_customer) as count_1,
    (SELECT COUNT(*) FROM add_connection) as count_2,
    (SELECT COUNT(*) FROM add_bill) as count_3";
  $result = $conn->query($sql);

  // Step 3: Fetch and display the count
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    echo "No records found";
  }

  // Close the connection
  $conn->close();
?>

<div class="section-1" style="padding: 100px;">
  <div class="row-1">
    <div class="column-1">
      <div class="card-1">
        <p><i class="fa fa-user"></i></p>
        <h3><?php echo $row["count_1"]; ?></h3>
        <p>Total Customers</p>
      </div>
    </div>

    <div class="column-1">
      <div class="card-1">
        <p><i class="fa fa-check"></i></p>
        <h3><?php echo $row["count_2"]; ?></h3>
        <p>Total Connections</p>
      </div>
    </div>

    <div class="column-1">
      <div class="card-1">
        <p><i class="fa fa-smile-o"></i></p>
        <h3><?php echo $row["count_3"]; ?></h3>
        <p>Total Bills</p>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('.counter').each(function () {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

