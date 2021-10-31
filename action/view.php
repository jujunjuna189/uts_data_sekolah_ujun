<?php
require_once('../init.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="card float-end m-3">
        <div class="card-body">
            <table class="border-0">
                <tr>
                    <th>Nama Sekolah</th>
                    <td>:</td>
                    <td> <?= $data['nama_sekolah'] ?></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td>:</td>
                    <td> <?= $data['longitude'] ?></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td>:</td>
                    <td> <?= $data['latitude'] ?></td>
                </tr>
                <tr>
                    <th>Alamat Sekolah</th>
                    <td colspan="2">:</td>
                </tr>
                <tr>
                    <td colspan="3"> <?= $data['alamat_sekolah'] ?></td>
                </tr>
            </table>
        </div>
    </div>


    <iframe class="" src="https://maps.google.com/maps?q=<?= $data['latitude'] ?>,<?= $data['longitude'] ?>&hl=id&z=14&amp;output=embed" frameborder="0" style="position:fixed; top:0; bottom:0; left:0; right:0; width:100%; height:100%; z-index:-1" allowfullscreen=""></iframe>
    <script src="../assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>