<?php
require('../databases/about_data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/style.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/navbar.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/about.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/modal.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/footer.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Courses</title>
</head>

<body>
  <!-- navbar -->
  <?php include '../components/navbar.php' ?>

  <div class="hero-about">
    <div class="container">
      <div class="title-section">
        <div class="title">
          <h1>discover the cypher within and uncover it with <span>decypher</span></h1>
          <p>Let the Beginning of Fantastic Journey Begins</p>
        </div>
      </div>
    </div>
    <div class="content-section">
      <?php foreach ($heroActivity as $row) : ?>
        <img src="<?= $row['img'] ?>" alt="" width="<?= $row['width'] ?>">
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">

    <!-- our story -->
    <div class="our-story">
      <div class="content-section">
        <div class="title-section">
          <h3>our story</h3>
        </div>
        <p>
          It start from the desire to improve the quality of Indonesian society in using technology that continues to grow,
          Decypher exist for Indonesia and the world to discover and develop the hidden skills that exist within every soon-to-be IT Specialist.
          Apply the potential within, Inspire the world with Decypher Academy.
        </p>
      </div>
    </div>

    <!-- visi misi -->
    <div class="visi-misi">
      <div class="title-section-middle">
        <div class="title">
          <h2>vision & mission</h2>
          <p>
            Develop potential talents to collaborate and build innovation in the digital industry
            with the work that inspires many.
          </p>
        </div>
      </div>
      <div class="content-section">
        <?php foreach ($mission as $row) : ?>
          <div class="card card-visi-misi">
            <img src="<?= $row['img'] ?>" class="card-icon" alt="icon-visi-misi">
            <h5 class="card-title"><?= $row['title'] ?></h5>
            <p class="card-desc"><?= $row['desc'] ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>

    <!-- our team -->
    <div class="our-team">
      <div class="title-section-middle">
        <div class="title">
          <h2>Our Team</h2>
          <p>
            Decypher Academy has a team consist of specialists in their respective fields. We welcomes talent from all kinds of different backgrounds which in turns will allows us to continue to grow and learn from each other.
          </p>
        </div>
      </div>
      <div class="content-section">
        <?php foreach ($ourTeam as $row) : ?>
          <div class="card">
            <img class="card-image" src="<?= $row['img'] ?>" alt="" />
            <div class="card-body">
              <p class="card-title">
                <?= $row['name'] ?>
              </p>
              <p class="card-text">
                <?= $row['desc'] ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>


  </div>

  <!-- footer -->
  <?php include "../components/footer.php" ?>
</body>

<?php include "../components/modal.php" ?>
<script src="/portfolio_sekolah/javascripts/modal.js"></script>

</html>