

<?php  
$ambil = $koneksi->query("SELECT * FROM menu WHERE  id_menu='$_GET[id]' ");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<h2>Edit data (<?php echo $pecah['nama_menu']; ?>)</h2>


<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label >Nama menu</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_menu']; ?> " >
	</div>
	<div class="form-group">
		<label >Harga </label>
		<input type="text" name="harga" class="form-control" value="<?php echo $pecah['harga_menu']; ?> " >
	</div>
	<div class="form-group">
		<label >Ganti gambar</label>
		<input type="file" name="foto" class="form-control"  >
	</div>
		<div class="form-group">
		<label >Deskripsi </label>
		<textarea name="Deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_menu']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah">ubah data</button>
</form>

<?php  
if (isset($_POST['ubah'])) 
{
	$namafoto = $_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];

	if (!empty($lokasifoto) )
	{
		move_uploaded_file($lokasifoto, "./foto_produk/$namafoto");

		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',
		harga_menu='$_POST[harga]',foto_menu='$namafoto',deskripsi_menu='$_POST[Deskripsi]'
		WHERE id_menu ='$_GET[id] ' ");
	}
	else
	{
		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',
		harga_menu='$_POST[harga]',foto_menu='$namafoto',deskripsi_menu='$_POST[Deskripsi]' WHERE id_menu ='$_GET[id] ' ");
	}
	echo "<script>alert('data menu berhasil diubah') </script>";
	echo "<script>location='dashboard.php?halaman=produk'; </script>";
}
?>