<?php include 'includes/header.php' ?>
<?php
$result = $conn->query("SELECT * FROM dosen");
?>

<h2 align="center">Mata Kuliah</h2>

<div>
    <a class="btn btn-primary" href="form3.php">Tambah Data</a>
</div>
<table class="table">
    <tr>
        <td>Action</td>
        <td>Nomor Induk Pegawai</td>
        <td>Nama Dosen</td>
        <td>Jenis Kelamin</td>

    </tr>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <a href="edit3.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus3.php?id=<?= $row['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin untuk menghapus data ini	?')">Hapus</a>
                </td>
                <td><?= $row['nip'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
            </tr>
        <?php endwhile ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Data belum tersedia</td>
        </tr>
    <?php endif ?>
</table>

</table