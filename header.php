<?php
session_start();

// Check if the user is trying to add an item to the cart
$addingToCart = isset($_GET['add_to_cart']) && $_GET['add_to_cart'] == 1;

// Check if the user is not logged in and is trying to add an item to the cart
if ($addingToCart && (!isset($_SESSION["khachhang"]) || empty($_SESSION["khachhang"]))) {
    echo "<script language=javascript>
    alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng!'); 
    window.location='login.php';
    </script>";
    exit(); // Stop further execution if the user is not logged in
}

// Rest of your existing code...

?>


<?php
include("ketnoi.php");

// Check if the session key is set before using it
$userlogin = isset($_SESSION["khachhang"]) ? $_SESSION["khachhang"] : null;

if ($userlogin) {
    $sql2 = "select * from khachhang where username='" . $userlogin . "'";
    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $khachhang_login = mysqli_fetch_array($kq2);
} else {
    // Handle the case where the user is not logged in (if needed)
    $khachhang_login = null;
}

?>


<link rel="stylesheet" href="css.css">
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

<div class="divbig">
    <div class="top">
        <div class="marquee">
            <div>
                <span>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FREESHIP cho đơn hàng từ 500K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tặng tất cho đơn hàng từ 300K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    FREESHIP cho đơn hàng từ 500K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tặng tất cho đơn hàng từ 300K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FREESHIP cho đơn hàng từ 500K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tặng tất cho đơn hàng từ 300K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    FREESHIP cho đơn hàng từ 500K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tặng tất cho đơn hàng từ 300K
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&bull;</span>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="logo">
            <a href="index.php"><label>POLOMAN</label></a>
        </div>
        <div class="search">
            <input style="color: lightgray; text-align:center;" type="text" name="search"
                value="Tìm kiếm ở đây nè!"></input>
            <button>
                <ion-icon name="search-outline"></ion-icon>
            </button>
        </div>
        <div class="trangchu">
            <a href="index.php">Trang chủ</a>
            <a href="tatcasanpham.php">Tất cả sản phẩm</a>
            <div class="dropdown">
                <label class="dropbtn">Chính sách</label>
                <ion-icon style="font-size: 10px;" name="chevron-down-outline"></ion-icon>
                <div class="dropdown-content">
                    <a href="chinhsachkiemhang.php">Chính sách kiểm hàng</a>
                    <a href="#">Chính sách đổi / hoàn trả</a>
                    <a href="#">Chính sách bảo hành</a>
                    <a href="#">Chính sách sử dụng</a>
                </div>
            </div>
        </div>
        
        <div class="ic-right">
    <a href="giohang.php"><ion-icon style="font-size: 30px;" name="cart-outline"></ion-icon></a>
    <?php if(isset($khachhang_login) && !empty($khachhang_login['hinhdaidien'])): ?>
       
        <a href="thongtincanhan.php"><img src="<?php echo $khachhang_login['hinhdaidien']; ?>" alt="Profile Picture" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid black;"></a>
    <?php else: ?>

        <a href="login.php"><ion-icon style="font-size: 30px;" name="person-circle-outline"></ion-icon></a>
    <?php endif; ?>
</div>



    </div>