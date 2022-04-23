<?php

require_once "koneksi.php";

$sql = "SELECT * FROM barang";
$query = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($query)){

    $item[] = array(
        'id_barang'=>$data["id_barang"],
        'nama'=>$data["nama_barang"],
        'harga'=>$data["harga"],
        'stok'=>$data["stok"]
    );
}

$response = array(
    'status'=>'OK',
    'data' => $item
);

echo json_encode($response,JSON_PRETTY_PRINT);

?>