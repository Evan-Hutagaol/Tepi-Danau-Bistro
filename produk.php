<h2>Data menu </h2>
<a href="dashboard.php?halaman=tambahproduk" class="btn btn-success">tambah menu</a><br><br>
<table class="table table-bordered">
	<thead>
		<tr class="success" >
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>foto</th>
			<th>deskripsi</th>
			<th>aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php $no= 1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM menu"); ?>
		<?php while ($pecah = $ambil ->fetch_assoc()){ ?>
		<tr class="warning">
			<td><?php echo $no ?></td>
			<td><?php echo $pecah['nama_menu']; ?></td>
			<td>Rp.<?php echo $pecah['harga_menu'] ?></td>
			<td>
				<center><img sy src="./foto_produk/<?php echo $pecah['foto_menu'] ?>  " width="150" ></center>
			</td>
			<td><?php echo $pecah['deskripsi_menu'] ?></td>
			<td>
				<a href="dashboard.php?halaman=hapusproduk&id=<?php echo $pecah['id_menu']; ?>" class="btn-danger btn"
					onclick="return confirm('Apakah anda yakin ingin menghapus data ?')" >hapus</a>
				<a href="dashboard.php?halaman=ubahproduk&id=<?php echo $pecah['id_menu']; ?>" class="btn btn-primary">edit</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php } ?>
	</tbody>
</table>
