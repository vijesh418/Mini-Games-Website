<?php
$conn = mysqli_connect('localhost','id20029969_root','1D3?my{~Pp5v@n?-','id20029969_user_db');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WGT Ishimura</title>
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <script src="https://kit.fontawesome.com/dfc3a35a22.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link href="https://videos.crazygames.com/crazy-roll-3d/3/crazy-roll-3d-205x115.mp4" rel="preload" as="video">-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="style.css">-->
    <script>
      function show(shown, hidden) {
        document.getElementById(shown).style.display='block';
        document.getElementById(hidden).style.display='none';
        return false;
      }
    </script>
     <script type="importmap">
         {
             "imports": {
                 "THREE": "https://cdn.skypack.dev/pin/three@v0.147.0-OePr4dXxGMRPSzlPRCyx/mode=imports/optimized/three.js",
                 "OrbitControls": "https://unpkg.com/three@0.138.0/examples/jsm/controls/OrbitControls.js",
                 "TWEEN": "https://www.unpkg.com/tween@0.9.0/tween.js",
                 "InteractionManager": "https://unpkg.com/three.interaction@0.2.2/build/three.interaction.js"
             }
         }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Russo+One:wght@100;200;300;400;500;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kenia&display=swap');
canvas {
  position: fixed;
  top: 0;
  left: 0;
}

* {
    font-family: 'Russo One', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

.container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
}

.container .content {
    text-align: center;
}

.container .content h3 {
    font-size: 30px;
    color: #333;
}

.container .content h3 span {
    background: crimson;
    color: #fff;
    border-radius: 5px;
    padding: 0 15px;
}

.container .content h1 {
    font-size: 50px;
    color: #333;
}

.container .content h1 span {
    color: crimson;
}

.container .content p {
    font-size: 25px;
    margin-bottom: 20px;
}

.container .content .btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background: #333;
    color: #fff;
    margin: 0 5px;
    text-transform: capitalize;
}

.container .content .btn:hover {
    background: crimson;
}

.form-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-container form {
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    background: #fff;
    text-align: center;
    width: 500px;
}

.form-container form h3 {
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;
}

.form-container form input,
.form-container form select {
    width: 100%;
    padding: 10px 15px;
    font-size: 17px;
    margin: 8px 0;
    background: #eee;
    border-radius: 5px;
}

.form-container form select option {
    background: #fff;
}

.form-container form .form-btn {
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}

.form-container form .form-btn:hover {
    background: crimson;
    color: #fff;
}

