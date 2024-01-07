document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.nav-links a');
  navLinks.forEach((link) => {
    link.addEventListener('click', function () {
      navLinks.forEach((otherLink) => otherLink.classList.remove('active'));
      this.classList.add('active');
    });
  });
});
window.addEventListener('load', () => {
  homeFunction()
});
const aboutButton = document.querySelector('.about');
aboutButton.addEventListener('click', () => {
  aboutFunction();
});

function aboutFunction() {
  const content = document.querySelector('.content');

  const html = `   
    <div class="navbar">
      <div class="title">
        <a href="#" ><img class="logo-icon" src="./assets/icons8-m-67.png" alt=""> Mepco</a>
      </div>
      <div class="nav-links">
        <a class="home" href="#">Home</a>
        <a  class="about" href="#">About Us</a>
        <a class="contact" href="#">Contact Us</a>
        <button class="login-button">Login</button>

      </div>
  </div>
       <div class="about-section">
    <div class="aboutus">About Us</div>
    <img src="./assets/undraw_before_dawn_re_hp4m.svg" alt="About Us Image">
    <p>Helo Folks! It looks like you are here to know us better. Mepco is a user friendly, easy to use website where one can view and pay their electricuty bill easily.</p>
    </div>
<img style="position: fixed; width: 100%; height: auto; bottom: 0;" src="./assets/wave.svg" alt="">
`;

  content.innerHTML = html;

  const homeButton = document.querySelector('.home');
  homeButton.addEventListener('click', () => {
    homeFunction();
  });

  const contactButton = document.querySelector('.contact');
  contactButton.addEventListener('click', () => {
    contactFunction();
  });
  const aboutButton = document.querySelector('.about');
  aboutButton.style.color = '#3ed0c5';
}

function homeFunction() {
  const content = document.querySelector('.content');

  const html = `   
    <div class="navbar">
      <div class="title">
        <a href="#" ><img class="logo-icon" src="./assets/icons8-m-67.png" alt=""> Gas-Billing</a>
      </div>
      <div class="nav-links">
        // <a class="home" href="#">Home</a>
        // <a  class="about" href="#">About Us</a>
        // <a class="contact" href="#">Contact Us</a>
        <button class="login-button">Login</button>

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
<img style="position: fixed; width: 100%; height: auto; bottom: 0;" src="./assets/wave.svg" alt="">

 
  
     `;

  content.innerHTML = html;

  const homeButton = document.querySelector('.home');
  homeButton.style.color = '#3ed0c5';

  const contactButton = document.querySelector('.contact');
  contactButton.addEventListener('click', () => {
    contactFunction();
  });
  const aboutButton = document.querySelector('.about');
  aboutButton.addEventListener('click', () => {
    aboutFunction();
  });
}
function contactFunction() {
  const content = document.querySelector('.content');

  const html = `   
    <div class="navbar">
      <div class="title">
        <a href="#" ><img class="logo-icon" src="./assets/icons8-m-67.png" alt=""> Gas-Billing</a>
      </div>
      <div class="nav-links">
        <a class="homeeee" href="#">Home</a>
        <a  class="about" href="#">About Us</a>
        <a class="contact" href="#">Contact Us</a>
        <button class="login-button">Login</button>

      </div>
  </div>
  <div class="about-section">
  <div class="aboutus">We are here for you</div>
  <img src="./assets/undraw_before_dawn_re_hp4m.svg" alt="About Us Image">
  <p>Helo Folks! It looks like you are here to know us better. Mepco is a user friendly, easy to use website where one can view and pay their electricuty bill easily.</p>
  </div>

  <img style="position: fixed; width: 100%; height: auto; bottom: 0;" src="./assets/wave.svg" alt="">

     `;

  content.innerHTML = html;

  const homeButton = document.querySelector('.home');
  homeButton.addEventListener('click', () => {
    homeFunction();
  });

  const contactButton = document.querySelector('.contact');
  contactButton.style.color = '#3ed0c5';
  const aboutButton = document.querySelector('.about');
  aboutButton.addEventListener('click', () => {
    aboutFunction();
  });
}

