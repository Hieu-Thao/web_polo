<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
table {
    width: 100%;
}

td,
th {
    margin: 0 auto;
    padding: 7px 15px;
}

tr {
    margin: 0 auto;
}
</style>

<div class="full-ctdh">
    <div class="td-ctdd">
        <label>Đơn hàng của bạn</label>
    </div>
    <div class="full-dc">
        <div class="dc-left">
            <label style="font-weight: 600; font-size: 18px; margin-bottom:5px;"><i
                    class="fa-solid fa-location-dot"></i> Địa chỉ nhận hàng</label>
            <label style="padding-left: 20px;">Hiếu Thảo</label>
            <label style="padding-left: 20px;">0866475515</label>
        </div>
        <div class="dc-right">
            <label>(Hẻm 29) 73/2 Nam Kỳ Khởi Nghĩa - khóm 3 - phường 2 - TP. Trà Vinh, Phường 2, Thành Phố Trà Vinh, Trà
                Vinh</label>
            <a href="thaydoidc.php">Thay đổi</a>
        </div>
    </div>
    <div class="full-sp">
        <label style="color: gray;">Poloman</label>
        <table>
            <tr>
                <th colspan="2"></th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Tổng tiền</th>
            </tr>
            <tr>
                <td><img src="hinhanh/11.png" width="100px" height="100px"></td>
                <td class="tsp">
                    <label style="font-weight: 600;">Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular
                        Fit</label><br><br>
                    <label>XL</label>
                </td>
                <td style="text-align:center;">1</td>
                <td style="text-align:center;">290.000</td>
                <td style="text-align:center;">290.000</td>
            </tr>

            <tr>
                <td><img src="hinhanh/14.png" width="100px" height="100px"></td>
                <td class="tsp">
                    <label style="font-weight: 600;">Áo Polo Nam Ryder vải cá sấu Cotton Interlock form Regular
                        Fit</label><br><br>
                    <label>XL</label>
                </td>
                <td style="text-align:center;">1</td>
                <td style="text-align:center;">290.000</td>
                <td style="text-align:center;">290.000</td>
            </tr>
        </table>
        <div>
            <div class="full-pttt">
                <label style="font-size:18px; font-weight:600; padding:0px 355px;"><i
                        class="fa-solid fa-credit-card"></i>
                    Phương thức thanh toán:</label>
                <div class="pttt">
                    <div>
                        <input type="checkbox" name=""></input>
                        <label>COD</label>
                    </div>
                    <div>
                        <input type="checkbox" name=""></input>
                        <label>Thanh toán ATM</label>
                    </div>
                    <div>
                        <input type="checkbox" name=""></input>
                        <label>Thanh toán VNPay/Momo</label>
                    </div>
                </div>
                <div style="display:flex;display: flex; flex-direction: column; gap: 10px;">
                    <label style="font-size:18px; padding:0px 345px; font-weight:600;"><i
                            class="fa-solid fa-truck"></i></i>
                        Phương thức vận chuyển:</label>
                    <div class="vc">
                        <label>Viettel Post</label>
                        <label><b>0</b></label>
                    </div>
                </div>
                <div>
                    <div class="tongtien">
                        <label style="font-size:18px; font-weight:600;">Tổng số tiền (2 sản phẩm):</label>
                        <label style="font-size:20px; font-weight:600; color: red;">580.000</label>
                    </div>
                </div>
                <div class="btn-dh">
                    <button>Đặt hàng</button>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>