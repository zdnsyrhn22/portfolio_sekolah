<div class="modal" id="modal-youtube">
  <button class="btn btn-close-modal" id="btn-close-modal-video"><i class="fas fa-xmark"></i></button>
  <iframe width="900px" height="500px" src="https://www.youtube.com/embed/gTMwx9-rKe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="modal" id="modal-form-course">

  <button class="btn btn-close-modal" id="btn-close-modal-form"><i class="fas fa-xmark"></i></button>

  <div class="modal-body">
    <div class="modal-heading">
      <h3 class="modal-title">Lorem Ipsum</h3>
    </div>

    <hr>

    <div class="modal-content">

      <form action="/portfolio_sekolah/middlewares/whatsapp.php" method="POST" target="_blank" rel="noopener noreferrer">

        <div class="modal-form">
          <div class="input-form">
            <label for="course">course</label>
            <select id="course" name="course" required>
              <option id="0" value="">choose</option>
              <?php foreach ($course as $row) : ?>
                <option id="<?= $row['id'] ?>" value="<?= $row['title'] ?>"><?= $row['title'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="input-form">
            <label for="kelas">class</label>
            <select id="kelas" name="kelas" required>
              <option value="">choose</option>
              <option value="online">online</option>
              <option value="offline">offline</option>
            </select>
          </div>

          <div class="form-personal-data">

            <h4>lorem ipsum</h4>
            <div class="combo-form">
              <div class="input-form">
                <label for="firstname">firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder="lorem ipsum" required>
              </div>

              <div class="input-form">
                <label for="lastname">lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="lorem ipsum" required>
              </div>
            </div>

            <div class="input-form">
              <label for="birthday">date of birth</label>
              <input type="date" name="birthday" id="birthday" placeholder="lorem ipsum" required>
            </div>

            <div class="input-form">
              <label for="handphone">no handphone</label>
              <input type="text" name="handphone" id="handphone" placeholder="lorem ipsum" required>
            </div>

            <div class="input-form">
              <label for="email">email</label>
              <input type="text" name="email" id="email" placeholder="lorem ipsum" required>
            </div>

          </div>

        </div>

        <hr>

        <div class="modal-footer">
          <div class="btn-modal">
            <button type="submit" class="btn btn-primary">enroll course</button>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>