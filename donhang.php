<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
    table {
    border-collapse: collapse;
    width: 90%;
    margin: 0 auto;
    margin-bottom: 100px;
}

td,
th {
    text-align: center;
    padding: 20px 10px;
    margin: 0 auto;
}

tr {
    border-bottom: 1px solid #dddddd;
    margin: 0 auto;
}
</style>

<div>
    <label style="font-size: 25px; font-weight: 700; padding: 30px 0px; display: flex; justify-content: center; margin-bottom:25px;">Đơn hàng của bạn</label>
    <table>
        <tr>
            <th>Mã đơn</th>
            <th colspan="2">Sản phẩm</th>
            <th>Size</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
            <th>Tổng tiền</th>
            <th>Ngày đặt</th>
            <th>Phương thức thanh toán</th>
            <th>Trạng thái</th>
            <th>Đánh giá</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="hinhanh/11.png" width="50px" height="50px"/></td>
            <td>Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit </td>
            <td>XL</td>
            <td>1</td>
            <td>290.000</td>
            <td>290.000</td>
            <td>01/01/2023</td>
            <td>COD</td>
            <td>Đang giao</td>
            <td><a href="danhgiasp.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
        </tr>
        <tr>
            <td>2</td>
            <td><img src="hinhanh/8.png" width="50px" height="50px"/></td>
            <td>Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit </td>
            <td>XL</td>
            <td>1</td>
            <td>290.000</td>
            <td>290.000</td>
            <td>01/01/2023</td>
            <td>COD</td>
            <td>Đang giao</td>
            <td><a href="danhgiasp.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
        </tr>
    </table>
</div>
<?php
include("footer.php");
?>