<?php 
    session_start();
    include('../../admincp/config/config.php');
    //xoa acc
    if(isset($_SESSION['cart']) && $_GET['deletechoice']){
        $id = $_GET['deletechoice'];
        foreach($_SESSION['cart'] as $cart_acc){
            if($cart_acc['id'] != $id){
                $acc[] = array(array('ingame'=> $cart_acc['ingame'],'id'=>$cart_acc['id'],'gia'=>$cart_acc['gia']));  
            }
            $_SESSION['cart'] = $acc; 
            header('Location:../../index.php?manage=cart');
        }
    }
    //add acc vao gio hang
    // xoa session cu
    // session_destroy();
    if(isset($_POST['muaacc'])){
        $id=$_GET['serial'];
        $sql = "SELECT * FROM tbl_accountinfo WHERE serial = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_acc = array(array('id'=>$id,'ingame'=> $row['ingame'],'gia'=>$row['gia']));
            //ktra sessiaon da ton tai or not
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_acc){
                    //neu trung acc
                    if($cart_acc['id']==$id){
                        echo '<p style="color:red; font-weight:bold">Acc đã tồn tại trong giỏ hàng</p>';
                        $found=true;                  
                    }                               
                    else{
                        //neu acc khong trung   
                        $acc[] = array(array('id'=>$cart_acc['id'],'ingame'=> $cart_acc['ingame'],'gia'=>$cart_acc['gia']));   
                    }
                } 
                if($found == false){
                    $_SESSION['cart'] = array_merge($acc,$new_acc);
                }else{
                    $_SESSION['cart'] = $acc;
                }
            }else{
                $_SESSION['cart'] = $new_acc;
            }
        }
        header('Location:../../index.php?manage=cart');
    }
?>