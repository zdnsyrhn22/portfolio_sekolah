<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/style.css" />
    <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/navbar.css" />
    <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/contact.css" />
    <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/modal.css" />
    <link rel="stylesheet" href="/portfolio_sekolah/stylesheets/footer.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Courses</title>
</head>

<body>
    <!-- navbar -->
    <?php include '../components/navbar.php' ?>

    <div class="hero-contact">
        <div class="contact-us">
            <div class="title-section">
                <div class="title">
                    <h2>contact us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <form action="mailto:someone@example.com" method="POST">

                <div class="combo-form">
                    <div class="input-form">
                        <label for="firstname">first name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="first name">
                    </div>
                    <div class="input-form">
                        <label for="lastname">last name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="last name">
                    </div>
                </div>

                <div class="input-form">
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="you@company.com">
                </div>

                <div class="input-form">
                    <label for="phone-number">phone number</label>
                    <input type="text" id="phone-number" name="phone-number" placeholder="+62(021) 000-0000">
                </div>

                <div class="input-form">
                    <label for="message">message</label>
                    <textarea id="message" name="message" class="" id="" cols="100%" rows="10"></textarea>
                </div>

                <div class="btn-contact">
                    <button class="btn btn-primary" type="reset">send message</button>
                </div>

            </form>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53363.44620180283!2d106.9496579917189!3d-6.229166123720261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421c2ebd463%3A0xccfcc89b95aaf1ae!2sGrand%20Indonesia!5e0!3m2!1sid!2sid!4v1667304079773!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container">
        <div class="contact-info">
            <div class="title-section-middle">
                <div class="title">
                    <h2>Lorem, ipsum</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est labore
                        iure veritatis nam eum, aliquam harum rem repellendus.
                    </p>
                </div>
            </div>
            <div class="content-section">
                <div class="card card-contact-info">
                    <img src="/portfolio_sekolah/asset/icon/gold-medal.png" class="card-icon" alt="icon-chat">
                    <h5 class="card-title">chat to sales</h5>
                    <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur</p>
                    <p class="card-text">082348762374</p>
                </div>
                <div class="card card-contact-info">
                    <img src="/portfolio_sekolah/asset/icon/gold-medal.png" class="card-icon" alt="icon-address">
                    <h5 class="card-title">visit us</h5>
                    <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur</p>
                    <p class="card-text">082348762374</p>
                </div>
                <div class="card card-contact-info">
                    <img src="/portfolio_sekolah/asset/icon/gold-medal.png" class="card-icon" alt="icon-chat">
                    <h5 class="card-title">call us</h5>
                    <p class="card-subtitle">Lorem ipsum dolor sit amet consectetur</p>
                    <p class="card-text">082348762374</p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include "../components/footer.php" ?>
</body>

<?php include "../components/modal.php" ?>
<script src="/portfolio_sekolah/javascripts/modal.js"></script>

</html>