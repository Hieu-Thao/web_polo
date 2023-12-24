<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
/* *{
    font-size: 18px;
} */

#quantity {
    font-size: 18px;
    margin: 0px 15px;
}

table {
    border-collapse: collapse;
    width: 90%;
    margin: 0 auto;
}

td,
th {
    text-align: left;
    padding: 20px 10px;
    margin: 0 auto;
}

tr {
    border-bottom: 1px solid #dddddd;
    margin: 0 auto;
}

.btsl {
    background-color: #F5F7F8;
    height: 25px;
    width: 25px;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    font-weight: 500;

}
</style>
<div class="td-gh">
    <label>Giỏ hàng của bạn</label>
</div>

<table>
    <tr>
        <td><input type="checkbox" name=""></td>
        <th colspan="2">Sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Tổng tiền</th>
        <th>
            <ion-icon name="trash-outline"></ion-icon>
        </th>
    </tr>
    <tr>
        <td><input type="checkbox" name=""></td>
        <td><img src="hinhanh/11.png" width="100px" height="100px"></td>
        <td>
            <label style="font-weight: 600;">Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit</label><br><br>
            <label>XL</label>
        </td>
        <td>
            <button class="btsl" onclick="decreaseQuantity()">-</button>
            <span id="quantity">0</span>
            <button class="btsl" onclick="increaseQuantity()">+</button>
        </td>
        <td>290.000</td>
        <td>290.000</td>
        <td><i class="fa-solid fa-x"></i></td>
    </tr>
    
    <tr>
        <td><input type="checkbox" name=""></td>
        <td><img src="hinhanh/14.png" width="100px" height="100px"></td>
        <td>
            <label style="font-weight: 600;">Áo Polo Nam Ryder vải cá sấu Cotton Interlock form Regular
                Fit</label><br><br>
            <label>M</label>
        </td>
        <td>
            <button class="btsl" onclick="decreaseQuantity()">-</button>
            <span id="quantity">0</span>
            <button class="btsl" onclick="increaseQuantity()">+</button>
        </td>
        <td>290.000</td>
        <td>290.000</td>
        <td><i class="fa-solid fa-x"></i></td>
    </tr>
    <td colspan="5" style="text-align: right; font-weight:700; font-size: 18px;">Tổng tiền</td>
    <td colspan="2" style="font-weight:700; font-size: 18px; color:red;">290.000</td>
    <tr>
    </tr>
</table>
<div class="bt-order">
    <a href="chitietdonhang.php"><button>Mua hàng</button></a>
</div>


<script>
var quantity = 0;

function updateQuantity() {
    document.getElementById("quantity").innerText = quantity;
}

function increaseQuantity() {
    quantity++;
    updateQuantity();
}

function decreaseQuantity() {
    if (quantity > 0) {
        quantity--;
        updateQuantity();
    } else {
        alert("Số lượng đã là 0, không thể giảm nữa.");
    }
}
</script>
<?php
include("footer.php");
?>