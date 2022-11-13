<?php
$pages = $_SERVER['SCRIPT_NAME'];
?>

<header class="container">
  <nav class="navbar">
    <a class="navbar-brand" href=""><img src="/portfolio_sekolah/asset/img/default.jpg" alt="" width="100px"></a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?= ($pages == "/portfolio_sekolah/index.php") ? "active" : "" ?>" id="home" aria-current="page" href="/portfolio_sekolah">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($pages == "/portfolio_sekolah/pages/courses.php") ? "active" : "" ?>" id="courses" href="/portfolio_sekolah/pages/courses.php">courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($pages == "/portfolio_sekolah/pages/student.php") ? "active" : "" ?>" id="student" href="#">for student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($pages == "/portfolio_sekolah/pages/about.php") ? "active" : "" ?>" id="about" href="/portfolio_sekolah/pages/about.php">about us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= ($pages == "/portfolio_sekolah/pages/contact.php") ? "active" : "" ?>" id="contact" href="/portfolio_sekolah/pages/contact.php">contact</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-btn"><button class="btn btn-primary" id="btn-join">Join Now</button></li>
    </ul>

    <div class="navbar-ham">
      <div class="btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>

  </nav>
</header>