<?php
session_start();
if (!isset($_SESSION['username']))
{
 echo "<center><h1>MAAF USERNAME ATAU PASSWORD ANDA SALAH";
 echo "<hr> <a href='session_logout.php'>Silakan Login Kembali
</a>";
 exit;
}
?>