<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sui Gas Billing System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

</head>
  <body class="content">
    <div class="navbar">
      <div class="title">
        <a href="#" ><img class="logo-icon" src="./assets/icons8-m-67.png" alt=""> Mepco</a>
      </div>
      <div class="nav-links">
        <a class="home" href="#">Home</a>
        <a  class="about" href="#">About Us</a>
        <a class="contact" href="#">Contact Us</a>
      </div>
  </div>

  <div class="top" style="padding: 16px;">
      <p>Simplify the electrcity bill payment application process for you and your loved ones </p>
  </div>
<div class="main">
  <form class="main-form" action="user_pannel.php" method="post">
      <div class="inputform"> 
      <label for="exampleInputEmail1" class="form-label">Reference No:</label>
      <input type="number" name="consumer_number" placeholder="Enter 10-digit reference no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" value="search" class="btn btn-primary">Search</button> 
  </form>
</div>

<div class="svg-animation">
 
<svg id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150" style="position: fixed; width: 100%; height: auto; bottom: 0;">
  <path d="M 0,400 L 0,75 C 74.7431885125184,82.50957290132548 149.4863770250368,90.01914580265097 210,94 C 270.5136229749632,97.98085419734903 316.7976804123711,98.43298969072164 376,88 C 435.2023195876289,77.56701030927836 507.3229013254787,56.248895434462455 573,57 C 638.6770986745213,57.751104565537545 697.9107142857143,80.57142857142857 750,80 C 802.0892857142857,79.42857142857143 847.0342415316642,55.46539027982327 904,41 C 960.9657584683358,26.534609720176732 1029.9523195876288,21.567010309278345 1094,38 C 1158.0476804123712,54.432989690721655 1217.1564801178204,92.26656848306332 1274,102 C 1330.8435198821796,111.73343151693668 1385.42175994109,93.36671575846833 1440,75 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#3ed0c5" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
  <path d="M 0,400 L 0,175 C 47.3159057437408,183.91550073637703 94.6318114874816,192.83100147275405 149,179 C 203.3681885125184,165.16899852724595 264.7886597938144,128.59149484536084 340,139 C 415.2113402061856,149.40850515463916 504.2135493372608,206.80301914580266 559,208 C 613.7864506627392,209.19698085419734 634.3571428571429,154.19642857142856 696,141 C 757.6428571428571,127.80357142857143 860.3578792341679,156.41126656848306 924,161 C 987.6421207658321,165.58873343151694 1012.2113402061855,146.1585051546392 1065,139 C 1117.7886597938145,131.8414948453608 1198.79675994109,136.95471281296025 1266,145 C 1333.20324005891,153.04528718703975 1386.601620029455,164.0226435935199 1440,175 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#3ed0c5" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
  <path d="M 0,400 L 0,275 C 63.77264359351989,275.27871870397644 127.54528718703978,275.5574374079529 192,277 C 256.4547128129602,278.4425625920471 321.5914948453607,281.04896907216494 372,281 C 422.4085051546393,280.95103092783506 458.08873343151697,278.2466863033873 506,280 C 553.911266568483,281.7533136966127 614.0535714285713,287.9642857142857 694,285 C 773.9464285714287,282.0357142857143 873.6969808541975,269.89617083946973 932,259 C 990.3030191458025,248.10382916053024 1007.1585051546392,238.45103092783506 1060,247 C 1112.8414948453608,255.54896907216494 1201.668998527246,282.29970544918996 1271,290 C 1340.331001472754,297.70029455081004 1390.165500736377,286.350147275405 1440,275 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#3ed0c5" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-2"></path></svg>
  

  </body> 
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
    <script src="./src/index.js"></script>
    </div> 
</html>