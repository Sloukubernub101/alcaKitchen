<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cascading stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <title>Alca Kitchen | Home</title>
</head>
<body class="bg-light">
    <!-- header -->
    <?php 
        require 'header.php';
    ?>
    <!-- homeCarousel -->
    <?php 
        require 'homeCarousel.php';
    ?>
    <!-- menuSection -->
    <?php 
        require 'menuSection.php';
    ?>
    <!-- contact -->
    <?php 
        require 'contact.php';
    ?>
    <!-- location -->
    <section class="location">
        <div class="location-header d-flex align-items-center justify-content-center">
            <h1>Location</h1>
        </div>
        <div class="container-fluid col-12 d-flex justify-content-center">
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d213.47860538938676!2d116.08859405378416!3d5.915768206576299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smy!4v1609119047033!5m2!1sen!2smy"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="position-relative page-footer">
        <!-- links -->
        <div class="container text-left" style=" font-family: 'Nanum Pen Script', cursive;">
            <div class="row d-flex flex-row">
                <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-dark">More</h5>
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="joinUS.php" class="text-dark">Join us</a>
                        </li>
                        <li>
                            <a href="#" class="text-dark">Membership</a>
                        </li>
                        <li>
                            <a href="#" class="text-dark">Find us</a>
                        </li>
                        <li>
                            <a href="#" class="text-dark">Social media</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-around align-items-center pb-2">
                    <div class="social col-lg-6 justify-content-around col-md-6 col-sm-12 d-flex">

                        <a href="#" class="fb-ic">
                            <i class="fa fa-facebook fa-lg mr-md-5 mr-3 fa-2x text-dark"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-whatsapp fa-lg mr-md-5 mr-3 fa-2x text-dark"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-instagram fa-lg mr-md-5 mr-3 fa-2x text-dark"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-phone fa-lg mr-md-5 mr-3 fa-2x text-dark"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-envelope fa-lg mr-md-5 mr-3 fa-2x text-dark"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <!-- Search for food XD -->
                    <form action="" class="input-group">
                        <input type="text" class="form-control form-control-sm" type="text" placeholder="What would you like to eat?" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-success my-0" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 mb-4">
                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email"
                        aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-success my-0" type="button">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-copyright col-12 d-flex justify-content-center text-dark pb-4">© 2020 Copyright:
            <a href="https://alcakitchen.com/" class="text-decoration-none"> Alca Kitchen</a>
        </div>
    </footer>
    
    <!-- bootstrap css -->
    <script src="bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>