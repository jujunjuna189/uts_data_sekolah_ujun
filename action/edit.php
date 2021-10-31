<?php
require_once('../init.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uts Data Sekolah Ujun Junaedi</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Sekolah
                    </div>
                    <form action="action_proses.php?id=<?= $data['id'] ?>" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <small>Nomor Induk Sekolah</small>
                                        <input type="number" name="nis" id="nis" class="form-control" placeholder="..." required value="<?= $data['nis'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <small>Nama Sekolah</small>
                                        <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" placeholder="..." required value="<?= $data['nama_sekolah'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-group">
                                        <small>Alamat Sekolah</small>
                                        <textarea name="alamat_sekolah" id="alamat_sekolah" cols="30" rows="3" class="form-control" placeholder="..." required><?= $data['alamat_sekolah'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <small>Longitude</small>
                                        <input type="text" name="longitude" id="longitude" class="form-control" placeholder="..." required value="<?= $data['longitude'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <small>Latitude</small>
                                        <input type="text" name="latitude" id="latitude" class="form-control" placeholder="..." required value="<?= $data['latitude'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <a href="../index.php" class="btn bg-secondary text-white"><i class="bi bi-arrow-left"></i> Cancel</a>
                                    <div class="form-group float-end">
                                        <button type="submit" name="edit_data" class="btn bg-info"><i class="bi bi-folder-check"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>