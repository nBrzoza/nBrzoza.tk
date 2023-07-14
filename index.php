<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="faviconsc/favicon-16x16.png">
    <link rel="manifest" href="redketchup/site.webmanifest">
    <script src="/jquery-3.7.0.min.js"></script>
    <script src="jquary.js"></script>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nBrzoza</title>
  </head>
  <body>
    <div class="cursor"></div>
    <nav>
      <a href="#start"><h2>nBrzoza</h2></a>
      <div class="container1" onclick="open_menu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <ul>
        <li><a href="#about_me">About Me</a></li>
        <li><a href="#my_projects">My Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="menu">
      <ul>
        <li><a href="#about_me">About Me</a></li>
        <li><a href="#my_projects">My Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="start container" id="start">
      <div class="text">
        <h1>Hi! My name is <b>Norbert</b></h1>
        <h4>I'm a passionate <b>software and web developer</b> eager to make my mark in the digital world. With a strong commitment to excellence, I combine technical prowess with creative problem&#8209;solving to deliver exceptional results.</h4>
      </div>
    </div>
    <div class="about_me container" id="about_me">
    </div>
    <div class="my_projects container" id="my_projects">
    </div>
    <div class="contact container" id="contact">
      <div class="contact-form">
        <h3>Contact Form</h3>
        <hr>
          <label>
            <p>Your Name</p>
            <input type="text" name="name" id="name" placeholder="Example">
          </label>
          <label>
            <p>Your E-mail</p>
            <input type="email" name="email" id='email' placeholder="example@gmail.com" required>
          </label>
          <label>
            <p>Subject</p>
            <input type="text" name="subject" id="subject" placeholder="Example" required>
          </label>
          <label>
            <p>Message</p>
            <textarea name="message" id="message" cols="40" rows="15" placeholder="Example Message" required></textarea>
          </label>
          <button type="submit" id="contact-form-send">Send</button>
      </div>
      <div class="contact-text">
        <p><b>Phone 📞</b> <a class="hover-line" href="tel:+48536591347">+48 536 591 347</a></p>
        <p><b>E-mail 📧</b> <a class="hover-line" href="mailto:nbrzoza@pm.me">nbrzoza@pm.me</a></p>
      </div>
    </div>
    <footer>
      <p>© 2023 Norbert Brzoza</p>
    </footer>
    <div id="progress"></div>
  </body>
</html>