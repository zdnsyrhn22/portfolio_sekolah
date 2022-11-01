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
          <h2><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.Consequatur sequi fuga </span>praesentium natus omnis voluptates.</h2>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
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
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi et ratione eligendi incidunt asperiores magnam ullam, fuga molestias accusantium sed consectetur dolores consequuntur, illo expedita, quo eius esse sit error pariatur dolorem consequatur inventore nemo quibusdam? Accusamus neque minus sequi omnis, perspiciatis animi. Iusto, ullam, voluptates ducimus consequuntur minima iure culpa labore doloribus quis iste illo vel quibusdam sint doloremque distinctio sed, placeat facere vero voluptatem! Ullam provident dolor blanditiis dolorum! Quia atque voluptate modi dicta, pariatur nisi officia perferendis ab eligendi unde nemo omnis ducimus non molestias voluptatem nesciunt vel dolore consequuntur tempora, voluptates eos. Aliquid sed assumenda dolorum!</p>
      </div>
    </div>

    <!-- visi misi -->
    <div class="visi-misi">
      <div class="title-section-middle">
        <div class="title">
          <h2>vision & mission</h2>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est labore
            iure veritatis nam eum, aliquam harum rem repellendus.
          </p>
        </div>
      </div>
      <div class="content-section">
        <?php foreach ($mission as $row) : ?>
          <div class="card card-visi-misi">
            <img src="<?= $row['img'] ?>" class="card-icon" alt="" width="100px" height="100px">
            <h5 class="card-title"><?= $row['title'] ?></h5>
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
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est labore
            iure veritatis nam eum, aliquam harum rem repellendus.
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