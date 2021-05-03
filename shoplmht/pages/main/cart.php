<p style="color: white">CART</p>
<table style="width: 100%; text-align: center; border-collapse: collapse; color: white;" border="2">
    <tr>
        <th>ID</th>
        <th>Serial</th>
        <th>Ingame</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php 
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien = 0;
        foreach($_SESSION['cart'] as $cart_acc){
            $giatien = $cart_acc ['gia'];
            $tongtien += $giatien;
            $i++;   
    ?>
    <tr>    
        <td><?php echo $i; ?>        </td>
        <td><?php echo $cart_acc['id'] ?> </td>
        <td><?php echo $cart_acc['ingame'] ?> </td>
        <td><?php echo number_format ($cart_acc['gia'],0,',','.').' VNĐ'?> </td>
        <td><?php echo number_format ($giatien,0,',','.').' VNĐ'?></td>
        <td><a href="pages/main/addtocart.php?deletechoice=<?php echo $cart_acc['id'] ?>">Xóa</a></td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan"6"><p>Tổng Tiền: <?php echo number_format ($tongtien,0,',','.').' VNĐ'?></p><br/>
        <div style="clear: both"></div>
        <?php
            if(isset($_SESSION['login'])){
                echo '<p><a href="index.php?manage=pay">Mua Acc</a></p>';
            }else{ 
                echo '<p>Chưa mua hàng được đâu bạn ơi do bạn<p style="color:red; font-weight:bold"> Chưa đăng nhập đấy!!!</p></br></p>';
                echo '<p><a style="color:red; font-weight:bold" href="index.php?manage=login">Đăng nhập tại đây</a> hoặc <a style="color:red; font-weight:bold" href="index.php?manage=register">Đăng ký tại đây</a></p>';
            }
        ?>



        </td>
    </tr>
    <?php
    }else{
    ?>
    <tr>
        <td colspan"6"><p>Giỏ hàng trống</p></td>
    </tr>
    <?php
    }
    ?>
</table>
