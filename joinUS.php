
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alca Kitchen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Alca Kitchen</a>
            <!-- Menu for desktop view -->
            <div class="justify-content-end mr-3" id="navbarSupportedContent">
                <ul class="navbar-nav btn-dark">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
          </nav>
    </header>   

    <!-- home page -->
    <section class="home jumbotron jumbotron-fluid text-center d-flex align-items-center justify-content-center" id="home">
        <div class="container">
            <h1>Join Us Now</h1>
            <p>We're hiring</p>
            <button type="button" class="btn btn-success">Join now</button>
        </div>
    </section>

    <!-- about page -->
    <section class="about jumbotron jumbotron-fluid d-flex justify-content-end bg-light" id="about"> 
        <div class="container col-lg-6 d-flex flex-column align-items-center justify-content-center text-center">
            <h1>We are hiring!</h1>
            <p class="text-left">Send your resume to Alcakitchen@gmail.com or apply online at whatsapp +60128449590</p>
        </div>
        <div class="container text-left d-none d-sm-none d-md-flex d-lg-flex align-items-center justify-content-center">
            <img src="images/logo.jpg" alt="" height="300rem" width="300rem">
        </div>
    </section>
    <section class="job">
        <img src="/images/job.jpeg" alt="">
    </section>

    <section class="post container jumbotron">
        <h1 class="display-4"><?php 
                                
                                echo $_POST['title'] ?></h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </section>

    <!-- footer for Alca Kitchen -->
    <footer class="page-footer bg-dark">
        <!-- links -->
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">More</h5>
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="joinUS.html" class="text-white">Join us</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Membership</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Find us</a>
                        </li>
                        <li>
                            <a href="#" class="text-white">Social media</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mx-auto d-flex justify-content-center align-items-center">
                    <div class="mb-5">

                        <a href="#" class="fb-ic">
                            <i class="fa fa-facebook fa-lg mr-md-5 mr-3 fa-2x text-white"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-whatsapp fa-lg mr-md-5 mr-3 fa-2x text-white"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-instagram fa-lg mr-md-5 mr-3 fa-2x text-white"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-phone fa-lg mr-md-5 mr-3 fa-2x text-white"></i>
                        </a>
                        <a href="#" class="fb-ic">
                            <i class="fa fa-envelope fa-lg mr-md-5 mr-3 fa-2x text-white"></i>
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

        <div class="footer-copyright text-right mr-4 py-3 text-white">© 2020 Copyright:
            <a href="https://alcakitchen.com/"> Alca Kitchen</a>
        </div>
    </footer>
  
</body>
</html> 