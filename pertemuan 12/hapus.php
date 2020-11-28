<html>
<form action="proseshapus.php" method=post>
<center>
<h1>Detail Data</h1>
<hr>
<table border=1>
<?php
$id=$_GET['id'];
$conn=mysqlI_connect("localhost","root","");
mysqlI_select_db($conn, "db_buku_tamu");
$sql="SELECT * FROM buku_tamu WHERE id='$id'";
$hasil=mysqlI_query ($conn, $sql);
$row=mysqlI_fetch_row($hasil);
if ($row)
{
 do
 {
 list ($id, $nama_tamu,$alamat_tamu,$no_telp_tamu,$pesan_tamu,
$tanggal_tamu)=$row;
 echo "<tr><td>Nama <td>$nama_tamu
 <tr><td>Alamat<td>$alamat_tamu
 <tr><td>No. Telepon<td>$no_telp_tamu
 <tr><td>Pesan<td>$pesan_tamu
 <tr><td>Tanggal<td>$tanggal_tamu</table>";
 echo"<input type=hidden name=hapus_id_tamu value='$id'>";
 echo"<input type=hidden name=nama_tamu value='$nama_tamu'>";
 }
 while ($row=mysqlI_fetch_row($hasil));
 echo"<hr><input type=submit value='Konfirmasi Hapus'>";
}
else
{
echo "</table> <h2><font color=red>Data '$namabarang' Tidak Ada<h2>";
}
?>
</form>