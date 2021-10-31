<?php
require_once('../config/connection.php');

// Add data
if (isset($_POST['add_data'])) {
    $nis = $_POST['nis'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat_sekolah = $_POST['alamat_sekolah'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $sql = "INSERT INTO sekolah (nis, nama_sekolah, alamat_sekolah, longitude, latitude) VALUES ('$nis', '$nama_sekolah', '$alamat_sekolah', '$longitude', '$latitude')";
    $query = $con->query($sql);

    if ($query) {
        header('location:../index.php?action=Add&&status=success');
    } else {
        header('location:../index.php?action=Add&&status=failed');
    }
}

// Edit Data
if (isset($_GET['id']) && isset($_POST['edit_data'])) {
    $id = $_GET['id'];

    $nis = $_POST['nis'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $alamat_sekolah = $_POST['alamat_sekolah'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $sql = "UPDATE sekolah SET nis = '$nis', nama_sekolah = '$nama_sekolah', alamat_sekolah = '$alamat_sekolah', longitude = '$longitude', latitude = '$latitude' WHERE id = '$id'";
    $query = $con->query($sql);

    if ($query) {
        header('location:../index.php?action=Update&&status=success');
    } else {
        header('location:../index.php?action=Update&&status=failed');
    }
}

// Delete Data
if (isset($_GET['id']) && !isset($_POST['edit_data'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM sekolah WHERE id = '$id'";
    $query = $con->query($sql);

    if ($query) {
        header('location:../index.php?action=Delete&&status=success');
    } else {
        header('location:../index.php?action=Delete&&status=failed');
    }
}
