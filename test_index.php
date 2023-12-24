<?php 
include("header.php");
include("ketnoi.php");

// Lấy sản phẩm nổi bật từ cơ sở dữ liệu
$sqlNoiBat = "SELECT sanpham.*, COALESCE(sale.phantramsale, 0) AS phantramsale 
              FROM sanpham 
              LEFT JOIN sale ON sanpham.masale = sale.masale 
              WHERE sanpham.trangthainoibat = 'Có'";
$resultNoiBat = mysqli_query($conn, $sqlNoiBat);

// Lấy tất cả sản phẩm từ cơ sở dữ liệu, bao gồm cả sản phẩm có phần trăm sale bằng 0
$sqlTatCa = "SELECT sanpham.*, COALESCE(sale.phantramsale, 0) AS phantramsale FROM sanpham LEFT JOIN sale ON sanpham.masale = sale.masale";
$resultTatCa = mysqli_query($conn, $sqlTatCa);

?>

<div class="banner">
    <img src="hinhanh/banner_650.png" alt="Banner">
</div>

<div class="spnb">
    <label>Sản phẩm nổi bật</label>
</div>

<!-- Sản phẩm nổi bật -->
<!-- Sản phẩm nổi bật -->
<div class="content-spnb">
    <?php
    while ($row = mysqli_fetch_assoc($resultNoiBat)) {
        // Hiển thị sản phẩm nổi bật
        echo '<div class="sp">';
        echo '<div><img src="' . $row['hinhanh'] . '" width="270px" height="280px"></div>';
        echo '<div><label style="text-align: center;">' . $row['tensanpham'] . '</label></div>';
        echo '<div class="gia">';
        
        // Kiểm tra xem có phần trăm sale không và có lớn hơn 0 không
        if (isset($row['phantramsale']) && $row['phantramsale'] > 0) {
            $giaGiam = $row['giagoc'] * (1 - $row['phantramsale'] / 100);
            echo '<label style="color: red;">' . number_format($giaGiam) . 'đ</label>';
            echo '<label style="text-decoration: line-through; color: gray;">' . number_format($row['giagoc']) . 'đ</label>';
        } else {
            // Nếu không có phần trăm sale hoặc bằng 0, hiển thị giá gốc
            echo '<label style="color: red;">' . number_format($row['giagoc']) . 'đ</label>';
        }
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>


<a href="#" class="xt">
    <label>Xem thêm</label>
    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
</a>

<div class="tcsp">
    <label>Tất cả sản phẩm</label>
</div>

<!-- Tất cả sản phẩm -->
<div class="tcsp">
    <?php
    while ($row = mysqli_fetch_assoc($resultTatCa)) {
        // Hiển thị tất cả sản phẩm
        echo '<div class="sp">';
        echo '<div><img src="' . $row['hinhanh'] . '" width="270px" height="280px"></div>';
        echo '<div><label style="text-align: center;">' . $row['tensanpham'] . '</label></div>';
        echo '<div class="gia">';
        
        // Kiểm tra xem có phần trăm sale không và có lớn hơn 0 không
        if (isset($row['phantramsale']) && $row['phantramsale'] > 0) {
            $giaGiam = $row['giagoc'] * (1 - $row['phantramsale'] / 100);
            echo '<label style="color: red;">' . number_format($giaGiam) . 'đ</label>';
            echo '<label style="text-decoration: line-through; color: gray;">' . number_format($row['giagoc']) . 'đ</label>';
        } else {
            // Nếu không có phần trăm sale hoặc bằng 0, hiển thị giá gốc
            echo '<label style="color: red;">' . number_format($row['giagoc']) . 'đ</label>';
        }
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

<a href="tatcasanpham.php" class="xt">
    <label>Xem thêm</label>
    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
</a>

<div class="sologan">
    <label style="text-align: center; margin-top: 50px;">
        Chúng tôi - POLOMAN luôn cố gắng để trở thành lựa chọn hàng đầu <br> mỗi khi người đàn ông cần khơi dậy thần thái
    </label>
    <label style="font-weight: 600; padding-bottom: 30px;  border-bottom:1px solid black; margin-bottom:70px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHONG ĐỘ ĐÚNG LÚC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </label>
</div>

<?php
include("footer.php");
?>
