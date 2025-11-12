<?php
include 'config/koneksi.php';

if ($_POST) {
    $nip = $_POST['nip'];
    $nama_dosen = $_POST['nama_dosen'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO dosen (nip, nama_dosen, jenis_kelamin) VALUES ('$nip', '$nama_dosen','$jenis_kelamin')";

    if ($conn->query($sql) === true) {
        header("Location: dosen.php?success=1");
    } else {
        header("Location: dosen.php?success=0");
    }
} else {
    echo "Error: Invalid request method.";
}
exit;
?>