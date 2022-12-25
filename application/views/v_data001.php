<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <title>TAMPIL DATA</title>
</head>

<body>
    <div class="container mt-4 p-4">
        <div class="card shadow">
            <div class="card-header ">
                <div class="row">
                    <div class="col-10">
                        <h1 class="mt-2 text-success"> DATA KOMPONEN </h1>
                    </div>
                    <div class="col-2">
                        <a href="<?= site_url('komponen001/tambah') ?>" class="btn btn-success m-3 ">Tambah Data</a>
                    </div>
                </div>

            </div>
            <div class="card-body p-5">

                <table class="table table-hover text-center">
                    <thead class="table-success " style="font-weight:bolder;">
                        <tr>
                            <td>NO</td>
                            <td>MEREK</td>
                            <td>KAPASITAS</td>
                            <td>HARGA</td>
                            <td>JENIS</td>
                            <td>AKSI</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1;
                            foreach ($vdata as $awa) : ?>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $awa['merek_001'] ?> </td>
                                <td><?php echo $awa['kapasitas_001'] ?> </td>
                                <td><?php echo $awa['harga_001'] ?> </td>
                                <td><?php echo $awa['jenis_001'] ?> </td>
                                <td>
                                    <a href="<?php echo base_url('index.php/komponen001/c_edit/' . $awa['id_komponen']); ?>" class="btn btn-warning">EDIT</a>
                                    <a href="<?php echo base_url('index.php/komponen001/delete/' . $awa['id_komponen']); ?>" class="btn btn-danger">Hapus</a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>