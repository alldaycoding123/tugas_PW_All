<?php
include 'config/koneksi.php';
session_start();

if (!isset($_SESSION['email'])) {
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30"
					height="24" class="d-inline-block align-text-top">
				Nilai Mahasiswa
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Nilai Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="matakuliah.php">Mata Kuliah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="dosen.php">Dosen</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-red" href="logout.php"
							onclick="return confirm('Apakah anda yakin untuk logout?')">Logout</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>