<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/makecoloradmincp.css" rel="stylesheet" type="text/css">
    <title >Admincp</title>
</head>
<body>
    <h2 class="title_admin">Welcome to Admincp</h2>
    <div class="wrapper">
    <?php 
            include('config/config.php');
            include('modules/header.php');
            include('modules/menu.php');
            include('modules/main.php');
            include('modules/footer.php');

        ?>
    </div>
</body>
</html>