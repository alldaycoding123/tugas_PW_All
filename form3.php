<?php include 'includes/header.php' ?>

<div class="container">
    <form action="simpan3.php" method="POST">
        <div class="coll-md-6">
            <label for="nip">Nomor Induk Pegawai</label>
            <input type="number" name="nip" id="nip" class="form-control">
        </div>
        <div class="coll-md-6">
            <label for="nama_dosen">Nama Dosen</label>
            <input type="text" name="nama_dosen" id="nama_dosen" class="form-control">
        </div>

        <div class="coll-md-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
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