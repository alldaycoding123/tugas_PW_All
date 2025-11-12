<?php
include 'config/koneksi.php';

if ($_POST) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tugas = $_POST['tugas'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
	$id_mata_kuliah = $_POST['id_mata_kuliah'];

	$sql = "INSERT INTO nilai_mahasiswa (id_mata_kuliah, nim, nama, tugas, uts, uas) VALUES ('$id_mata_kuliah', '$nim', '$nama','$tugas','$uts','$uas')";

	if ($conn->query($sql) === true) {
		header("Location: index.php?success=1");
	} else {
		header("Location: index.php?success=0");
	}
} else {
	header("Location: index.php?success=1");
}
exit;
?>