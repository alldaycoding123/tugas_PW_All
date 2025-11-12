<?php include 'includes/header.php' ?>

<?php
$nama_dosen = $conn->query("SELECT * FROM dosen");
?>

<div class="container">
    <form action="simpan2.php" method="POST">
        <div class="coll-md-6">
            <label class="saya">Mata Kuliah</label>
            <input type="text" name="Mata_Kuliah" id="Mata_Kuliah" class="form-control">
        </div>
        <div class="coll-md-6">
            <label for="sks">SKS</label>
            <input type="number" name="sks" id="sks" class="form-control">
        </div>

        <div class="coll-md-6">
            <label>Dosen Pengampuh</label>
            <select class="form-control" name="id_dosen" id="id_dosen">
                <?php while ($row = $nama_dosen->fetch_assoc()): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nama_dosen'] ?></option>
                <?php endwhile ?>
            </select>

        </div>
        <div class="coll-md-6">
            <label for="jam">Jam</label>
            <input type="time" name="jam" id="jam" class="form-control">
        </div>
        <div class="coll-md-6">
            <label for="ruangan">Ruangan</label>
            <input type="text" name="ruangan" id="ruangan" class="form-control">
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