<?php
    $sql_listedaccount = "SELECT * FROM tbl_listaccount ORDER BY username DESC";
    $query_listedaccount = mysqli_query($mysqli,$sql_listedaccount);
?>
<p>listed</p>
<table style="width:50%" border="1" style="border-collapse:collapse";>
  <tr>
    <th>Serial</th>
    <th>Account name</th>
    <th>Password</th>
    <th>Tướng</th>
    <th>Skin</th>
    <th>Rank</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_listedaccount)){
      $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['tuong'] ?></td>
    <td><?php echo $row['skin'] ?></td>
    <td><?php echo $row['rank'] ?></td>
    <td>
        <a href="modules/managecategories/act.php?serial=<?php echo $row['serial']?>">Xóa</a> | <a href="?action=managelistaccount&query=edit&serial=<?php echo $row['serial']?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
</table>
