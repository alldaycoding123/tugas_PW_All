<?php include 'includes/header.php' ?>

<?php
$id = $_GET['id'];

$Mata_Kuliah = $conn->query("SELECT * FROM mata_kuliah");

if (isset($id)) {
    $sql = "SELECT * FROM nilai_mahasiswa WHERE id= '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "data tidak ditemukan";
        include 'includes/footer.php';
        exit;
    }
    $nilai = $result->fetch_assoc();
}

if ($_POST) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $tugas = $_POST["tugas"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];
    $id_mata_kuliah = $_POST["id_mata_kuliah"];

    $sql = "UPDATE nilai_mahasiswa SET id_mata_kuliah='$id_mata_kuliah', nim='$nim', nama='$nama', tugas=$tugas, uts=$uts, uas=$uas WHERE id= '$id'";

    if ($conn->query($sql) === true) {
        header("location: index.php?success=1");
    } else {
        header("location: index.php?success=0");
    }
}

?>
<div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="coll-md-6">
                <label class="saya">NIM</label>
                <input type="number" name="nim" id="nim" class="form-control" value="<?= $nilai['nim'] ?>">
            </div>

            <div class="coll-md-6">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $nilai['nama'] ?>">
            </div>
        </div>

        <div class="row">
            <div class="coll-md-6">
                <label class="form-label">Mata Kuliah</label>
                <select class="form-control" name="id_mata_kuliah">
                    <?php while ($row = $Mata_Kuliah->fetch_assoc()): ?>
                        <option value="<?= $row['id'] ?>" <?= $row['id'] == $nilai['id_mata_kuliah'] ? 'selected' : '' ?>>
                            <?= $row['Mata_Kuliah'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="coll-md-6">
                <label class="form-label">Tugas</label>
                <input type="number" name="tugas" id="tugas" class="form-control" value="<?= $nilai['tugas'] ?>">
            </div>

            <div class="coll-md-6">
                <label class="form-label">UTS</label>
                <input type="number" name="uts" id="uts" class="form-control" value="<?= $nilai['uts'] ?>">
            </div>

            <div class="coll-md-6">
                <label class="form-label">UAS</label>
                <input type="number" name="uas" id="uas" class="form-control" value="<?= $nilai['uas'] ?>">
            </div>
        </div>
        <div class="row mt-5">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?php include 'includes/footer.php' ?>