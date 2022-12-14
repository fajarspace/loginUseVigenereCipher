<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:halo/'); }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sistem login menggunakan vigenere cipher</title>
  </head>
<body>
<div class="kotak-login">
    <!-- REGISTER -->
    <form action="register.php" class="" method="post">
    <h2>Daftar</h2>
        <div class="form-group">
            <input class="form-control" required="required" name="username" id="username" rows="3" placeholder="masukkan username"></input>
        </div>
        <div class="form-group">
            <input class="form-control" required="required" name="password" id="password" rows="3" placeholder="masukkan password"></input>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Register" class="btn btn-info">
        </div>
    </form>

    <!-- LOGIN -->
    <form action="login.php" class="" method="post">
    <h2>Masuk</h2>
        <div class="form-group">
            <input class="form-control" required="required" name="username" id="" rows="3" placeholder="username"></input>
        </div>
        <div class="form-group">
            <input class="form-control" required="required" name="password" id="" rows="3" placeholder="password"></input>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="login" class="btn btn-info">
        </div>
    </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
