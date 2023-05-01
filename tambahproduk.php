<h2>tambah Menu</h2>



<form method="post" enctype="multipart/form-data"> 
<div clas="form-group">
	<label>Nama menu</label>
	<input type="text" class="form-control" name="nama">
</div>
<div clas="form-group">
	<label>harga menu</label>
	<input type="text" class="form-control" name="harga">
	
</div>
	<div class="form-group">
		<label>foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div>
		<button class="btn btn-primary" name="save">Submit</button>
	</div>
</form>
<?php  
if(isset($_POST['save'])){

	$nama =$_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "./foto_produk/".$nama);
	$koneksi-> query("INSERT INTO menu (nama_menu,harga_menu,foto_menu,deskripsi_menu)
	VALUES ('$_POST[nama]',$_POST[harga],'$nama','$_POST[deskripsi] ' ) ");

	echo " <div class='alert alert-info'>Data tesemipan</div> ";
 	echo "<meta http-equiv='refresh' content='1; url=dashboard.php?halaman=produk' >";
}

?>


