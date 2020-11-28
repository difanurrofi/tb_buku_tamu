<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
<table border=1>
    <?php
    $nama_tamu=$_POST['nama_tamu'];
    $alamat_tamu=$_POST['alamat_tamu'];
    $no_telp_tamu=$_POST['no_telp_tamu'];
    $pesan_tamu=$_POST['pesan_tamu'];
   
    echo "<tr><td>Nama </td><td>$nama_tamu</td></tr>";
    echo "<tr><td>Alamat </td><td>$alamat_tamu</td></tr>";
    echo "<tr><td>No.Telp </td><td>$no_telp_tamu</td></tr>";
    echo "<tr><td>Pesan </td><td>$pesan_tamu</td></tr>";
   
    if (($nama_tamu!="") && ($alamat_tamu!="") && ($no_telp_tamu!="") && ($pesan_tamu!=""))
    {
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn, "db_buku_tamu");
        $sql="INSERT INTO buku_tamu (nama_tamu, alamat_tamu, 
        no_telp_tamu, pesan_tamu, tanggal_tamu)
        VALUES ('$nama_tamu','$alamat_tamu','$no_telp_tamu',
        '$pesan_tamu', NOW())";
        
        $hasil = mysqli_query($conn,$sql);
        if ($hasil){
                echo "<tr><td colspan=2>Data telah disimpan!</td></tr>";
        }
            else{
                echo"<tr><td colspan=2>Data gagal disimpan!</td></tr>";
        }
        }
        else{
            echo "<tr><td colspan=2>Data masih kosong!</td></tr>";
    }
    ?>