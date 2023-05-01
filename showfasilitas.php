<?php 

session_start();
$koneksi = mysqli_connect("localhost", "root", "", "tdbistro") or die ('Gagal terhubung ke database')
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu makanan</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style >
  	.gambar{

  		width: 700px;
  		height: 500px;
  		border-radius: 0px;
  	}
  	.container{
  		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 	
  	}
  </style>

</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			
			<ul class="nav navbar-nav">
				<li><a href="index.php">Beranda</a></li>
				
				
			</ul>
		</div>
	</nav>

	<section class="konten ">
	<div class="container">

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM fasilitas"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			<div class="col-md-8">
				 <div class="">
				<h3><?php echo $perproduk['nama_fasilitas']; ?></h3>
				<img src="foto_fasilitas/<?php echo $perproduk['gambar_fasilitas']; ?>" class="gambar">
				<h5><?php echo $perproduk['deskripsi_fasilitas']; ?></h5>
			</div>
 		
			</div>
				<?php } ?>
		</div>

	</div>

</section>

</body>
</html>