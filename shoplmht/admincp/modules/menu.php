<?php
    if(isset($_GET['logout'])&&$_GET['logout']==1){
        unset($_SESSION['login']);
        header('Location:login.php');
    }
?>
<ul class="admincpmenu_list">
    <li><a href="index.php?action=managelistaccount&query=add">List account</a></li>
    <li><a href="index.php?action=manageaccount&query=add">Account info</a></li>
    <li><a href="index.php?logout=1">Log out</a></li>
    
</ul>
