<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="faviconsc/favicon-16x16.png">
    <link rel="manifest" href="redketchup/site.webmanifest">
    <script src="/scripts/jquery-3.7.0.min.js"></script>
    <script src="/scripts/jquary.js"></script>
    <link rel="stylesheet" href="/styles/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nBrzoza</title>
  </head>
  <body>
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
    <div class="menu" >
      <ul>
        <li><a href="#about_me">About Me</a></li>
        <li><a href="#my_projects">My Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="start container" id="start">
      <div class="text">
        <h1>Hi! My name is <b>Norbert</b>...</h1>
        <h4>... and I'm a passionate <b>software and web developer</b> eager to make my mark in the digital world. With a strong commitment to excellence, I combine technical prowess with creative problem&#8209;solving to deliver exceptional results.</h4>
        <p>Read more <a href="#about_me">about me</a> or check some of <a href="#my_projects">my projects</a>!</p>
      </div>
    </div>
    <div class="about_me container" id="about_me">
      <label>
        Hello! My name is Norbert Brzoza, and I recently completed my technical school education with a diploma as an "Information Technology technician." Although I don't have formal work experience yet, I am eager to embark on a successful career in the field of technology.
        <br>
        Throughout my educational journey, I have dedicated myself to acquiring knowledge and expanding my skill set. I have obtained certifications such as "Podstawy Design Thinking dla branży IT" and "Intro to Machine Learning", which have allowed me to delve into diverse aspects of the IT industry.
        <br>
        I am particularly passionate about web development and have spent the past two years honing my skills in HTML, JS, CSS, PHP, and Python. I enjoy exploring the possibilities offered by these programming languages and staying up-to-date with the latest advancements in the field.
        <br>
        What drives me each day is my unwavering desire to learn and grow. I believe in constantly expanding my knowledge base, embracing new challenges, and pushing the boundaries of what I can achieve. My ultimate goal is to make a positive impact in the world of technology and contribute to creating a better environment for everyone.
      </label>
      <div class="my_skills">
        <h2>I have experience with</h2>
        <ul>
        <?php 
          require 'php/connect.php';
          $select = pg_fetch_all(pg_query($conn, 'SELECT * FROM skills ORDER BY level DESC'));
          foreach ($select as $skill) {
            echo "<li>
              $skill[name]
              <label class='span-$skill[level]'>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </label>
            </li>";
          }
        ?>
        </ul>
      </div>
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