<?php
    $sql_listedaccountinfo = "SELECT * FROM tbl_accountinfo, tbl_listaccount WHERE tbl_accountinfo.serial = tbl_listaccount.serial ORDER BY ingame DESC";
    $query_listedaccountinfo = mysqli_query($mysqli,$sql_listedaccountinfo);
?>
<p>listed</p>
<table style="width:50%" border="1" style="border-collapse:collapse";>
  <tr>
    <th>Account</th>
    <th>Ingame</th>
    <th>Level</th>
    <th>Số Tướng</th>
    <th>Số Skin</th>
    <th>Rank</th>
    <th>Tên các tướng</th>
    <th>Loại acc</th>
    <th>Giá</th>
    
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_listedaccountinfo)){
      $i++;
  ?>
  <tr>
    <!-- <td><?php echo $i ?></td> -->
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['ingame'] ?></td>
    <td><?php echo $row['level'] ?></td>
    <td><?php echo $row['sotuong'] ?></td>
    <td><?php echo $row['soskin'] ?></td>
    <td><?php echo $row['rank'] ?></td>
    <td><?php echo $row['tencactuong'] ?></td>
    <td><?php echo $row['loaiacc'] ?></td>
    <td><?php echo $row['gia'] ?></td>
    <td>
        <a href="modules/managecategorie/act.php?idacc=<?php echo $row['id_accountinfo']?>">Xóa</a> | <a href="?action=manageaccount&query=edit&idacc=<?php echo $row['id_accountinfo']?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
