<?php
    include('../../config/config.php');
    $ingame = $_POST['ingame'];
    $level = $_POST['level'];
    $sotuong = $_POST['sotuong'];
    $soskin = $_POST['soskin'];
    $rank = $_POST['rank'];
    $tencactuong = $_POST['tencactuong'];
    $loaiacc = $_POST['loaiacc'];
    $gia = $_POST['gia'];
    $account = $_POST['account'];
    if(isset($_POST['addaccountinfo'])){
        //Add account
        $sql_add = "INSERT INTO tbl_accountinfo(ingame,level,sotuong,soskin,rank,tencactuong,loaiacc,gia,serial) 
        VALUES ('$ingame','$level','$sotuong','$soskin','$rank','$tencactuong','$loaiacc','$gia','$account')";
        mysqli_query($mysqli,$sql_add);
        header('Location:../../index.php?action=manageaccount&query=add');

    }else if(isset($_POST['editaccountinfo'])){
        //Edit account
        $sql_update = "UPDATE tbl_accountinfo SET ingame='$ingame', level='$level', sotuong='$sotuong', soskin='$soskin', rank='$rank', 
        tencactuong='$tencactuong', loaiacc='$loaiacc', gia='$gia', account='$account' WHERE id_accountinfo = '$_GET[idacc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=manageaccount&query=add');

    }else{
        $id = $_GET['idacc'];
        $sql = "SELECT * FROM tbl_account WHERE id_accountinfo = 'idacc' LIMIT 1";   
        $sql_delete = "DELETE FROM tbl_accountinfo WHERE id_accountinfo ='$id'";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?action=manageaccount&query=add');
    }
?>

