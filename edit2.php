<?php include 'includes/header.php' ?>

<?php

$nama_dosen = $conn->query("SELECT * FROM dosen");

$id = $_GET['id'];
if (isset($id)) {
    $sql = "SELECT * FROM mata_kuliah WHERE id= '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "data tidak ditemukan";
        include 'includes/footer.php';
        exit;
    }
    $nilai = $result->fetch_assoc();
}

if ($_POST) {
    $Mata_Kuliah = $_POST["Mata_Kuliah"];
    $sks = $_POST["sks"];
    $id_dosen = $_POST["id_dosen"];
    $jam = $_POST["jam"];
    $ruangan = $_POST["ruangan"];

    $sql = "UPDATE mata_kuliah SET Mata_Kuliah='$Mata_Kuliah', sks='$sks', id_dosen='$id_dosen', jam='$jam', ruangan='$ruangan' WHERE id= '$id'";

    if ($conn->query($sql) === true) {
        header("location: matakuliah.php? success=1");
    } else {
        header("location: matakuliah.php? success=0");
    }
}
?>

<div class="container">
    <form action="" method="POST">
        <div class="coll-md-6">
            <label class="saya">Mata Kuliah</label>
            <input type="text" name="Mata_Kuliah" id="Mata_Kuliah" class="form-control"
                value="<?= $nilai["Mata_Kuliah"] ?>">
        </div>
        <div class="coll-md-6">
            <label for="sks">SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" value="<?= $nilai["sks"] ?>">
        </div>

        <div class="row">
            <div class="coll-md-6">
                <label class="form-label">Dosen Pengampuh</label>
                <select class="form-control" name="id_dosen">
                    <?php while ($row = $nama_dosen->fetch_assoc()): ?>
                        <option value="<?= $row['id'] ?>" <?= $row['id'] == $nilai['id_dosen'] ? 'selected' : '' ?>>
                            <?= $row['nama_dosen'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>

        <div class="coll-md-6">
            <label for="jam">Jam</label>
            <input type="time" name="jam" id="jam" class="form-control" value="<?= $nilai["jam"] ?>">
        </div>
        <div class="coll-md-6">
            <label for="ruangan">Ruangan</label>
            <input type="text" name="ruangan" id="ruangan" class="form-control" value="<?= $nilai["ruangan"] ?>">
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

<?php include 'includes/footer.php' ?>