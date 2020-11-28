<?php
$id=$_POST['hapus_id_tamu'];
$nama_tamu=$_POST['nama_tamu'];

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "db_buku_tamu");
$sql="DELETE FROM buku_tamu WHERE id='$id'";
$hasil = mysqli_query ($conn, $sql);
if($hasil){
 echo"<br>Data $nama_tamu telah dihapus!";
}else{
 echo"<br>Data $nama_tamu gagal dihapus!";
}
?>