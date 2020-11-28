<?php
//Session akan dibahas pada materi selanjutnya.
include "session_check.php";
?>
<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
    <h1>DAFTAR TAMU</h1>
    <h2>Universitas Mercubuana</h2>
    <hr>
    <table border="1">
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "db_buku_tamu");
$sql="SELECT * FROM buku_tamu ORDER BY tanggal_tamu DESC";
$hasil=mysqli_query ($conn, $sql);
$row = mysqli_fetch_row($hasil);
    echo "<tr> 
            <td>No
            <td>Nama Tamu
            <td>Alamat
            <td>No.Telepon
            <td>Pesan
            <td>Tanggal Bertamu
            <td>Aksi";
if ($row)
{
 $n=1;
 do
{
 list ($id, $nama_tamu,$alamat_tamu,$no_telp_tamu,$pesan_tamu,
$tanggal_tamu)=$row;
    echo "<tr>
            <td>$id
            <td>$nama_tamu
            <td>$alamat_tamu
            <td>$no_telp_tamu
            <td>$pesan_tamu
            <td>$tanggal_tamu
            <td><a href='hapus.php?id=$id'>Hapus</a>";
    $n=$n+1;
    }
    while ($row=mysqli_fetch_row($hasil));
    }
else
{
echo "<tr><td colspan=7> <center>Tidak ada data";
}
?>
</body>

