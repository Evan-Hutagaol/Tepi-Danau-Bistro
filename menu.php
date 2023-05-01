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

  		width: 200px;
  		height: 150px;
  		border-radius: 0px;
  	}
  	.col-md-3{

  		 width: 250px;
  		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 		 text-align: center;
  		border-radius: 10px;
  		padding: 5px;
  		margin: 20px;
  		width: 20%;
  	}
  	.container{
  		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 		 text-align: center;
 		 margin-left: 100px;
 		 border-radius: 10px;
  	}
  	.row{
  		margin-left: 20px;
  	}
  	.menu{
  		border-bottom: 10px;
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
		<h1 class="menu" >Menu</h1>
____________________________________________________________________________________________________________________________
		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM menu"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			<div class="col-md-3">
				 <div class="">
				<img src="foto_produk/<?php echo $perproduk['foto_menu']; ?>" class="gambar">
				<h3><?php echo $perproduk['nama_menu']; ?></h3>
				<h5>Rp.<?php echo number_format($perproduk['harga_menu']); ?></h5>
				<a href="">Detail</a>
			</div>
			</div>
				<?php } ?>
		</div>

	</div>

</section>

</body>
</html>