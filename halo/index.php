<?php
require "../config.php";
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../index'); 
} else { 
   $user = $_SESSION['username']; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style.css">
    <title>berhasil masuk</title>
  </head>
<body>
    <h1>Berhasil!</h1>
    <a href="../logout.php">Logout</a>

</body>
</html>