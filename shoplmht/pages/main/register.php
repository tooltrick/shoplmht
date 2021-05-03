<?php
    if(isset($_POST['register'])){
        $iduser = $_POST['id_register'];
        $taikhoan = $_POST['userclient'];
        $matkhau = md5($_POST['passclient']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        if($taikhoan == "" || $matkhau == "" || $phone == ""|| $email == ""){
            echo '<p style="color:red; font-weight:bold">Không được để trống thông tin !!!';
        }else{
            $sql_register = mysqli_query($mysqli,"INSERT INTO tbl_register(userclient,passclient,email,phone) VALUE ('".$taikhoan."','".$matkhau."','".$email."','".$phone."')"); 
        }     
        if($sql_register){
            echo '<p style="color:red; font-weight:bold">Đăng Ký Thành Công</p>';
        }
    }
?>
<p style="color: white">Đăng Ký Thành Viên</p>
<style type="text/css">
    table.register tr td{
        padding: 5px;
        color: white;
    }
</style>
<form action="" method="POST">
<table class="register" border="2" style="border-collapse: collapse;">
    <tr>
        <td>Tài khoản</td>
        <td><input type="text" size="30" name="userclient" placeholder="Nhập tài khoản"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" size="30" name="passclient" placeholder="Nhập mật khẩu"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="30" name="email" placeholder="Nhập email"></td>
    </tr>
    <tr>
        <td>Số điện thoại</td>
        <td><input type="text" size="30" name="phone" placeholder="Nhập số điện thoại"></td>
    </tr>
    <tr>
        <td colspan="2" align="center" ><input style="background:#e4a101" type="submit" name="register" value="Đăng Ký"></td>
    </tr>
</table>
</form>