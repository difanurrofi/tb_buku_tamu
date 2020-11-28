<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "session_check.php";
?>
<html>
<center>
<p align="right">
<a href="session_logout.php">
 <font color=blue size=6> Log Out</font>
</a>
</p>
<center>
<h1>Halo Selamat Datang
<?php

 echo $_SESSION['username'];
 echo "</h1>";
 echo "<p>Anda Siapa</p><hr>";
 include "tampil.php";
?>
</table>