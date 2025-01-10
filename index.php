<?php

?>

<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>EIGHTPRO</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link rel="stylesheet" href="style.css" />


</head>

<body>
  <header class="header">
    <a href="#" class="logo"><span>EIGHTPRO</span></a>

    <nav class="navbar">
      <a href="index.php" class="active">HOME</a>
      <a href="service.php">SERVICES</a>
      <a href="Experience.php">EXPERIENCE</a>
      <a href="project.php">PROJECTS</a>
      <!-- <a href="#">EDUCATION</a> -->
    </nav>

    <a href="#contact" class="contact">CONTACT US</a>
    <a href="logout.php" class="logout-button">LOGOUT</a>

  </header>
  <section class="home">
    <div class="home-content">
      <h3>Hi~</h3>
      <h3>
        we are <span>EIGHTPRO<br /></span>your WEB SOLUTION
      </h3>
      <p>
        Halo guys disini kami akan memberikan layanan jasa membuat website
        jika kalian membutuhkan kami kalian bisa Contact kami ya. karena EIGHTPRO adalah solusi web profesional yang
        berfokus pada desain dan pengembangan website kreatif serta layanan digital berkualitas tinggi.
        Kami berkomitmen untuk mewujudkan ide Anda menjadi website yang menarik dan fungsional, dengan pendekatan yang
        berpusat pada kebutuhan dan kepuasan pelanggan.
      </p>


    </div>
    <div class="img-box">
      <img src="IMG_6211.PNG" alt="" />
    </div>
  </section>

  <section class="about">
    <div class="about-img">
      <img src="WhatsApp Image 2024-10-23 at 13.56.04.jpeg" alt="" />
    </div>

    <div class="about-content">
      <h2 class="heading">ABOUT <span> US</span></h2>
      <h3>EIGHTPRO <span> YOUR WEBSOLUTION</span></h3>

      <p>Selamat datang di EIGHTPRO, mitra terpercaya Anda dalam menyediakan solusi web inovatif.
        Kami adalah tim profesional yang berdedikasi dan penuh semangat dalam memberikan layanan desain, pengembangan,
        dan layanan digital berkualitas tinggi untuk membantu Anda mencapai tujuan online.
        Misi kami adalah mewujudkan ide-ide Anda menjadi kenyataan dengan merancang website yang menarik, mudah
        digunakan, dan berfungsi dengan baik.
        Di EIGHTPRO, kami percaya bahwa setiap proyek adalah unik dan memerlukan pendekatan khusus.
        Oleh karena itu, kami bekerja sama dengan klien untuk memahami kebutuhan spesifik mereka dan menciptakan solusi
        yang sesuai dengan tujuan bisnis mereka.
        Apakah Anda membutuhkan blog pribadi, platform e-commerce, atau website perusahaan, kami memiliki keahlian dan
        kreativitas untuk mewujudkan visi Anda. </p>
      <a href="Experience.php" class="btn-2">EXPERIENCE</a>
    </div>
  </section>

  <section id="contact" class="contact-form">
    <h2 class="contact-me">Contact <span>Us</span></h2>
    <form action="https://wa.me/6281332218757" method="get" target="_blank">
      <textarea name="text" cols="30" rows="10" placeholder="Your Message"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>


</body>

</html>
