<p>Add account</p>
<table border="1" style="border-collapse:collapse";>
    <form method="POST" style="width:50%" action="modules/managecategorie/act.php">
        <tr>
            <td>Account</td>
            <td><select name="account">
                <?php 
                    $sql_listedaccount = "SELECT * FROM tbl_listaccount ORDER BY serial DESC";
                    $query_listedaccount = mysqli_query($mysqli,$sql_listedaccount);
                    while($row_account = mysqli_fetch_array($query_listedaccount)){
                        if ($row_account['serial']==$row['serial']){
                    ?>
                    <option selected value="<?php echo $row_account['serial']?>"><?php echo $row_account['username']?></option>
                    <?php
                    }else{
                    ?>
                    <option value="<?php echo $row_account['serial']?>"><?php echo $row_account['username']?></option>
                    <?php }
                    }
                    ?>
            </select></td>
        </tr>
        <tr>
            <td>Tên trong game</td>
            <td><input type="text" name="ingame"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td><input type="text" name="level"></td>
        </tr>
        <tr>
            <td>Số tướng</td>
            <td><input type="int" name="sotuong"></td>
        </tr>
        <tr>
            <td>Số skin</td>
            <td><input type="int" name="soskin"></td>
        </tr>
        <tr>
            <td>Rank</td>
            <td><input type="text" name="rank"></td>
        </tr>
        <tr>
            <td>Tên các tướng</td>
            <td><textarea rows="10" width="100%" name="tencactuong" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Loại acc</td>
            <td><input type="text" name="loaiacc"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="gia"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="addaccountinfo" value="Add account info"></td>
        </tr>
    </form> 
</table>