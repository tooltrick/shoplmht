<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['login'] = $username;
            header('Location:index.php');
        }else{
            echo '<script>alert("Login Fail!")</script>';
            header('Location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admincp</title>
    <style type="text/css">
            body{background:#f2f2f2;}
            
    </style>
</head>
<body>
    <div class="wrapper_loginadmincp">
    <form action="" autocomplete="off" method="POST">
        <table border="1" style="text-align:center; border-collapse:collapse;">
            <tr>
                <td colspan="2"><h3>Login Admin</h3></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    </div>
    <script type="text/javascript src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
