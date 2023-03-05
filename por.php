 <?php 
    include 'layout/header.php';
    include 'action/action.php';
 ?>

 <div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h4>Data Karyawan</h4>
            <a href="por_tambah.php" class="btn btn-primary btn-sm mb-2"> Tambah </a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example" style="width:100%">
                    <thead class="table-info">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Foto</th>
                            <th width="120"> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach (getsaya() as $get): ?>
                        <tr>
                            <td> <?=$i++; ?> </td>
                            <td> <?=$get ['nama']; ?> </td>
                            <td> <?=$get ['alamat']; ?> </td>
                            <td> <?=$get ['jabatan'];?></td>
                            <td> <?=$get ['email']; ?> </td>
                            <td> <?=$get ['telepon']; ?> </td>
                            <td> <? ?></td>
                            <td>
                                <a onclick="return confirm ('Yakin Data Akan di Hapus?')" href="por.php?id=<?=$get['id_saya'] ?>" class="badge badge-danger"><i class="bi bi-trash"></i> Hapus</a>
                                <a href="por_edit.php?id=<?=$get['id_saya'] ?>" class="badge badge-info"><i class ="bi bi-pancil-square"> Edit</i> </a>

                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function () {
                    $('#example').DataTable();
                        });

                </script>
            </div>
        </div>
    </div>
 </div>   


 <?php 

if (isset($_GET['id'])) {
    $hapus = hapusData($_GET['id']);

    if ($hapus) {
        echo "<script>alert('Data Berhasil Dihapus'); window.location.href='por.php'</script> ";
    }

}

  ?>