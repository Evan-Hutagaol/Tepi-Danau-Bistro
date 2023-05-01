<?php 

session_start();
$koneksi = mysqli_connect("localhost", "root", "", "tdbistro") or die ('Gagal terhubung ke database')
 ?>
<h2>Fasilitas</h2>
<a href="dashboard.php?halaman=tambahfasilitas" class="btn btn-success">tambah fasilitas</a><br><br>
<table class="table table-bordered">
	<thead>
		<tr class="success" >
			<th>no</th>
			<th>nama fasilitas</th>
			<th>foto</th>
			<th>deskripsi fasilitas</th>
			<th>aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php $no= 1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM fasilitas"); ?>
		<?php while ($pecah = $ambil ->fetch_assoc()){ ?>
		<tr class="warning"  >
			<td><?php echo $no ?></td>
			<td><?php echo $pecah['nama_fasilitas']; ?></td>
			<td>
				<img src="./foto_fasilitas/<?php echo $pecah['gambar_fasilitas'] ?>" width="100">
			</td>
			<td><?php echo $pecah['deskripsi_fasilitas'] ?></td>
			<td>
				<a href="dashboard.php?halaman=hapusfasilitas&id=<?php echo $pecah['fasilitas_id']; ?>"   class="btn-danger btn" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')">hapus</a>
				<a href="" class="btn btn-primary">edit</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php } ?>
	</tbody>
</table>