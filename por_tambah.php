<?php 
    include 'layout/header.php';
    include 'action/action.php';
 ?>


<div class="container mt-2">
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required="" type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input required="" type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input required="" type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required="" type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input required="" type="number" class="form-control" name="telepon">
                </div>
                <button class="btn btn-primary" name="simpan">Simpan Data</button>
                <a href="por.php" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {
    $input = inputData ($_POST['nama'],$_POST['alamat'],$_POST['jabatan'],$_POST['email'],$_POST['telepon']);
    
    if ($input) {
        echo "<script>alert('Data Berhasil Disimpan'); window.location.href='por.php'</script> ";
    }
}

include 'layout/footer.php';
 ?>