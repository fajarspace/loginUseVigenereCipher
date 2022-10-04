<?php
    require "config.php";
    require "vigenere/encrypt.php";
    $sql = "SELECT * FROM user WHERE username = '$result' ";
    $query = $db->query($sql);
    if($query->num_rows != 0) {
        echo "<div align='center'>username Sudah Terdaftar! <a href='index'>Back</a></div>";
    } else {
        if(!$result || !$hasil || !$key) {
        echo "<div align='center'>Masih ada data yang kosong! <a href='index'>Back</a>";
        } else {
        $data = "INSERT INTO user VALUES (NULL, '$result', '$hasil', '$key')";
        $simpan = $db->query($data);
        if($simpan) {
            echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index'>Login</a></div>";
        } else {
            echo "<div align='center'>Proses Gagal!</div>";
        }
        }
    }
    if(isset($result)) {
        echo "Key: <b>". $key . "</b><br>";
        echo "Username: <b>". $user ."</b><br>";
        echo "Encripted Text: <b>". $result ."</b><br>"; 
    }

    if(isset($hasil)) {
        echo "Password: <b>". $pass ."</b><br>";
        echo "Encripted Text: <b>". $hasil ."</b><br>"; 
    }
?>