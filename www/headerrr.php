<?php include_once "validation_header.php";
    //  include_once "logout.php";
 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>

.price-tag {
    color: #E53C3A;
    font-weight: 600;
}
        body {
            font-family: 'Nunito', sans-serif;
            background: rgb(194, 222, 255)
        }

        .h1:hover {
            text-decoration-style: none;
        }

        h1 {
            font-size: 3.5em;
        }

        h2 {
            margin-top: 1em;
            margin-bottom: 1em;
            color: #183050;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-family: Lato, sans-serif;
        }

        h3 {
            color: white;
            /* text-shadow: 1px 1px 4px rgb(0, 0, 0); */
            background-color: #E53C3A;
            font-size: 1.5em;
        }

        h3 + p {
            color: white;
        }

        h5 {
            font-weight: bold;
            font-family: Lato, sans-serif;
        }

        .price-tag {
            color: #E53C3A;
            font-weight: 600;
        }

        .img-unique {
            height: 250px;
            object-fit: cover;
            margin-top: 1em;
        }

        .logo-fleur {
            height: 15vh;
            display: inline-block;
        }

        .img-section:hover {
            opacity: 80%;
            transition: width 2s;
        }

        header {
            background-color: #fff;
        }

        .nav-link {
            font-size: 1.2em;
        }

        .hero-background {
            background-image: url(assets/img/hero-riviera.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 330px;
        }

        .fromulaire-reservation {
            margin-top: 2%;
            margin-left: 5%;
            margin-right: 5%;

            padding: 23px;
            background-color: white;
            opacity: 0.8;
        }
        .bg-light {
    background-color: #f8f9fa !important;
}
    </style>
</head>
<body>

<header>
    <!-- Bannière réduction -->
    <div class="banner alert-info text-white p-1" style="text-align: center; background-color: #344764;"><i
            class="icon-gift icon-white"></i>Utilisez le code COVID et bénéficiez de -15% sur TOUS les voyages !
    </div>


    <!-- Barre de navigation avec logo -->
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="row">
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo-fleur.png" alt="Edelweiss" class="float-left logo-fleur mr-2">
                    <p class="align-middle">
                    <h1 class="h1-home"><span style="color:rgb(194, 31, 31);">local</span> <span
                            style="color:rgb(223, 84, 84)">taste</span></h1></p>
                </a>
            </div>

            <button class="navbar-toggler" data-toggle="collapse" data-target=#navbarCollapse><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a href="index.php" class="nav-link">Accueil</a>
                    </li>
                    <li>
                        <a href="nos_preferences.php" class="nav-link">Nos coups de coeur</a>
                    </li>
                    <li>
                        <a href="notre-entreprise.php" class="nav-link">Notre entreprise</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>

                <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
                Login
                </button>
                      
                      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="form-title text-center">
                                <h4>Login</h4>
                              </div>
                              <div class="d-flex flex-column text-center">
                                <form method="post" action="index.php">
                                  <div class="form-group">
                                    <input type="email" class="form-control" name="email1"placeholder="Your email address..." id="email">
                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control" name="password1" placeholder="Your password..."id="password">
                                  </div>
                                  <input type="submit" class="btn btn-info btn-block btn-round" id="login">Login</button> 
                                </form>
                                
                                <div class="text-center text-muted delimiter">or use a social network</div>
                                <div class="d-flex justify-content-center social-buttons">
                                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="fab fa-facebook"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                    <i class="fab fa-linkedin"></i>
                                  </button>
                                </di>
                              </div>
                            </div>
                          </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                            </div>
                        </div>
                      </div>

            </div>
        </nav>
    </div>
    <hr>
    <p class="error"><?php echo $error;?></P><p class="success"><?php echo $success;?></P>
    <p style="color:green;"><?php echo $userexite ?></p>
</header>