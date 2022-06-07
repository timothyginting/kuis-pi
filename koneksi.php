<?php
    // Membuat variabel, ubah sesuai dengan nama host dan database pada hosting
    $host = "localhost";
    $user = "root"; // Sesuaikan dengan local
    $pass = ""; // Sesuaikan dengan local
    $db = "db_motor";
    //Menggunakan objek mysqli untuk membuat koneksi dan menyimpan nya dalam variabel $mysqli
    $mysqli = new mysqli($host, $user, $pass, $db);
?>