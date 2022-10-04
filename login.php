<?php
   session_start();
   require_once("config.php");
   $result = $_POST["username"];
   $hasil = $_POST["password"];
   $sql = "SELECT * FROM user WHERE username = '$result' ";
   $query = $db->query($sql);
   $final = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo '<div class="alert alert-danger">*Username belum terdaftar <a href="login" >Kembali</a> </div>'; 
   } else {
     if($hasil <> $final['password']) {
       echo '<div class="alert alert-danger">*Password Salah <a href="login" >Kembali</a></div>'; 
     } else {
       $_SESSION['username'] = $final['username'];
       header('location:halo/');
       $_SESSION['username'] = $final['username'];
       header('location:halo/');
     }
   }
?>
