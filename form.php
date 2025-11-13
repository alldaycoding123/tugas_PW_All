<?php include 'includes/header.php' ?>

<?php
$Mata_Kuliah = $conn->query("SELECT * FROM mata_kuliah");
?>

<div class="container">
	<form action="simpan.php" method="POST">
		<div class="coll-md-6">
			<label class="saya">NIM</label>
			<input type="number" name="nim" id="nim" class="form-control">
		</div>
		<div class="coll-md-6">
			<label for="Nim">Nama</label>
			<input type="text" name="nama" id="nama" class="form-control">
		</div>

		<div class="coll-md-6">
			<label for="">Mata Kuliah</label>
			<select class="form-control" name="id_mata_kuliah" id="id_mata_kuliah">
				<?php while ($row = $Mata_Kuliah->fetch_assoc()): ?>
					<option value="<?= $row['id'] ?>"><?= $row['Mata_Kuliah'] ?></option>
				<?php endwhile ?>
			</select>

		</div>

		<div class="coll-md-6">
			<label for="Nim">Tugas</label>
			<input type="number" name="tugas" id="tugas" class="form-control">
		</div>

		<div class="coll-md-6">
			<label for="Nim">UTS</label>
			<input type="number" name="uts" id="uts" class="form-control">
		</div>
		<div class="coll-md-6">
			<label for="Nim">UAS</label>
			<input type="number" name="uas" id="uas" class="form-control">
		</div>

		<div class="row mt-5">
			<button type="submit" class="btn btn-primary"> Simpan </button>
		</div>
	</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
	crossorigin="anonymous"></script>

</body>

</html>