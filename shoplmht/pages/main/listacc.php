<?php
    $sql_info = "SELECT * FROM tbl_listaccount,tbl_accountinfo WHERE tbl_listaccount.serial = tbl_accountinfo.serial AND tbl_accountinfo.serial = '$_GET[id]' LIMIT 1";
    $query_info = mysqli_query($mysqli,$sql_info);  
    while ($row_info = mysqli_fetch_array($query_info)){
?>     
<div class="wrapper_info">
<div class="account_image">
        </div>
<div class="account_info" style="color: #e2d306; margin-bottom: 11px;">
        <form method="post" action="pages/main/addtocart.php?serial=<?php echo $row_info['serial']?>">
        <table class="table table-bordered" style="color: #e2d306; margin-bottom: 11px;">     
        <h1>Rank <?php echo $row_info['rank']?>, <?php echo $row_info['sotuong']?> Tướng, <?php echo $row_info['soskin']?> Skin</h1>
        <tr>
                <td>Ingame</td>
                <td><?php echo $row_info['ingame']?></td>
        </tr>
        <tr>
                <td>Level</td>
                <td><?php echo $row_info['level']?></td>
        </tr>
        <tr>
                <td>Tướng sở hữu</td>
                <td><?php echo $row_info['sotuong']?></td>
        </tr>
        <tr>
                <td>Skin sở hữu</td>
                <td><?php echo $row_info['soskin']?></td>
        </tr>
        <tr>
                <td>Rank</td>
                <td><?php echo $row_info['rank']?></td>
        </tr>
        <tr>
                <td>Loại acc</td>
                <td><?php echo $row_info['loaiacc']?></td>
        </tr>
    </div>
    </table>
    <input class="btn btn-primary col-xs-12 buy-now" type="submit" name="muaacc" value="MUA NGAY VỚI GIÁ <?php echo number_format ($row_info['gia'],0,',','.')." VNĐ"?>"></input>
    
    </form>
    
    </div>
<?php
}
?>