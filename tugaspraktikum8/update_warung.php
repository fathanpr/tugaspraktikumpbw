<?php

    include('koneksi.php');

    $id_barang = $_GET["id_barang"];
    $nama_barang = $_GET["nama_barang"];
    $harga = $_GET["harga"];
    $stok = $_GET["stok"];

    $sql = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok' WHERE id_barang = '$id_barang'";

    $query = mysqli_query($conn, $sql);

    if($query){
        $msg = "Update Complite";
    }
    else{
        $msg = "Failed to Update Data";
    }

    $response = array(
        'status' => "OK",
        'msg' => $msg
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>