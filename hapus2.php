<?php
include 'config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM mata_kuliah WHERE id=$id";

    if ($conn->query($sql) === true) {
        header("Location:matakuliah.php?success=1");
    } else {
        header("Location:matakuliah.php?success=0");
    }
} else {
    header("Location:matakuliah.php");
}

?>