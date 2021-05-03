<?php
    $sql_listedaccount = "SELECT * FROM tbl_accountinfo ORDER BY serial DESC";
    $query_listedaccount = mysqli_query($mysqli,$sql_listedaccount);  
?>          

            <?php while($row_account = mysqli_fetch_array($query_listedaccount)) {?>
                <ul class="list_tool">
                    <li>
                        <img src="images/yasou2.png">
                        <h4><?php echo $row_account['ingame']?></h4>
                        <a style="background-color:#bd1414; width:275px; float:left; text-decoration:none; " class="btn btn-danger col-sm-12 text-center" target="a_blank" href="index.php?manage=listacc&id=<?php echo $row_account['serial']?>">Chi tiết</a>
                        <div class="hidden-md" style="margin: 0;"></div>
                    </li>
                </ul>
                <?php } ?>
</div>
            