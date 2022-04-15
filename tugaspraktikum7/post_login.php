<?php include('connection.php');

if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $result = mysqli_query($conn,"SELECT * FROM adminuser WHERE email='$email' AND pass='$password'");
    $num = mysqli_num_rows($result);

    if($num == 1){

        $user = mysqli_fetch_array($result);
        session_start();
        $_SESSION["nama"] = $user;
        header("Location: dashboard.php");

    }
    else{
        echo "<script>
        alert('Username atau Password Salah!');
        window.location.href = 'login.php';
        </script>";
    }
    }
    ?>
</body>
</html>