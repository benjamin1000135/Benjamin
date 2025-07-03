<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Benjamin - Full Stack Developer Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root {
      --primary-color: #3498db; /* Bright Blue */
      --secondary-color: #f7f9fc; /* Light Gray */
      --accent-color: #e74c3c; /* Red Accent */
      --dark-color: #2c3e50; /* Darker Text */
      --light-text: #95a5a6; /* Light Text */
      --button-hover-color: #2980b9; /* Darker Blue for hover */
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: var(--secondary-color);
      color: var(--dark-color);
    }

    .modern-header {
      background-color: var(--primary-color);
      color: white;
      padding: 60px 20px;
      border-bottom: 4px solid var(--accent-color);
    }

    .header-content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      max-width: 1000px;
      margin: 0 auto;
      gap: 30px;
    }

    .header-text {
      flex: 1 1 400px;
    }

    .header-text h1 {
      font-size: 2.8em;
      margin: 0 0 10px;
      color: white;
    }

    .header-text p {
      font-size: 1.2em;
      color: #f0f0f0;
    }

    .header-image {
      flex: 0 1 200px;
      order: -1; /* Move image to the left */
    }

    .square-pic {
      width: 180px;
      height: 220px; /* Adjusted height to make it egg-shaped */
      object-fit: cover;
      border: 4px solid white;
      border-radius: 50%; /* Makes the image round */
    }

    section {
      padding: 50px 20px;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      text-align: center;
    }

    h2 {
      font-size: 2.5em;
      margin-bottom: 20px;
      color: var(--primary-color);
    }

    p {
      color: var(--light-text);
    }

    .button {
      background-color: var(--primary-color);
      color: white;
      padding: 12px 25px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      display: inline-block;
      margin-top: 15px;
      transition: 0.3s ease;
    }

    .button:hover {
      background-color: var(--button-hover-color);
    }

    .skills, .projects {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .skill, .project {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: 0.3s ease;
      width: 280px;
    }

    .skill:hover, .project:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .project img {
      width: 100%;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    #contact ul li {
      margin: 10px 0;
      font-size: 18px;
    }

    #contact ul li i {
      color: var(--primary-color);
      margin-right: 10px;
    }

    #contact ul li a {
      text-decoration: none;
      color: var(--dark-color);
    }

    #contact ul li a:hover {
      color: var(--accent-color);
    }

    footer {
      background-color: var(--dark-color);
      color: white;
      text-align: center;
      padding: 15px 10px;
    }

    @media (max-width: 768px) {
      .skills, .projects {
        flex-direction: column;
        align-items: center;
      }

      .header-content {
        flex-direction: column-reverse;
        text-align: center;
      }

      .header-text h1 {
        font-size: 2.2em;
      }
    }
    .containerx h2{
      margin-left:500px;
    }
 .containerx p{
      margin-left:390px;
    }
     .containerx img{
      margin-left:100px;
    }

  </style>
</head>
<body>

  <header class="modern-header">
    <div class="header-content">
      <div class="header-text">
        <h1>Hi, I'm Benjamin</h1>
        <p>Full Stack Developer | Passionate about building modern web apps</p>
        <a href="#projects" class="button">See My Work</a>
        <a href="Benjamin-CV.pdf" class="button" download>Download My CV</a>
      </div>
      <div class="header-image">
        <img src="mb.jpg" alt="Benjamin's Profile Picture" class="square-pic">
      </div>
    </div>
  </header>

  <section class="container" id="intro">
    <h2>About Me</h2>
    <p>I specialize in building dynamic, user-friendly websites and applications using modern tools like React, Node.js, and MySQL. Let's bring your ideas to life.</p>
    <a href="work1.php" class="button">See My Work</a>
  </section>

  <section class="container" id="skills">
    <h2>Skills</h2>
    <div class="skills">
      <div class="skill">
        <h3>Languages</h3>
        <ul>
          <li>JavaScript</li>
          <li>Python</li>
          <li>HTML & CSS</li>
        </ul>
      </div>
      <div class="skill">
        <h3>Frameworks & Tools</h3>
        <ul>
          <li>React.js</li>
          <li>Node.js</li>
          <li>Raravel</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="container" id="projects">
    <h2>Projects</h2>
    <p>Below are some projects I have worked on!</p>
    <div class="projects">
      <div class="project">
        <img src="ecom.png" alt="E-commerce Website">
        <h3>E-commerce Website</h3>
        <a href="ecommerce.php" class="button">View Project</a>
      </div>
      <div class="project">
        <img src="xx.png" alt="Student Dashboard">
        <h3>Student Dashboard</h3>
        <a href="dashboard.php" class="button">View Project</a>
      </div>
      <div class="project">
        <img src="psn.png" alt="Portfolio">
        <h3>Personal Portfolio</h3>
        <a href="ok1.php" class="button">View Project</a>
      </div>
      <div class="project">
        <img src="wd.png" alt="Weather Dashboard">
        <h3>Weather Dashboard</h3>
        <a href="weather.php" class="button">View Project</a>
      </div>
      <div class="project">
        <img src="bt1.png" alt="Bet Application">
        <h3>Bet Application</h3>
        <a href="bett.php" class="button">View Project</a>
      </div>
      <div class="project">
        <img src="fd.png" alt="Farmer to Client">
        <h3>Farmer to Client</h3>
        <a href="famigo.php" class="button">View Project</a>
      </div>
    </div>
  </section>

  <section class="containerx">
    <h2>Global Access</h2>
    <p>You can access and view my projects from anywhere in the world.</p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/World_map_-_low_resolution.svg/1024px-World_map_-_low-resolution.svg.png" alt="World Map" style="max-width:100%; height:auto; border-radius: 10px;">
  </section>

  <section class="container" id="contact">
    <h2>Contact Me</h2>
    <p>If you'd like to collaborate or get in touch, feel free to connect!</p>
    <ul>
      <li><i class="fas fa-envelope"></i><a href="mailto:manzibenjamin09@mail.com">manzibenjamin@mail.com</a></li>
      <li><i class="fab fa-linkedin"></i><a href="https://www.linkedin.com/in/YOUR-LINKEDIN" target="_blank">LinkedIn</a></li>
      <li><i class="fab fa-github"></i><a href="https://github.com/benjamin1000135" target="_blank">GitHub</a></li>
      <li><i class="fab fa-instagram"></i><a href="https://instagram.com/manzi_1_benjamin" target="_blank">Instagram</a></li>
      <li><i class="fab fa-whatsapp"></i><a href="https://wa.me/+250798452955" target="_blank">WhatsApp</a></li>
    </ul>
  </section>

  <footer>
    <p>&copy; 2025 Benjamin. All rights reserved.</p>
  </footer>

</body>
</html>
