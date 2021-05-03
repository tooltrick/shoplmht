<?php
    if(isset($_POST['login'])){
        $taikhoan = $_POST['userclient'];
        $matkhau = md5($_POST['passclient']);
        $sql = "SELECT * FROM tbl_register WHERE userclient = '$taikhoan' AND passclient = '$matkhau' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row); 
        if($count > 0){
            $_SESSION['login'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo '<p style="color:red; font-weight:bold">Tài khoản không tồn tại</p>';
        }
    }
?>
<p style="color: white">Đăng Nhập Hệ Thống</p>
<style type="text/css">
    table.login tr td{
        padding: 5px;
        color: white;
    }
</style>
    <form action="" autocomplete="off" method="POST">
        <table class="login" border="3"style="text-align:center; border-collapse:collapse; ">
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" size="20px" name="userclient" placeholder="Nhập tài khoản"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" size="20px" name="passclient" placeholder="Nhập mật khẩu"></td>
            </tr>
            <tr>
                <td colspan="2"><input style="background:#e4a101;" type="submit" name="login" value="Đăng Nhập"></td>
            </tr>
        </table>
    </form>


