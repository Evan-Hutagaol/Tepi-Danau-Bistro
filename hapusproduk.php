<?php 

$ambil =  $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah =  $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_menu'];
if(file_exists("./foto_produk/$fotoproduk"))
{
	unlink("./foto_produk/$fotoproduk");
}

$koneksi->query("DELETE FROM menu WHERE id_menu='$_GET[id] ' ");


echo "<script>alert('menu terhapus'); </script>";
echo "<script>location='dashboard.php?halaman=produk';</script>";
?>


<!-- <script>alert('menu terhapus'); </script>
<script >location='index.php?halaman=produk';  </script> -->