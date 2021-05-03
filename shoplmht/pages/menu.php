
        <div class="menu">
            <li style="list-style:none;"><a href="index.php"><img src="./images/logott.png" alt=""></a></li>
            <ul class="list_menu" style="margin-left: 750px;"> 
                <li class="list_menu_li"><a href="index.php">TRANG CHỦ</a></li>               
                <li class="list_menu_li_2"><a href="">DANH MỤC</a>
                    <ul class="submenu_dropdown">   
                        <li class="submenu_li"><a href="index.php?manage=listtool&id=1">Account Liên Minh Huyền Thoại</a></li>
                        <li class="submenu_li"><a href="index.php?manage=toolpubgmb&id=2">Tool PUBG MOBILE</a></li>
                        <li class="submenu_li"><a href="index.php?manage=toollq&id=3">Tool Liên Quân </a></li>
                        <li class="submenu_li"><a href="index.php?manage=toollmtc&id=4">Tool Liên Minh Tốc Chiến</a></li>
                    </ul>
                </li>                
                <li class="list_menu_li"><a href="index.php?manage=cart">GIỎ HÀNG</a></li>
                <li><a href="index.php?manage=gg_map">ĐỊA CHỈ SHOP</a> 
                <div class="dndk">
                <?php
                session_start();
                if(isset($_GET['logout'])&&$_GET['logout']==1){
                    unset($_SESSION['login']);
                    header('Location:index.php?manage=login');     
                }
                
                if(isset($_SESSION['login'])){
                    echo '<li class="list_menu_li_2"><a href="index.php?manage=user">NGƯỜI DÙNG #'.$_SESSION["id_register"].'</a> 
                    <ul class="submenu_dropdown">
                        <li class="submenu_li" style="text-transform: uppercase">XIN CHÀO: '.$_SESSION["login"].' </li>
                        <li class="submenu_li"><a href="index.php?manage=pay" style="text-decoration:none;">NẠP TIỀN</a></li>
                        <li class="submenu_li">SỐ DƯ: 999 VNĐ</li>
                        <li class="submenu_li" ><a href="index.php?manage=historybill">LỊCH SỬ GIAO DỊCH</a></li>
                        <li class="list_menu_li"><a href="index.php?logout=1">ĐĂNG XUẤT</a></li>
                    </ul>
                </li>';
                }
                else{
                    echo'
                    <li class="list_menu_li"><a href="index.php?manage=register">ĐĂNG KÝ</a></li> 
                    <li class="list_menu_li"><a href="index.php?manage=login">ĐĂNG NHẬP</a></li>             
                    ';
                }
                ?> 
                </div>   
                
            </ul>
        </div>
