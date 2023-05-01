<style >
	.row{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 10px;
		background-color: 	#FFA07A;
		width: 100%;
	}
	.feed{
		color: blue;
		font-weight: bolder;
	}
	.isi{
		color: red;

	}
	.nama{
		font-weight: bolder;
	}
</style>
<h2>Selamat datang administartor</h2>

<br><br><br>
<h3 class="feed">FEEDBACK</h3>
	<section class="konten ">
	<div class="container">

		<div class="row">

			<?php $ambil = $koneksi->query("SELECT * FROM kontak"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			<div class="col-md-3">
				 <div class="">
				<h3 class="nama"><?php echo $perproduk['nama']; ?></h3>
				 <h4>from:  <?php echo $perproduk['email']; ?></h4>
				<h4>subjek:  <?php echo $perproduk['subjek']; ?></h4>
				<h5 class="isi"><?php echo $perproduk['isi']; ?></h5>
			</div>
 		
			</div>
				<?php } ?>
		</div>

	</div>

</section>