<?php

$conn = mysqli_connect('localhost','id20029969_root','1D3?my{~Pp5v@n?-','id20029969_user_db');

session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>