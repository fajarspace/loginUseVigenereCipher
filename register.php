<?php
require "config.php";
require "cipher/encrypt.php";
$sql = "SELECT * FROM user WHERE username = '$user' ";
$query = $db->query($sql);
if ($query->num_rows != 0) {
    echo "<div align='center'>username Sudah Terdaftar! <a href='index'>Back</a></div>";
} else {
    if (!$user || !$pass || !$key) {
        echo "<div align='center'>Masih ada data yang kosong! <a href='index'>Back</a>";
    } else {
        $data = "INSERT INTO user VALUES (NULL, '$user', '$pass', '$key')";
        $simpan = $db->query($data);
        if ($simpan) {
            echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index'>Login</a></div>";
        } else {
            echo "<div align='center'>Proses Gagal!</div>";
        }
    }
}
if (isset($user)) {
    echo "Key: <b>" . $key . "</b><br>";
    echo "Username: <b>" . $username . "</b><br>";
    echo "Encripted Text: <b>" . $user . "</b><br>";
}
if (isset($pass)) {
    echo "Password: <b>" . $password . "</b><br>";
    echo "Encripted Text: <b>" . $pass . "</b><br>";
}
?>

