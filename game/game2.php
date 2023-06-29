<?php
$conn = mysqli_connect('localhost','id20029969_root','1D3?my{~Pp5v@n?-','id20029969_user_db');
session_start();
$_SESSION['game']=2;

if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
{
    $id=$_SESSION['user_id'];
    $select = " SELECT * FROM game WHERE id = '$id'";

    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
    //user present

   $gid=$_SESSION['game'];
    $select2 = " SELECT * FROM game WHERE gameid = '$gid' and   id = '$id'";

    $result2 = mysqli_query($conn, $select2);
 
    if(mysqli_num_rows($result2) > 0){
 
    //game present
    if(isset($_POST['submit'])){

        $like = 1;
        $select3 = " SELECT liked FROM game WHERE id = '$id' and liked=0 and gameid = '$gid'";
        $result3 = mysqli_query($conn, $select3);
        if(mysqli_num_rows($result3) > 0){
       //user not liked
       $update = "UPDATE game set liked = 1 where id='$id'and gameid = '$gid'";
       mysqli_query($conn, $update);

        }
        else
        {
            $update = "UPDATE game set liked = 0 where id='$id'and gameid = '$gid'";
            mysqli_query($conn, $update); 
        }


    }
    
      
    }else{
       $insert2 = "INSERT INTO game(id, gameid, liked) VALUES('$id','$gid',0)";
        mysqli_query($conn, $insert2);
    }
 
      
    }else{
        $insert = "INSERT INTO game(id, gameid, liked) VALUES('$id',0,0)";
        mysqli_query($conn, $insert);
    }

}

if(isset($_POST['submit'])){

    $like = 1;
    
}
else
{
    $like=0;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WGT Ishimura</title>
    <script src="https://kit.fontawesome.com/dfc3a35a22.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://istishimura.000webhostapp.com/game/gamestyle.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
                
            <?php




$_SESSION['start_time'] = time();
$_SESSION['time_stored'] = true;
$_SESSION['opend'] = 1;

?>

        <nav class="navbar navbar-expand-lg navbar-dark ">

            <div class="brand"> <a class="navbar-brand" href="../index.php"><img src="icon/icon.png" class="icon">WGT ISHIMURA</a></div>
    
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
                            <a class="nav-link" href="../login_form.php">LOGIN</a>
                            <?php } ?>
                        </div>
    
                    </li>
                    <li class="navbar-item2">
                        <div class="item2"><a class="nav-link" href="">CONTACT</a></div>
                    </li>
                    <li class="navbar-item3">
                        <div class="item3"><a class="nav-link" href="../mygame.php">💓MY GAMES</a></div>
                    </li>
    
                    <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
                             {
                             ?>
                              <li class="navbar-item4 dropdown">
                        <div class="item4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
    
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                               <h3>Welcome <span><?php  if (isset($_SESSION['user_name'])) : ?>
                             
                               
                                 
                                  <?php echo $_SESSION['user_name']; ?>
                         
                     
                                  <?php endif ?></span></h3>
                                <li><a class="dropdown-item nav-link" href="#">HIGHSCORE</a></li>
                                <li> <a class=" dropdown-item nav-link" href="../logout.php">LOGOUT</a></li>
                            </ul>
                        </div>
                    </li>
                            <?php }else{ ?>
                            
                            <?php } ?>
                        
    
    
    
                </ul>
    
            </div>
        </nav>
    <div class="bg">
        <iframe src="https://www.crazygames.com/embed/crazy-roll-3d" style="width: max(70%); height: max(80%);" frameborder="0" allow="gamepad *;"></iframe>
        <form method="post">
<input type="submit" name="submit" value="Add to My Games" style="background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer; position:absolute; left: 72%; top:100px">
</form>
<div style="color:#fff000; height:50%; width:25%; position:absolute; left: 72%; top: 175px;"><h3>Description</h3>Crazyroll 3D is an addictive endless running game inspired by Slope. Control a ball that’s thrust down a series of slanted and sloped platforms. Avoid all the obstacles, collect diamonds, and roll as far you can!<br><br>Controls:<br>&#x2022; Press the AD or left and right arrow keys to steer<br>&#x2022;Use the 1, 2, or 3 keys to use power-ups</div>
    </div>
</div>
</body>

</html>