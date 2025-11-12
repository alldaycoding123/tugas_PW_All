<?php
include 'config/koneksi.php';

if ($_POST) {
    $id_dosen = $_POST['id_dosen'];
    $Mata_Kuliah = $_POST['Mata_Kuliah'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];
    $ruangan = $_POST['ruangan'];

    $sql = "INSERT INTO mata_kuliah (id_dosen, Mata_Kuliah, sks, jam, ruangan) VALUES ('$id_dosen', '$Mata_Kuliah', '$sks', '$jam', '$ruangan')";

    if ($conn->query($sql) === true) {
        header("Location: matakuliah.php?success=1");
    } else {
        header("Location: matakuliah.php?success=0");
    }
} else {
    echo "Error: Invalid request method.";
}
exit;
?>