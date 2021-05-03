<div class="main">          
            <div class="maincontent">
                <?php
                    if(isset($_GET['manage'])){
                        $moment = $_GET['manage'];
                    }else{
                        $moment = '';
                    }
                    if($moment=='listtool'){
                        include("main/listtool.php");
                    }elseif($moment=='cart'){
                        include("main/cart.php");
                    }elseif($moment=='listacc'){
                        include("main/listacc.php"); 
                    }elseif($moment=='register'){
                        include("main/register.php");
                    }elseif($moment=='login'){
                        include("main/login.php");
                    }elseif($moment=='toollmtc'){
                        include("main/tools/toollmtc.php");
                    }elseif($moment=='toollq'){
                        include("main/tools/toollq.php");
                    }elseif($moment=='toolpubgmb'){
                        include("main/tools/toolpubgmb.php"); 
                    }elseif($moment=='pay'){
                        include("main/pay.php");
                    }elseif($moment=='historybill'){
                        include("main/historybill.php");
                    }elseif($moment=='gg_map'){
                        include("main/gg_map.php");  
                    }else{
                        include("main/index.php");
                    }
                ?>
                
            </div>
        </div>