<?php include 'includes/header.php' ?>

<?php
$id = $_GET['id'];
if (isset($id)) {
    $sql = "SELECT * FROM dosen WHERE id= '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "data tidak ditemukan";
        include 'includes/footer.php';
        exit;
    }
    $nilai = $result->fetch_assoc();
}

if ($_POST) {
    $nip = $_POST["nip"];
    $nama_dosen = $_POST["nama_dosen"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    $sql = "UPDATE dosen SET nip='$nip', nama_dosen='$nama_dosen', jenis_kelamin='$jenis_kelamin' WHERE id= '$id'";

    if ($conn->query($sql) === true) {
        header("location: dosen.php? success=1");
    } else {
        header("location: dosen.php? success=0");
    }
}
?>

<div class="container">
    <form action="" method="POST">
        <div class="coll-md-6">
            <label class="saya">Nomor Induk Pegawai</label>
            <input type="number" name="nip" id="nip" class="form-control" value="<?= $nilai["nip"] ?>">
        </div>
        <div class="coll-md-6">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control"
                value="<?= $nilai["nama_dosen"] ?>">
        </div>

        <div class="coll-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                value="<?= $nilai["jenis_kelamin"] ?>">
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