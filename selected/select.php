<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM sekolah WHERE id = '$id'";
    $query = $con->query($sql);
    $data = $query->fetch_assoc();
} else {
    $sql = "SELECT * FROM sekolah";
    $query = $con->query($sql);

    $no = 1;
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $bg = $_GET['status'] == 'success' ? 'info' : 'danger';
}
