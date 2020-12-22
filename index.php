<?php 
    include 'header.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alca Kitchen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <!-- home page -->
    <section class="home jumbotron jumbotron-fluid text-center d-flex align-items-center justify-content-center" id="home">
        <div class="container">
            <h1>Alca Kitchen</h1>
            <button type="button" class="btn btn-success">Order now</button>
        </div>
    </section>

    <!-- about page -->
    <section class="about jumbotron jumbotron-fluid d-flex justify-content-end bg-light" id="about"> 
        <div class="container col-lg-6 d-flex flex-column align-items-center justify-content-center text-center">
            <h1>About us</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam non unde ut neque, ex harum veritatis pariatur minima, rem deleniti eum beatae atque quaerat. Blanditiis cumque, ex, doloribus quis dicta impedit at eum optio rem molestias esse. Vero, cupiditate libero?/p>
        </div>
        <div class="container text-left d-none d-sm-none d-md-flex d-lg-flex align-items-center justify-content-center">
            <img src="images/logo.jpg" alt="" height="300rem" width="300rem">
        </div>
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
        <h2 class="text-center">Contacts</h2>
        <div class="jumbotron d-flex flex-wrap">
            <div class="contactWilliam col-lg-6">
                <div class="card mb-3 style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <i class="fa fa-user-circle fa-5x"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ratno William</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, culpa.</p>
                                <p class="card-text"><small class="text-muted">+60 12-844 9590</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="findUs bg-dark text-white" id="findUs">
        <h2 class="text-center">Find us</h2><p class="text-center w-100 col-sm-6"><small class="text-muted">Infront of KEDAI RUNCIT JF , next to KG.GAGANA STREET</small></p>
        <div class="embed-responsive embed-responsive-21by9 container d-flex align-items-center justify-content-center flex-column">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d215.4161971786309!2d116.0887248625802!3d5.916247624540507!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smy!4v1605960158821!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <!-- register -->
    <section class="h-90 w-100 overflow-hidden position-relative register-login bg-dark d-flex align-items-center justify-content-center pt-10" id="register">
        <div class="mt-5 h-100 w-100 jumbotron col-lg-6 bg-dark text-white">
        <h2 class="text-center">Register</h2>
            
            <?php 
                if(isset($_GET['error'])) {
                    echo '<div class="alert alert-danger">Please fill in the blanks</div>';
                }
            ?>
            <form action="insert.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="firstname" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="lastname" class="form-control" placeholder="Last name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="userEmail">
                    </div>
                    <div class="col">
                        <input type="password" name="pwd" class="form-control" placeholder="Password" id="userEmail">
                    </div>
                </div>
                <div class="row w-100 m-auto">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
                <div class="row d-flex justify-content-end mr-1 mt-2">
                    <button type="submit" class="btn btn-success" name="submit" value="submit">Sign up</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer for Alca Kitchen -->
    <footer class="position-relative page-footer bg-dark">
        <!-- links -->
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">More</h5>
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="joinUS.php" class="text-white">Join us</a>
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
