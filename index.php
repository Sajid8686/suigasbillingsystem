<!-- <!DOCTYPE html>
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
  <body style="padding: 100px;">
    <h1>User Pannel</h1>
    <form action="user_pannel.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Enter 10-Digit Consumer Number</label>
          <input type="number" name="consumer_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" value="search" class="btn btn-primary">Submit</button>
      </form>


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
</html> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sui Gas Billing System</title>
    <link rel="stylesheet" href="user_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"
    />
  </head>

</head>
  <body class="content">
    <div class="navbar">
      <div class="title">
        <a href="#" >   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0,0,256,256"
style="fill:#000000;">
<g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M24.066,44.453l0.212,-7.854c0,0 -11.42,-3.226 -11.929,-12.481c-0.509,-9.255 11.815,-12.29 11.815,-12.29l0.963,-8.979c0,0 -6.071,-0.892 -15.665,8.193c-9.594,9.085 -3.354,22.458 -3.354,22.458c0,0 5.265,9.764 17.958,10.953z" fill="#3ed0c5"></path><path d="M25,20.212l-0.042,8.109l9.679,-0.17l-0.51,9.467l9.467,0.212l-1.316,-18.212z" fill="#3ed0c5"></path><path d="M42.952,19.662c-0.008,-0.329 -0.275,-0.488 -0.53,-0.48c-5.884,-0.177 -11.773,0.02 -17.632,0.59c-0.198,0.019 -0.327,0.133 -0.402,0.274c-0.108,0.08 -0.186,0.203 -0.188,0.378c-0.033,2.547 -0.067,5.094 -0.1,7.641c-0.003,0.199 0.095,0.329 0.226,0.405c0.08,0.109 0.203,0.188 0.377,0.193c3.094,0.08 6.188,0.099 9.283,0.067c0.047,1.327 0.179,2.657 0.183,3.978c0.002,0.802 -0.145,1.622 -0.274,2.411c-0.128,0.786 -0.241,1.625 -0.546,2.366c-0.124,0.302 0.187,0.641 0.482,0.633c1.34,-0.037 2.682,-0.043 4.022,-0.028c1.871,0.021 3.714,0.201 5.576,0.314c0.254,0.016 0.521,-0.242 0.5,-0.5c-0.498,-6.07 -0.824,-12.153 -0.977,-18.242zM34.524,37.113c0.155,-0.566 0.242,-1.161 0.334,-1.728c0.139,-0.853 0.293,-1.734 0.308,-2.6c0.014,-0.835 -0.112,-1.686 -0.144,-2.523c-0.026,-0.678 -0.045,-1.356 -0.056,-2.034c-0.004,-0.268 -0.226,-0.503 -0.5,-0.5c-3.121,0.039 -6.242,0.017 -9.363,-0.059c0.03,-2.31 0.06,-4.62 0.091,-6.93c5.575,-0.526 11.176,-0.714 16.774,-0.564c0.153,5.738 0.46,11.47 0.92,17.192c-1.679,-0.112 -3.347,-0.258 -5.036,-0.278c-1.109,-0.012 -2.219,0.002 -3.328,0.024z" fill="#010101"></path><path d="M24.39,36.298c-1.414,-0.155 -2.648,-0.955 -3.841,-1.67c-1.138,-0.682 -2.276,-1.389 -3.223,-2.328c-0.471,-0.467 -0.882,-0.989 -1.364,-1.444c-0.541,-0.51 -1.047,-0.971 -1.401,-1.639c-0.613,-1.158 -1.076,-2.501 -1.403,-3.766c-0.882,-3.41 0.739,-6.969 3.235,-9.291c2.227,-2.071 5.071,-2.941 7.903,-3.85c0.154,-0.049 0.321,-0.177 0.349,-0.349c0.48,-2.943 1.001,-5.967 1.027,-8.953c0.002,-0.263 -0.165,-0.413 -0.362,-0.461c-0.019,-0.007 -0.031,-0.019 -0.052,-0.024c-2.6,-0.61 -5.126,0.581 -7.385,1.753c-2.342,1.215 -4.554,2.67 -6.61,4.323c-1.176,0.945 -2.415,1.916 -3.326,3.132c-0.738,0.985 -1.37,2.052 -1.928,3.147c-1.801,3.538 -2.824,7.538 -2.527,11.522c0.189,2.535 0.837,5.06 2.208,7.219c1.244,1.96 2.794,3.736 4.548,5.255c3.948,3.422 8.895,5.573 14.096,6.083c0.271,0.027 0.498,-0.251 0.5,-0.5c0.019,-2.553 0.038,-5.106 0.057,-7.659c0.001,-0.292 -0.233,-0.47 -0.501,-0.5zM7.548,34.549c-0.728,-0.968 -1.422,-1.996 -1.906,-3.11c-0.48,-1.104 -0.774,-2.311 -0.974,-3.495c-0.663,-3.918 0.096,-7.985 1.732,-11.576c0.951,-2.088 2.068,-3.969 3.741,-5.493c2.049,-1.867 4.3,-3.507 6.701,-4.893c2.257,-1.303 5.096,-3.007 7.813,-2.556c-0.064,2.679 -0.5,5.379 -0.932,8.02c-2.65,0.851 -5.268,1.705 -7.455,3.501c-1.631,1.34 -2.903,3.086 -3.669,5.053c-0.597,1.534 -0.864,3.205 -0.593,4.837c0.246,1.486 0.827,2.954 1.429,4.329c0.588,1.343 1.623,2.134 2.582,3.196c1.114,1.234 2.424,2.163 3.842,3.019c1.279,0.772 2.56,1.551 4.029,1.836c-0.017,2.225 -0.033,4.449 -0.05,6.674c-4.215,-0.506 -8.255,-2.164 -11.646,-4.713c-1.748,-1.314 -3.33,-2.882 -4.644,-4.629z" fill="#010101"></path></g></g>
</svg><img   class="logo-icon"                                                                                   v> Gas-Billing</a>
      </div>
      <div class="nav-links">
        <a class="home" href="#">Home</a>
        <a  class="about" href="#">About Us</a>
        <a class="contact" href="#">Contact Us</a>
        <button class="login-button">Login</button>
    </div>
</div>

<div class="top" style="padding: 16px;">
      <p>Simplify the gas bill payment application process for you and your loved ones </p>
  </div>
<div class="main">
  <form class="main-form" action="user_pannel.php" method="post">
      <div class="inputform"> 
      <label for="exampleInputEmail1" class="form-label">Reference No:</label>
      <input type="number" name="consumer_number" placeholder="Enter 10-digit reference no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" name="search" value="search" class="btn btn-primary">Search</button> 
    
  </form>
</div>
<img style="position: fixed; width: 100%; height: auto; bottom: 0;" src="./assets/wave.svg" alt="">
</body> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- <script src="userr_navbar.js"></script> -->
</html>
