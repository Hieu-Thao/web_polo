<?php 
include("header.php");
include("ketnoi.php");

// Truy vấn cơ sở dữ liệu để lấy thông tin sản phẩm và giảm giá từ bảng sale
$sql = "SELECT sanpham.*, sale.phantramsale FROM sanpham LEFT JOIN sale ON sanpham.masale = sale.masale";
$result = mysqli_query($conn, $sql);

?>

<div class="phanloai">
    <label>Giá áo:</label>
    <button>Tất cả</button>
    <button>Dưới 300k</button>
    <button>Dưới 500k</button>
    <button>Dưới 1 triệu</button>
</div>

<div class="tcsp">
    <label>Tất cả sản phẩm</label>
</div>

<!-- Tất cả sản phẩm -->
<div class="content-spnb">
    <?php
    // Hiển thị sản phẩm từ kết quả truy vấn
    while ($row = mysqli_fetch_assoc($result)) {
        $giaGoc = $row['giagoc'];
        $phanTramSale = $row['phantramsale'];

        // Hiển thị giá gốc nếu phần trăm giảm giá bằng 0, ngược lại hiển thị giá sau giảm giá
        $hienThiGia = ($phanTramSale == 0) ? $giaGoc : $giaGoc - ($giaGoc * $phanTramSale / 100);
        ?>
        <div class="sp">
            <div>
                <img src="<?php echo $row['hinhanh']; ?>" width="270px" height="280px">
            </div>
            <div>
                <label style="text-align: center;">
                    <?php echo $row['tensanpham']; ?>
                </label>
            </div>
            <div class="gia">
                <label style="color: red;"><?php echo number_format($hienThiGia); ?>đ</label>
                <!-- Chỉ hiển thị giá gốc nếu phần trăm giảm giá khác 0 -->
                <?php if ($phanTramSale != 0): ?>
                    <label style="text-decoration: line-through; color: gray"><?php echo number_format($giaGoc); ?>đ</label>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include("footer.php");
?>
