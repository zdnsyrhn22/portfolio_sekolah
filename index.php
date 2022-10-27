<?php
require('databases/courses_data.php');

$image_companies = [
  '/portfolio_sekolah/asset/img/companies/bibit.png',
  '/portfolio_sekolah/asset/img/companies/gojek.png',
  '/portfolio_sekolah/asset/img/companies/tokopedia.png',
  '/portfolio_sekolah/asset/img/companies/bca.png',
  '/portfolio_sekolah/asset/img/companies/microsoft.png',
  '/portfolio_sekolah/asset/img/companies/traveloka.png'
];

$our_learners = [
  [
    'img' => "/portfolio_sekolah/asset/icon/gold-medal.png",
    'title' => "No.1 learning platform accross indonesia",
  ],
  [
    'img' => "/portfolio_sekolah/asset/icon/gold-medal.png",
    'title' => "No.1 learning platform accross indonesia",
  ],
  [
    'img' => "/portfolio_sekolah/asset/icon/gold-medal.png",
    'title' => "No.1 learning platform accross indonesia",
  ],
  [
    'img' => "/portfolio_sekolah/asset/icon/gold-medal.png",
    'title' => "No.1 learning platform accross indonesia",
  ],
];

$list_benefit = [
  'lorem ipsum',
  'lorem ipsum',
  'lorem ipsum',
  'lorem ipsum',
  'lorem ipsum',
];

$roadmap = [
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
  [
    'title' => 'Frontend',
    'text' => 'Step by step guide to becoming a frontend developer in 2022',
    'link' => '/'
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="stylesheets/style.css" />
  <link rel="stylesheet" href="stylesheets/navbar.css" />
  <link rel="stylesheet" href="stylesheets/home.css" />
  <link rel="stylesheet" href="stylesheets/footer.css" />
  <link rel="stylesheet" href="stylesheets/modal.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Home</title>
</head>

<body>
  <!-- navbar -->
  <?php include 'components/navbar.php' ?>

  <!-- hero -->
  <div class="container-hero">
    <div class="hero">
      <img src="/portfolio_sekolah/asset/img/default.jpg" alt="" />
      <div class="hero-content">
        <h1 class="hero-title">A New Way of Digital Literacy</h1>
        <p class="hero-text">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis
          natus inventore veniam, accusamus modi et soluta nesciunt
          exercitationem enim, laboriosam magnam aut cumque iusto, similique
          sunt? Ipsam velit ipsa corporis.
        </p>
        <div class="hero-button">
          <a href="#our-learners" class="btn btn-primary">Get Started</a>
          <button class="btn btn-secondary" id="btn-video"><i class="fas fa-play"></i>Learn How</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <!--  companies -->
    <div class="companies">
      <h5 class="title-companies">Trusted by several unicorn companies</h5>
      <div class="icon-companies">
        <?php foreach ($image_companies as $row) : ?>
          <img src="<?= $row ?>" alt="" />
        <?php endforeach; ?>
      </div>
    </div>

    <!--  our learners -->
    <div class="our-learners" id="our-learners">
      <div class="title-section-middle">
        <h2>we have best teachers & curriculumn for our learners</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est labore
          iure veritatis nam eum, aliquam harum rem repellendus.
        </p>
      </div>
      <div class="content-section">
        <?php foreach ($our_learners as $row) : ?>
          <div class="card card-our-learners">
            <img src="<?= $row['img'] ?>" class="card-icon" alt="" width="100px" height="100px" />
            <h5 class="card-title"><?= $row['title'] ?></h5>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- benefit section -->
    <div class="benefit">
      <img class="benefit-image" src="/portfolio_sekolah/asset/img/default.jpg" alt="" />
      <div class="benefit-content">
        <h2 class="benefit-title">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sed
          accusantium placeat quo, nihil autem. Quisquam fugiat accusamus
          impedit eaque dolorem tenetur quam, quos voluptate, et ipsum placeat
          quasi porro.x
        </p>
        <ul class="list-item">
          <?php foreach ($list_benefit as $row) : ?>
            <li> <img src="/portfolio_sekolah/asset/icon/check.png" alt=""> <span><?= $row ?></span> </li>
          <?php endforeach; ?>
        </ul>
        <div class="benefit-button">
          <button class="btn btn-primary" id="btn-join">join now</button>
        </div>
      </div>
    </div>

    <!-- roadmap dev -->
    <div class="roadmap-dev">
      <div class="title-section">
        <h3>Roadmap Developer</h3>
      </div>

      <div class="content-section">
        <?php foreach ($roadmap as $row) : ?>
          <div class="card card-roadmap-dev">
            <div class="card-body">
              <h4 class="card-title card-title-roadmap">
                <a href="<?= $row['link'] ?>" target="_blank" rel="noopener noreferrer"><?= $row['title'] ?></a>
              </h4>
              <p class="card-text">
                <?= $row['text'] ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- popular course -->
    <div class="pop-course">
      <div class="title-section">
        <h3>Popular Course</h3>
        <a href="/portfolio_sekolah/pages/courses.php" class="pop-course-link">SEE ALL <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="content-section">
        <?php for ($i = 0; $i < 2; $i++) : ?>
          <div class="card card-pop-course">
            <img class="card-image" src="<?= $course[$i]['image'] ?>" alt="" />
            <div class="card-body">
              <h4 class="card-title">
                <?= $course[$i]['title'] ?>
              </h4>
              <p class="card-text">
                <?= $course[$i]['text'] ?>
              </p>
              <div class="card-button">
                <button class="btn btn-primary" id="btn-join" value="<?= $course[$i]['id'] ?>">enroll course</button>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>

    <!-- email -->
    <div class="email">
      <div class="card-email">
        <h2>enter your email to get the latest news</h2>
        <p>you will get the latest notification about the latest school news</p>

        <form action="" method="POST" class="form-email">
          <input class="input-email" type="text" name="email" id="email" placeholder="enter your email address">
          <button class="btn btn-email" type="reset">submit</button>
        </form>

      </div>
    </div>

  </div>

  <!-- footer -->
  <?php include "components/footer.php" ?>

</body>


<?php include "components/modal.php" ?>

<script src="/portfolio_sekolah/javascripts/modal.js"></script>

</html>