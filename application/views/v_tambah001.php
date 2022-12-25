<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
    <title>Document</title>
</head>

<body >
    <div class="container p-5" style="width:800px;">
        <div class=" card shadow">
            <div class="card-header ">

                <h2 class="p-2 text-center text-primary fw-bolder"> TAMBAH DATA </h2>
            </div>

            <div class="card card-body">

                                                <!-- form action = namacontroller/namafungsi -->
                <form action="<?= site_url('Komponen001/inputdata') ?>" method="post">

                    <div class="form-group row pt-3">
                        <label for="merek" class="col-sm-2 col-form-label">MEREK</label>
                        <div class="col-sm-10">
                            <input type="text" name="merek" class="form-control" id="merek">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="kapasitas" class="col-sm-2 col-form-label">KAPASITAS</label>
                        <div class="col-sm-10">
                            <input type="text" name="kapasitas" class="form-control" id="kapasitas">
                        </div>
                    </div>
                    <div class="form-group row pt-3">
                        <label for="harga" class="col-sm-2 col-form-label">HARGA</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="form-group row pt-3 ">
                        <label for="jenis" class="col-sm-2 col-form-label">JENIS</label>
                        <div class="col-sm-10 pt-2 ">
                            <input type="radio" name="jenis" id="jenis" value="HDD"> HDD
                            <input type="radio" name="jenis" id="jenis" value="RAM"> RAM
                            <!-- BUTTON -->
                            <div class="pt-3">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                                <a href="<?php echo base_url('/index.php/komponen001/index'); ?>" class="btn btn-warning m-2">Back </a>
                            </div>
                            <!-- END BUTTON -->
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>