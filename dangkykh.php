<?php 
include("header.php");
?>
<div class="full-dkkh">
    <form enctype="multipart/form-data" action="xulydangky.php" name="frmdk" method="post">
        <div class="fdk">
            <div class="fdk-i">
                <label>ĐĂNG KÝ TÀI KHOẢN</label>
            </div>
            <div class="dk">
                <label>Username: </label>
                <input type="text" name="username" />
            </div>
            <div class="dk">
                <label>Mật khẩu: </label>
                <input type="password" name="pass" />
            </div>
            <div class="dk">
                <label>Họ tên: </label>
                <input type="text" name="hoten" />
            </div>
            <div class="dk">
                <label>Giới tính: </label>
                <select name="gioitinh">
                    <option value="#" selected="selected">-- Chọn giới tính --</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
            <div class="dk">
                <label>Địa chỉ: </label>
                <input type="text" name="diachi" />
            </div>
            <div class="dk">
                <label>Số điện thoại: </label>
                <input type="text" name="sdt" />
            </div>
            <div class="dk">
                <input style="background-color: black; color:white; font-weight: 600; margin: 7px 0px; " type="submit" name="dangky" value="Đăng ký" />
                <input style="background-color: lightgrey; color:black; font-weight: 500; " type="reset" name="lamlai" value="Làm lại" />
            </div>
        </div>
    </form>
</div>
<?php 
include("footer.php");
?>