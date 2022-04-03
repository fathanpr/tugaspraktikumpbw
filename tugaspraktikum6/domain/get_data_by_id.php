<?php
include('data/connection_remote_database.php');
//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM krs WHERE id=$id";
$query = mysqli_query($connection, $sql);
$data = mysqli_fetch_assoc($query);
