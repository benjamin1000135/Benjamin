<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Benjamin Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #111;
    color: #fff;
    line-height: 1.6;
  }

  header {
    background-color: #000;
    color: #fff;
    padding: 40px 20px;
    text-align: center;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid #444;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
  }

  .brand {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
    font-size: 1.2em;
  }

  .nav-pic {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid white;
  }

  .nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    align-items: center;
  }

  .nav-links li a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
  }

  .resume-button {
    background: #fff;
    color: #000;
    padding: 8px 15px;
    border-radius: 10px;
    font-weight: bold;
    text-decoration: none;
  }

  .hero h1 {
    font-size: 2.5em;
    margin: 30px 0 10px;
  }

  .hero h2 {
    font-size: 1.8em;
    color: #aaa;
    margin-bottom: 30px;
  }

  .hero-img {
    width: 400px;
    height: 300px;
    border-radius: 20px;
    object-fit: cover;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
    transition: transform 0.3s ease;
  }

  .hero-img:hover {
    transform: scale(1.09);
  }

  section {
    padding: 60px 20px;
    max-width: 1000px;
    margin: auto;
  }

  h2 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 20px;
    color: #fff;
  }

  p {
    font-size: 1.1em;
    color: #ccc;
  }

  ul {
    padding-left: 20px;
  }

  li {
    color: #ccc;
    margin-bottom: 10px;
  }

  a {
    color: #00d8ff;
    text-decoration: none;
  }

  #tools {
    padding: 50px 20px;
    background-color: #111;
    text-align: center;
  }

  .tools-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 30px;
  }

  .tool-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 120px;
    transition: transform 0.3s ease;
  }

  .tool-item:hover {
    transform: scale(1.1);
  }

  .tool-item img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 10px;
  }

  .tool-item span {
    font-size: 1em;
    color: #ccc;
  }

  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
  }

  .project-card {
    background: #1a1a1a;
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .project-card:hover {
    transform: scale(1.05);
  }

  .project-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .project-card .info {
    padding: 20px;
  }

  .project-card .info h3 {
    margin: 0 0 10px;
  }

  .project-card .info p {
    color: #ccc;
  }

  .project-card .tags {
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .project-card .tags span {
    background: #333;
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 0.9em;
  }

  .world-map {
    display: block;
    max-width: 100%;
    height: 400px;
    margin: 30px auto 0;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
    object-fit: contain;
    transition: transform 0.3s ease;
  }

  .world-map:hover {
    transform: scale(1.05);
  }

  #contact {
    padding: 2rem;
    border-radius: 1rem;
    max-width: 800px;
    margin: 2rem auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    background-color: #111;
    padding-left: 20px;
  }

  #contact h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    color: #fff;
  }

  .contact {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
  }

  .contact p {
    margin: 0;
  }

  .contact i {
    font-size: 1.5rem;
    color: #0d6efd;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .contact i:hover {
    color: red;
    transform: scale(1.2);
  }

  .contact a {
    display: inline-block;
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      align-items: flex-start;
    }

    .nav-links {
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
      margin-top: 10px;
      text-align: left;
    }

    .hero-img {
      width: 180px;
      height: 220px;
    }

    .projects-grid {
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    }
  }

  .containerx p {
    padding-left: 50px;
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
    text-align: center;
  }

  .about p {
    padding-left: 5rem;
  }

  footer p {
    padding-left: 30rem;
  }

  .location-date {
    padding-left: 2.5rem;
  }

  .bullet {
    padding-left: 3rem;
  }

  .role {
    padding-left: 2.5rem;
  }

  .div h3 a {
    padding-left: 2.5rem;
  }

  .pp {
    padding-left: 17rem;
  }

  .experience-header img {
    padding-left: 2.5rem;
  }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="brand">
        <img src="mb.jpg" alt="Benjamin" class="nav-pic">
        <span>MANZIBENJAMIN</span>
      </div>
      <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Get in touch</a></li>
        <li><a href="Benjamin-CV.pdf" class="resume-button">Resume</a></li>
      </ul>
    </nav>
    <div class="hero">
      <h1>Hello <span>👋</span>, I'm <strong>Benjamin</strong></h1>
      <h2>and I'm a Full Stack Developer</h2>
      <img src="mb.jpg" alt="Benjamin" class="hero-img">
    </div>
  </header>

  <section class="about">
    <h2>About Me</h2>
    <p>I’m a passionate Full Stack Developer with a strong foundation in both front-end and back-end development.</p>
  </section>

  <section class="section">
    <h2>Experience</h2>
    <div class="pp"><p>Below is few of my recent relevant technical experience.</p></div>

    <div class="experience-card">
      <div class="experience-header">
        <div class="div">
          <h3><a href="https://codeofafrica.com" target="_blank" rel="noopener noreferrer">Code of Africa</a></h3>
          <div class="role">Full-stack Engineer</div>
        </div>
      </div>
      <div class="location-date">Kigali, Rwanda – Onsite [OCT 2023 – PRESENT]</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Written unit tests to ensure seamless and reliable functionality of the frontend, enhancing overall application stability</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Ensured uniform code standards across various website templates, enhancing maintainability</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Resolved backend issues and bugs, significantly enhancing user experience by improving system reliability and performance</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Optimized frontend performance for superior user interaction</div>
    </div>
    <div class="experience-card">
      <div class="experience-header">
        <div class="div">
          <h3><a href="https://codeofafrica.com" target="_blank" rel="noopener noreferrer">Sinc today</a></h3>
          <div class="role">Full-stack Engineer</div>
        </div>
      </div>
      <div class="location-date">Kigali, Rwanda – Onsite [OCT 2024 – PRESENT]</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Collaborated with a team of professionals to develop modern day software that largely improved my overall technical skills</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Collaborated on developing a user-friendly organizer dashboard for effective event management.</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Collaborated on developing an event explore page enabling users to discover events and make reservations</div>
    </div>

    <div class="experience-card">
      <div class="experience-header">
        <div class="div">
          <h3><a href="https://codeofafrica.com" target="_blank" rel="noopener noreferrer">Andela Technical Leadership Program</a></h3>
          <div class="role">Full-stack Engineer</div>
        </div>
      </div>
      <div class="location-date">Kigali, Rwanda – Onsite [OCT 2023 – PRESENT]</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Written unit and integration tests for both Frontend and Backend</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Developed my first full-stack personal portfolio as a web developer</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Participated in weekly team project presentations to technical managers.</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Made research on world-class technologies used in web development</div>
    </div>

    <div class="experience-card">
      <div class="experience-header">
        <div class="div">
          <h3><a href="https://codeofafrica.com" target="_blank" rel="noopener noreferrer">Consumatech</a></h3>
          <div class="role">Full-stack Engineer</div>
        </div>
      </div>
      <div class="location-date">Kigali, Rwanda – Onsite [OCT 2023 – PRESENT]</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Written unit tests to ensure seamless and reliable functionality of the frontend, enhancing overall application stability</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Ensured uniform code standards across various website templates, enhancing maintainability</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Resolved backend issues and bugs, significantly enhancing user experience by improving system reliability and performance</div>
      <div class="bullet"><span class="bullet-icon">✔️</span>Optimized frontend performance for superior user interaction</div>
    </div>
  </section>

  <section id="tools">
    <h2>Tools and Platforms</h2>
    <div class="tools-grid">
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"><span>HTML</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"><span>CSS</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"><span>JavaScript</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg"><span>TypeScript</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"><span>React</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"><span>Node.js</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"><span>PHP</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"><span>MySQL</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg"><span>PostgreSQL</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"><span>MongoDB</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"><span>Git</span></div>
      <div class="tool-item"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg"><span>Linux</span></div>
    </div>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <p style="text-align: center; font-size: 1.2em;">Below is some of the projects I have worked on.</p>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-card">
          <img src="2.jpg"><div class="info"><h3>Farmer to Client Website</h3><p> Dashboard that connect Farmer to Client</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div>
        </div>
      </div>
      <div class="project-card"><img src="ecom.png"><div class="info"><h3>E-commerce Website</h3><p>Dashboard platform for seamless shopping</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div></div>
      <div class="project-card"><img src="xx.png"><div class="info"><h3>Student Dashboard</h3><p>Dashboard for Event management students</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div></div>
      <div class="project-card"><img src="psn.png"><div class="info"><h3>Personal Portfolio</h3><p> My Personal Portfolio is public</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div></div>
      <div class="project-card"><img src="wd.png"><div class="info"><h3>Weather Dashboard</h3><p>Weather analysis dashboard</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div></div>
      <div class="project-card"><img src="bt1.png"><div class="info"><h3>Bet Application</h3><p>Application for funny moment</p><div class="tags"><span>html</span><span>css</span><span>php</span></div></div></div>
    </div>
  </section>

  <section class="containerx">
    <h2>Global Access</h2>
    <p>For inquiries or Whether it’s feedback, collaboration, or just a hello—I'm one click away!
               feel free to contact me using the below different method
    </p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/World_map_-_low_resolution.svg/1024px-World_map_-_low_resolution.svg.png" alt="World Map" class="world-map">
  </section>

  <section id="contact">
    <h2>Get in Touch</h2>
    <div class="contact">
      <p><a href="mailto:manzibenjamin09@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></p>
      <p><a href="https://www.linkedin.com/in/manzibenjamin" target="_blank"><i class="fab fa-linkedin"></i></a></p>
      <p><a href="https://github.com/benjamin1000135" target="_blank"><i class="fab fa-github"></i></a></p>
      <p><a href="https://instagram.com/benjamin_1_manzi" target="_blank"><i class="fab fa-instagram"></i></a></p>
      <p><a href="https://twitter.com/benjamin_manzi" target="_blank"><i class="fab fa-x-twitter"></i></a></p>
      <p><a href="https://facebook.com/Benjamin's Dollar" target="_blank"><i class="fab fa-facebook"></i></a></p>
      <p><a href="https://wa.me/+250798452955" target="_blank"><i class="fab fa-whatsapp"></i></a></p>
    </div>
  </section>

  <footer>
    <p>© 2025 Benjamin. All rights reserved.</p>
  </footer>
</body>
</html>