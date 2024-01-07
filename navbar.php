
      <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sui Gas Billing System</title>
    <link rel="stylesheet" href="./navbar.css">  
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="height: 100vh">
    <nav class="navbarr" id="navbar" class="main-navigation">
      <div class="containerr">
        <div class="title">
          <div href="#" class="brand"><img class="logo-icon" src="./assets/icons8-m-67.png" alt=""> Gas-Billing</div>
        </div>
        <button type="button" id="toggleBtn" aria-label="Toggle navigation" class="navbar-toggler">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="menu nav-links">
          <ul class="nav-list">
            <li><a href="http://localhost/suigasbillingsystem/admin_dashboard.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Customer</a>
              <ul class="dropdown-menu">
                <li><a href="addcustomer.php">Add Customer</a></li>
                <li><a href="view_customer.php">View Customers</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Connection</a>
              <ul class="dropdown-menu">
                <li><a href="add_connection.php">Add Connection</a></li>
                <li><a href="view_connection.php">View Connection</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Bill</a>
              <ul class="dropdown-menu">
                <li><a href="add_bill.php">Add Bill</a></li>
                <li><a href="view_bill.php">View Bill</a></li>
              </ul>
            </li>
            <button class="logout-button lg-button"><a class="lg-button" href="logout.php">Logout</a></button>
          </ul>
        </div>
      </div>
    </nav>
      

    <img style="position: fixed; width: 100%; height: auto; bottom: 0;" src="./assets/wave.svg" alt="">

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
  <script src="nav.js"></script>
</html>
