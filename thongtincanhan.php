<?php 
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
.ttcn-left img {
    display: block;
    border-radius: 200px;
    border: 3px solid black;
}

.ttcn-right {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ttcn {
    display: flex;
    background-color: F5F7F8;
    margin: 50px 170px;
    padding: 30px 0px;
    border-radius: 10px;
    align-items: center;
    gap: 30px;
    justify-content: center;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25)
}

.ttcb {
    display: flex;
    padding: 10px 0px;
    gap: 15px;
    font-size: 17px;
}

.td-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 400;
    gap: 5px ;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.td-tt{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 40px;
    margin-bottom: 150px;
    padding-right: 170px;
}

.btn-ttcn a{
    background-color: black;
    color: white;
    padding: 15px 20px;
    border-radius: 10px;
    text-decoration: none;
}

</style>

<div class="full-ttcn">
    <div class="ttcn">
        <div class="ttcn-left">
            <img src="hinhanh/meo1.jpg" width="200px" height="200px">
        </div>
        <div class="ttcn-right">
            <div>
                <div class="td-tt">
                    <label>Thông tin cá nhân</label>
                </div>
            </div>
            <div>
                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Tên đăng nhập:</label>
                        <label>Họ tên:</label>
                        <label>Giới tính:</label>
                        <label>Địa chỉ:</label>
                        <label>Số điện thoại:</label>
                    </div>
                    <div class="tt-ttcn">
                        <label>hieuthao</label>
                        <label>Lê T Hiếu Thảo</label>
                        <label>Khác</label>
                        <label>(Hẻm 29) 73/2 Nam Kỳ Khởi Nghĩa - khóm 3 - phường 2 - TP. Trà Vinh</label>
                        <label>0866475515</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-ttcn">
        <a href="suathongtincn.php"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Sửa thông tin</a>
        <a href="doimk.php"><i class="fa-solid fa-key"></i>&nbsp;Đổi mật khẩu</a>
        <a href="donhang.php"><i class="fa-solid fa-cart-shopping"></i>&nbsp;Đơn hàng</a>
        <a href="dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Đăng xuất</a>
    </div>

</div>
<?php 
include("footer.php");
?>