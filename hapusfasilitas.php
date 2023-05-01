<?php 

$ambil =  $koneksi->query("SELECT * FROM fasilitas WHERE fasilitas_id='$_GET[id] ' ");
$pecah =  $ambil->fetch_assoc();
$fotoproduk = $pecah['gambar_fasilitas'];
if(file_exists("./foto_fasilitas/$fotoproduk"))
{
	unlink("./foto_fasilitas/$fotoproduk");
}

$koneksi->query("DELETE FROM fasilitas WHERE fasilitas_id='$_GET[id] ' ");

echo "<script>alert('fasilitas terhapus'); </script>";

echo "<script>location='dashboard.php?halaman=fasilitas'; </script>";
?>


<!-- <script>alert('menu terhapus'); </script>
<script >location='index.php?halaman=produk';  </script> -->