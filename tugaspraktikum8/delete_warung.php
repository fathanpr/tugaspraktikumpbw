<?php

    include('koneksi.php');

    $sql = "DELETE FROM barang WHERE id_barang ='".$_GET["id_barang"]."'";

    $query = mysqli_query($conn, $sql);

    if($query){
        $msg = "Delete Complite";
    }
    else{
        $msg = "Failed to Delete Data";
    }

    $response = array(
        'status' => "OK",
        'msg' => $msg
    );

    echo json_encode($response,JSON_PRETTY_PRINT);
?>