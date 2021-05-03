<?php
    $sql_editaccount = "SELECT * FROM tbl_listaccount WHERE serial = '$_GET[serial]' LIMIT 1";
    $query_editaccount = mysqli_query($mysqli,$sql_editaccount);
?>
<p>Edit account</p>
<table border="1" style="width:50%" style="border-collapse:collapse";>
    <form method="POST" action="modules/managecategories/act.php?serial=<?php echo $_GET['serial']; ?>">
    <?php 
        while ($row = mysqli_fetch_array($query_editaccount)){
    ?>
        <tr>
            <td>Username</td>
            <td><input type="text" value="<?php echo $row['username']?>" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" value="<?php echo $row['password']?>" name="password"></td>
        </tr>
        <tr>
            <td>Số tướng</td>
            <td><input type="int" value="<?php echo $row['tuong']?>" name="tuong"></td>
        </tr>
        <tr>
            <td>Số skin</td>
            <td><input type="int" value="<?php echo $row['skin']?>" name="skin"></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><input type="text" value="<?php echo $row['rank']?>" name="rank"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="editaccount" value="Edit info"></td>
        </tr>
        <?php
        }
        ?>
    </form>
</table>