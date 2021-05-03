<?php
    $sql_editaccountinfo = "SELECT * FROM tbl_accountinfo WHERE id_accountinfo = '$_GET[idacc]' LIMIT 1";
    $query_editaccountinfo = mysqli_query($mysqli,$sql_editaccountinfo);
?>
<p>Edit account</p>
<table border="1" style="border-collapse:collapse";>
<?php
while($row = mysqli_fetch_array($query_editaccountinfo)){
?>
    <form method="POST" style="width:100%" action="modules/managecategorie/act.php?idacc=<?php echo $_GET['idacc']; ?>">
    <tr>
            <td>Account</td>
            <td><select name="account">
                <?php 
                    $sql_listedaccount = "SELECT * FROM tbl_listaccount ORDER BY serial DESC";
                    $query_listedaccount = mysqli_query($mysqli,$sql_listedaccount);
                    while($row_account = mysqli_fetch_array($query_listedaccount)){
                    ?>
                    <option value="<?php echo $row_account['serial']?>"><?php echo $row_account['username']?></option>
                    <?php
                    }
                    ?>
            </select></td>
        </tr>
        <tr>
            <td>Tên trong game</td>
            <td><input type="text" value="<?php echo $row['ingame']?>" name="ingame"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td><input type="text" value="<?php echo $row['level']?>" name="level"></td>
        </tr>
        <tr>
            <td>Số tướng</td>
            <td><input type="int" value="<?php echo $row['sotuong']?>" name="sotuong"></td>
        </tr>
        <tr>
            <td>Số skin</td>
            <td><input type="int" value="<?php echo $row['soskin']?>" name="soskin"></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><input type="text" value="<?php echo $row['rank']?>" name="rank"></td>
        </tr>
        <tr>
            <td>Tên các tướng</td>
            <td><textarea rows="10" width="100%"  name="tencactuong" style="resize: none"><?php echo $row['tencactuong']?></textarea></td>
        </tr>
        <tr>
            <td>Loại acc</td>
            <td><input type="text" value="<?php echo $row['loaiacc']?>" name="loaiacc"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" value="<?php echo $row['gia']?>" name="gia"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="editaccountinfo" value="Edit account info"></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>