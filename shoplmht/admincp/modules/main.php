<div class="clear"></div>
<div class="main">
                <?php
                    if(isset($_GET['action']) && $_GET['query']){
                        $moment = $_GET['action'];
                        $query = $_GET['query'];
                    }else{
                        $moment = '';
                        $query = '';
                    }
                    if($moment == 'managelistaccount' && $query == 'add'){
                        include("modules/managecategories/add.php");
                        include("modules/managecategories/listed.php");
                    }elseif($moment == 'managelistaccount' && $query == 'edit'){
                        include("modules/managecategories/edit.php");
                    }elseif($moment == 'manageaccount' && $query == 'add'){
                        include("modules/managecategorie/add.php");
                        include("modules/managecategorie/listed.php");
                    }elseif($moment == 'manageaccount' && $query == 'edit'){
                        include("modules/managecategorie/edit.php");
                    }else{
                        include("modules/dashboard.php");
                    }
                ?>
</div>