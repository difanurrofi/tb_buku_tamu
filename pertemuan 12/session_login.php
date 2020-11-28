<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
    $username=$_POST['username'];
    $pw=$_POST['password'];
    
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "db_buku_tamu");
    $sql="SELECT * from admin WHERE username='$username' and
    password=sha1('$pw')";
    $hasil=mysqli_query ($conn,$sql);
    $row=mysqli_fetch_row($hasil);
    if ($row){
        do{
            $_SESSION['username']=$_POST['username'];
            header ("location: session_securepage.php");
        }
        while ($row=mysqli_fetch_row($hasil));

    }
    else{
        echo "<center><font color=red>USERNAME DAN PASSWORD SALAH!
        </font>";
    include "session_login.html";
}
?>