<?php

include("koneksi.php");

$nama_barang = isset( $_POST["nama_barang"]) ? $_POST["nama_barang"] : "";
$harga = isset( $_POST["harga"])  ? $_POST["harga"] : "";
$stok = isset($_POST["stok"]) ? $_POST["stok"] : "";

$sql = "INSERT INTO barang (nama_barang,harga,stok) VALUES ('".$nama_barang."','".$harga."','".$stok."');";

$query = mysqli_query($conn,$sql);

if($query){
    $msg = "Tambah Barang Berhasil";
}else{
    $msg = "Tambah barang gagal";
}

$respone = array(
    'status' => "OK",
    'msg' => $msg
);

echo json_encode($respone,JSON_PRETTY_PRINT);
?>