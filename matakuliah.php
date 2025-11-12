<?php include 'includes/header.php' ?>
<?php
$result = $conn->query(" SELECT mata_kuliah.*, dosen.nama_dosen FROM mata_kuliah LEFT JOIN dosen ON mata_kuliah.id_dosen = dosen.id");
?>

<h2 align="center">Mata Kuliah</h2>

<div>
    <a class="btn btn-primary" href="form2.php">Tambah Data</a>
</div>
<table class="table">
    <tr>
        <td>Action</td>
        <td>Mata Kuliah</td>
        <td>SKS</td>
        <td>Dosen Pengampuh</td>
        <td>Jam</td>
        <td>Ruangan</td>

    </tr>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <a href="edit2.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="hapus2.php?id=<?= $row['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin untuk menghapus data ini	?')">Hapus</a>
                </td>
                <td><?= $row['Mata_Kuliah'] ?></td>
                <td><?= $row['sks'] ?></td>
                <td><?= $row['nama_dosen'] ?></td>
                <td><?= $row['jam'] ?></td>
                <td><?= $row['ruangan'] ?></td>
            </tr>
        <?php endwhile ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Data belum tersedia</td>
        </tr>
    <?php endif ?>
</table>

</table>