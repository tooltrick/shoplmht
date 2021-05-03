<?php
    include('../../config/config.php');
    $accountname = $_POST['username'];
    $accountpass = $_POST['password'];
    $accounttuong = $_POST['tuong'];
    $accountskin = $_POST['skin'];
    $accountrank = $_POST['rank'];
    if(isset($_POST['addaccount'])){
        //Add account
        $sql_add = "INSERT INTO tbl_listaccount(username,password,tuong,skin,rank)
        VALUES ('$accountname','$accountpass','$accounttuong','$accountskin','$accountrank')";
        mysqli_query($mysqli,$sql_add);
        header('Location:../../index.php?action=managelistaccount&query=add');

    }else if(isset($_POST['editaccount'])){
        //Edit account
        $sql_update = "UPDATE tbl_listaccount SET username='$accountname', password='$accountpass', tuong='$accounttuong', skin='$accountskin', rank='$accountrank' 
        WHERE serial = '$_GET[serial]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=managelistaccount&query=add');
        
    }else{
        $id = $_GET['serial'];
        $sql_delete = "DELETE FROM tbl_listaccount WHERE serial ='$id'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=managelistaccount&query=add');
    }
?>