.form-container form p {
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-container form p a {
    color: crimson;
}

.form-container form .error-msg {
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 20px;
    padding: 10px;
}


.brand {
    background-color: #E9A401;
    display: block;
    top: 0;
    left: -15px;
    right: auto;
    margin: 0%;
    padding: 0.8%;
    text-align: center;
}


.brnd {

    font-size: 24px;
    font-weight: 900;
    padding: 0px;
    margin: 0%;
    color: white;
}

body {
  margin: 0%;

  overflow-x: hidden;
}





.brand {
  background-color: #E9A401;
  display: block;
  top: 0;
  left: -15px;
  right: auto;
  margin: 0;
  padding: 0.8%;

}


.navbar-brand {

  font-size: 24px;
  font-weight: 900;
  padding: 0px;
  margin: 0%;

}


.icon {
  height: 50px;
  padding: 0px;
  margin: 0%;

}

.navbar {
  padding: 0px;
  margin: 0%;
  background-color: #242533;

}

.nav-link {
  font-weight: 800;
  font-size: 16px;
  color: #FFFFFF;

}

.nav-link:visited {
  font-weight: 800;
  font-size: 16px;
  color: #FFFFFF;

}





.navbar-item4 {
  padding-right: 20px;
}

.navbar-item3,
.navbar-item2,
.navbar-item1 {
  padding-right: 20px;

}

.item1:hover,
.item2:hover,
.item3:hover {
  background-color: #E9A401;
  color: black;
}

.nav-link:hover {
  color: black;
}




.sectionh {
  background-image: url("background/bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}


.row {
  color: #FFFFFF;
}

.heading {
  width: max-content;
  padding-top: 10%;
  padding-left: 10%;
  padding-right: 5%;
}

.himg {
  padding: 7% 0% 0% 0%;
  width: fit-content;
  max-width: 100%;


}
.hero {
  max-width: 100%;
}
.container {
  color: #FFFFFF;
  margin-right: 0%;
  padding-top: 83px;
  width: fit-content;
  margin-left: 200px;
}

.subtitle,
.span {
  color: #E9A401;
}

.htitle {

  font-weight: 900;
  font-size: 70px;
}

.subtitle {
  font-weight: 900;
  font-size: 25px;
}
.sectiongame {
  background-image: url("background/bg2.png");
  background-repeat: no-repeat;
  background-size: cover;
}

.zone {
  text-align: center;
  color: #FFFFFF;
  background-color: #27262C;
  padding-top: 20px;
  padding-bottom: 20px;
}

.card-content {
  background-color: #1C1327;
  padding-left: 3%;
}

.holder {
  margin-bottom: 0%;
  width: fit-content;
}

.cards {
  width: fit-content;
  margin: auto;
  padding: 0%;
}

.c-link {
  color: #FFFFFF;
  text-decoration: none;
}

.c-link:hover {
  color: #E9A401;
}

.img-cover {
  max-width: 100%;
}
.back-top-btn {
  position: fixed;
  bottom: 10px;
  right: 15px;
  padding: 12px;
  z-index: 4;
  background-color: #E9A401;

}

.back-top-btn {
  text-decoration: none;
}

.footer {
  background-color: #1D191F;
  padding: 30px;
  padding-top: 2%;
}


.details {
  color: #90949D;
  width: max-content;
  padding-left: 5%;
  padding-bottom: 6%;
  display: inline-block;
}

.f-title {
  font-size: 25px;
  font-weight: 900;
  color: #FFFFFF;
  text-decoration: none;
}

.f-title:hover {
  color: #FFFFFF;
}

.item-text {
  color: #90949D;
  text-decoration: none;
  font-size: 17px;

}

.item-text:hover {
  color: #90949D;
}

.non {
  padding-top: 10%;
  margin: 0%;
}

.follow-title {
  font-size: 20px;
  font-weight: 900;
  color: #FFFFFF;
  text-decoration: none;
  padding-left: 2.5%;
  width: fit-content;
}

.social {
  display: inline-block;
  width: 200px;
  margin-left: 30%;
  padding-bottom: min(20%, 30px);
}

.social-link {
  padding-left: 3%;

}

.team {
  padding-top: 1.5%;
  padding-bottom: 1.5%;
  margin: 0%;

}

.footer-bottom {
  text-align: center;
  font-size: 15px;
  font-weight: 900;
  color: #FFFFFF;
  background-color: #151316;
}

.game-link {
  text-decoration: none;
  color: #E9A401;
}
.blur_effect{
    filter.blur(50px);
}
    </style>
</head>

<body>
      <div id="Page1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="brand"> <a class="navbar-brand" href="#"><img src="icon/icon.png" class="icon">WGT ISHIMURA</a></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
            aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav  ms-auto">
                <li class="navbar-item1">
                <div class="item1">   
                    <a class="nav-link" href="#" onclick="return show('movingscreen','Page1');">Interactive Page</a>
                </div>
                </li>
                <li class="navbar-item1">
                    <div class="item1">   
                        <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                         {
                         ?>
                        <?php }else{ ?>
                        <a class="nav-link" href="/login_form.php">Login</a>
                        <?php } ?>
                    </div>
                </li>
                <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                         {
                         ?>
                          <li class="navbar-item4 dropdown">
                    <div class="item3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                           <h3> Welcome <span><?php  if (isset($_SESSION['user_name'])) : ?>
                              <?php echo $_SESSION['user_name']; ?>
                              <?php endif ?> to the WGT Ishimura!</span></h3>
                            <li><a class="dropdown-item nav-link" href="#">Highscore</a></li>
                            <li> <a class=" dropdown-item nav-link" href="/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
                        <?php }else{ ?>
                        <?php } ?>
                <li class="navbar-item2">
                    <div class="item2"><a class="nav-link" href="mailto:siddhanthsuvarnaplatinum@gmail.com">Contact</a></div>
                </li>
                <li class="navbar-item3">
                    <div class="item3"><a class="nav-link" href="mygame.php">💓My Games</a></div>
                </li>
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
                        <a href="game/game.php">
                            <<video autoplay loop class="video blur_effect" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/punchers/2/punchers-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game.php" class="c-link">Punchers<span class="span"></span></a>
                        </h3>
                        <p class="">
                            <span class="span">Show your supremacy to your friends!</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game2.php">
                            <video autoplay loop class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="game/crazy-roll-3d-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                    <a href="/game/game2.php" class="c-link">Crazy Roll 3D </a>
                        </h3>
                        <p class="">
                            <span class="span">Roll Ahead!</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game3.php">
                            <video autoplay="" loop="" class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/striker-dummies/2/striker-dummies-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game3.php" class="c-link">Striker Dummies <span class="span"></a>
                        </h3>
                        <p class="">
                            <span class="span">Strike with all your might!</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game3.php">
                            <video autoplay="" loop="" class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/striker-dummies/2/striker-dummies-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game3.php" class="c-link">Extra stuff for tp <span class="span"></a>
                        </h3>
                        <p class="">
                            <span class="span">Yeah yeah wtv</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game4.php">
                            <video autoplay loop class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/foosball-3d/3/foosball-3d-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game4.php" class="c-link">Foosball 3D </a>
                        </h3>
                        <p class="">
                            <span class="span">Classic Foosball on your device!</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game5.php">
                            <video autoplay loop class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/jet-rush/1/jet-rush-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game5.php" class="c-link">Jet Rush</a>
                        </h3>
                        <p class="">
                            <span class="span">Escape Dystopia</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 cards">
                    <figure class="holder" style="--width: 400; --height: 470;">
                        <a href="game/game6.php">
                            <video autoplay loop class="video" style="height: 200px; width: 350px; filter: drop-shadow(rgba(0, 0, 0, 0.5) 0px 2px 4px); position: relative; z-index: 1; object-fit: cover;"><source src="https://videos.crazygames.com/infiltrating-the-airship/1/infiltrating-the-airship-205x115.mp4" type="video/mp4"></video>
                        </a>
                    </figure>
                    <div class="card-content">
                        <a href="#" class="c-link">Local Multiplayer</a>
                        <h3 class="h3">
                            <a href="/game/game6.php" class="c-link">Infiltrating the Airship</a>
                        </h3>
                        <p class="">
                            <span class="span">Henry Stickmin returns!</span>
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
            <a href="" class="social-link">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="social-link">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#" class="social-link">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="#" class="social-link">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
        </div>
        <div class="footer-bottom">
            <div class="f-container">
                <p class="team">
                    <a href="#" class="game-link">WGT Ishimura</a><br>
                    Developed independantly by Vijesh, Siddhanth and Vijay
                </p>

            </div>
        </div>
        </div>
    </footer>
    
       <?php

if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
{
    $id=$_SESSION['user_id'];
    $select = " SELECT * FROM timer WHERE id = '$id'";

    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
        if (isset($_SESSION['time_stored']) && $_SESSION['time_stored']==true) {

            $elapsedTime = time() - $_SESSION['start_time'];
           
          
           
     

            $update = "UPDATE timer set tim=tim+'$elapsedTime' where id='$id'";
            mysqli_query($conn, $update);
            if (isset($_SESSION['opend']) && $_SESSION['opend']==1) {
               $opend = $_SESSION['opend']; 
             $update2 = "UPDATE timer set tplay=tplay+1 where id='$id'";
                mysqli_query($conn, $update2);

            }

            $_SESSION['time_stored']=false;
          }
 
      
    }else{
        $insert = "INSERT INTO timer(id, tplay, tim) VALUES('$id',0,0)";
        mysqli_query($conn, $insert);
    }

}




?>

    
    <a href="#top" class="back-top-btn">
        🔺
    </a>
    <div id="movingscreen" style="display:none">
    <canvas id="bg"></canvas>
    </div>
    <script type="module" src="main.js"></script>
</body>
</html>