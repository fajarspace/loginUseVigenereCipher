<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:../index'); 
} else { 
   $result = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    berhasil <br>
    <a href="../logout.php">Logout</a>
</body>
</html>