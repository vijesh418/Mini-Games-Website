<?php
$conn = mysqli_connect('localhost','id20029969_root','1D3?my{~Pp5v@n?-','id20029969_user_db');
session_start();
if(isset($_POST['submit'])){
   //$name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   //$cpass = md5($_POST['cpassword']);
   $select = " SELECT * FROM user_data WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
         $_SESSION['user_name'] = $row['name'];
          $_SESSION['user_id'] = $row['id'];
         header('location:index.php');
   }else{
      $error[] = 'Incorrect email or password!';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
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

  padding: 1%;
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
   </style>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
   <form action="" method="post">
   <div class="brand"> <a class="brnd" href="/index.php"><img src="icon/icon.png" class="icon"><br>GAMER ARENA</a></div>
      <h3>Login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">register now</a></p>
   </form>
</div>
</body>
</html>