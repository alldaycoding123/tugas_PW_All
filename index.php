<?php include 'includes/header.php' ?>
<?php
$result = $conn->query("SELECT nilai_mahasiswa.*, mata_kuliah.Mata_Kuliah FROM nilai_mahasiswa LEFT JOIN mata_kuliah ON nilai_mahasiswa.id_mata_kuliah = mata_kuliah.Mata_Kuliah");
?>

<h3>selamat datang, <?= $_SESSION['name'] ?></h3>
<h2 align="center">Perhitungan Nilai Mahasiswa</h2>
<div>
	<a class="btn btn-primary" href="form.php" style="">Tambah Data</a>
</div>
<table class="table">

	<tr>
		<td>Action</td>
		<td>Mata Kuliah</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Tugas</td>
		<td>UTS</td>
		<td>UAS</td>
		<td>Keterangan</td>
	</tr>
	<?php if ($result && $result->num_rows > 0): ?>
		<?php while ($row = $result->fetch_assoc()): ?>
			<?php
			$id_mata_kuliah = $row['id_mata_kuliah'];
			$nim = $row['nim'];
			$nama = $row['nama'];
			$tugas = $row['tugas'];
			$uts = $row['uts'];
			$uas = $row['uas'];
			$nilai_akhir = (0.3 * $tugas) + (0.3 * $uts) + (0.4 * $uas);
			if ($nilai_akhir > 70) {
				$keterangan = 'LULUS';
			} else {
				$keterangan = "TIDAK LULUS";
			}
			?>
			<tr>
				<td>
					<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
					<a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger"
						onclick="return confirm('Apakah anda yakin untuk menghapus data ini	?')">Hapus</a>
				</td>
				<td><?= $row['Mata_Kuliah'] ?></td>
				<td><?= $row['nim'] ?></td>
				<td><?= $row['nama'] ?></td>
				<td><?= $row['tugas'] ?></td>
				<td><?= $row['uts'] ?></td>
				<td><?= $row['uas'] ?></td>
				<td><?= $keterangan ?></td>
			</tr>
		<?php endwhile ?>
	<?php else: ?>
		<tr>
			<td colspan="6">Data belum tersedia</td>
		</tr>
	<?php endif ?>
</table>


<?php include 'includes/footer.php' ?>