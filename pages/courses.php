<?php
require('../databases/courses_data.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/style.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/navbar.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/course.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/footer.css" />
  <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/modal.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Courses</title>
</head>

<body>
  <!-- navbar -->
  <?php include '../components/navbar.php' ?>

  <div class="container">
    <div class="course">
      <div class="title-section-middle">

        <h2>Courses</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fugiat id voluptatum nobis sequi quam
          repudiandae exercitationem et.</p>
      </div>

      <div class="search-course">
        <div class="search-form">
          <input class="search-input" type="text" name="search" id="search" placeholder="search course">
          <button class="btn btn-search"><i class="fas fa-magnifying-glass"></i></button>
        </div>
      </div>

      <div class="content-section">

        <?php foreach ($course as $row) : ?>
          <div class="card card-course">
            <img class="card-image" src="/portfolio_sekolah/<?= $row['image'] ?>" alt="" />
            <div class="card-body">
              <h4 class="card-title">
                <?= $row['title'] ?>
              </h4>
              <p class="card-text">
                <?= $row['text'] ?>
              </p>
              <div class="card-button">
                <button class="btn btn-primary" id="btn-join" value="<?= $row['id'] ?>">enroll course</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="pagination">
        <ul class="list-item list-item-pagination">
          <li class="page-item"><button class="btn page-link" value=""><i class="fas fa-chevron-left"></i></button></li>
          <li class="page-item"><button class="btn page-link" value="">1</button></li>
          <li class="page-item"><button class="btn page-link" value="">2</button></li>
          <li class="page-item"><button class="btn page-link" value="">3</button></li>
          <li class="page-item"><button class="btn page-link" value=""><i class="fas fa-chevron-right"></i></button></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php include "../components/footer.php" ?>
</body>


<?php include "../components/modal.php" ?>

<script src="/portfolio_sekolah/javascripts/courses.js"></script>
<script src="/portfolio_sekolah/javascripts/modal.js"></script>

</html>