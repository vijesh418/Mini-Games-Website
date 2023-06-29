


<?php

@include 'config.php';

session_start();


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMER ARENA</title>
    <script src="https://kit.fontawesome.com/dfc3a35a22.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/favicon.ico">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark ">

        <div class="brand"> <a class="navbar-brand" href=""><img src="icon/icon.png" class="icon">GAMER ARENA</a></div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">

            <ul class="navbar-nav  ms-auto">
                <li class="navbar-item1">
                    <div class="item1">   
                        <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                         {
                         ?>
                        <?php }else{ ?>
                        <a class="nav-link" href="http://localhost/web/login_form.php">LOGIN</a>
                        <?php } ?>
                    </div>

                </li>
                <li class="navbar-item2">
                    <div class="item2"><a class="nav-link" href="">CONTACT</a></div>
                </li>
                <li class="navbar-item3">
                    <div class="item3"><a class="nav-link" href="">💓MY GAMES</a></div>
                </li>

                <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                         {
                         ?>
                          <li class="navbar-item4 dropdown">
                    <div class="item3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                           <h3>welcome <span><?php  if (isset($_SESSION['user_name'])) : ?>
                         
                           
                             
                              <?php echo $_SESSION['user_name']; ?>
                     
                 
                              <?php endif ?></span></h3>
                            <li><a class="dropdown-item nav-link" href="#">highscore</a></li>
                            <li> <a class=" dropdown-item nav-link" href="http://localhost/web/logout.php">LOGOUT</a></li>
                        </ul>
                    </div>
                </li>
                        <?php }else{ ?>
                        
                        <?php } ?>
                    



            </ul>

        </div>
    </nav>

    <section class="sectionh">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 col-sm-12 col-md-6 heading">
                    <p class="subtitle">GAMER ARENA</p>

                    <h1 class="htitle ">
                        LET THE <span class="span">BATTLE</span> <br>BEGIN
                    </h1>
                </div>

                <div class="col-lg-6 col-sm-12 col-md-6 himg">
                    <img src="background/game-bg.png" class="hero">
                </div>


            </div>




        </div>
    </section>


    <section class="sectiongame">

        <div class="zone">

            <p class="subtitle">GAME ZONE</p>

            <h2 class="h2 section-title">
                THE <span class="span">BATTLE</span> STARTS HERE
            </h2>

        </div>






        <div class="container-fluid">

            <div class="row">



                <div class="col-lg-4 col-sm-12 col-md-4 cards">

                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/index.html">
                            <img src="background/game.jpg" width="400" height="470" loading="lazy" class="img-cover">
                        </a>
                    </figure>

                    <div class="card-content">

                        <a href="#" class="c-link">Zombie</a>

                        <h3 class="h3">
                            <a href="http://localhost/web/game/game.php" class="c-link">White Walker <span class="span">Daily</span></a>
                        </h3>

                        <p class="">
                            <span class="span">WELCOME</span>
                        </p>

                    </div>

                </div>


                <div class="col-lg-4 col-sm-12 col-md-4 cards">

                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/index.html">
                            <img src="background/game.jpg" width="400" height="470" loading="lazy" class="img-cover">
                        </a>
                    </figure>

                    <div class="card-content">

                        <a href="#" class="c-link">Zombie</a>

                        <h3 class="h3">
                            <a href="http://localhost/web/game/game.php" class="c-link">White Walker <span class="span">Daily</span></a>
                        </h3>

                        <p class="">
                            <span class="span">WELCOME</span>
                        </p>

                    </div>

                </div>



                <div class="col-lg-4 col-sm-12 col-md-4 cards">

                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/index.html">
                            <img src="background/game.jpg" width="400" height="470" loading="lazy" class="img-cover">
                        </a>
                    </figure>

                    <div class="card-content">

                        <a href="#" class="c-link">Zombie</a>

                        <h3 class="h3">
                            <a href="http://localhost/web/game/game.php" class="c-link">White Walker <span class="span">Daily</span></a>
                        </h3>

                        <p class="">
                            <span class="span">WELCOME</span>
                        </p>

                    </div>

                </div>



            </div>


        </div>
    </section>




    <footer class="footer">
        <div class="details">
            <a href="#" class="f-title">GAMER ARENA</a>
            <ul class="non">

                <li><a href="tel:+241245654235" class="item-text">📞Phone : +24 1245 654 235</a></li>

                <li><a href="mailto:info@exemple.com" class="item-text">✉Email : info@exemple.com</a></li>

            </ul>


        </div>




        <div class="social">

            <p class="follow-title">Follow Us</p>




            <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>



            <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>


            <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>



            <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin fa-2x"></i>
            </a>



        </div>





        <div class="footer-bottom">
            <div class="f-container">

                <p class="team">
                    <a href="#" class="game-link">GAMER ARENA</a><br>
                    developed by vijesh,sidhanth,vijay
                </p>

            </div>
        </div>


    </footer>











    <a href="#top" class="back-top-btn">
        🔺
    </a>



</body>

</html>