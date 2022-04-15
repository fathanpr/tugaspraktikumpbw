<?php
require_once("connection.php");

if(isset($_POST['register'])){

    $name = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // enkripsi password
    $password = md5($_POST["password"]);
    $confirm_password = md5($_POST["confirm_password"]);

    $query = mysqli_query($conn, "INSERT into adminuser (email,nama,pass) VALUES ('$email','$name','$password')");
    $result = mysqli_query($conn, "SELECT * FROM adminuser WHERE email='$email'");
    $num = mysqli_num_rows($result);
    if($password == $confirm_password){
        if($num>0){
        echo "<script>
        alert('Registrasi Berhasil');
        window.location.href = 'login.php';</script>";
        }
    }else{
        echo "<script>
        alert('Password Tidak Cocok');
        window.location.href = 'register.php';
        </script>";
    }
}

?>