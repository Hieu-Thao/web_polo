<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p>Quản lý sản phẩm</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
            <a href="them_gv.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm sản phẩm</p>
                </a>
                <a href="#" class="button button-in">
                <ion-icon name="pricetags-outline"></ion-icon>
                    <p>Chi tiết sản phẩm</p>
                </a>
                <a href="#" class="button button-xtt">
                    <ion-icon name="trash-outline"></ion-icon>
                    <p>Xóa tất cả</p>
                </a>
                
            </div>
            <div class="btn-center-search">
                <input type="text" name="tendn" placeholder="Tìm kiếm" required>
                <button type="submit">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>
        </div>
        <div class="table">
            <table width="100%" class="table-content">
                <tr style="background-color:#CDD0CB; font-weight:600;">
                    <td width="3%"><input type="checkbox"></td>
                    <td width="7%">Mã sản phẩm</td>
                    <td width="10%">Chi tiết</td>
                    <td width="10%">Sale</td>
                    <td width="15%">Tên sản phẩm</td>
                    <td width="7%">Thông tin</td>
                    <td width="8%">Hình ảnh</td>
                    <td width="10%">Giá gốc</td>
                    <td width="5%">Số lượng</td>
                    <td width="10%">Trạng thái nổi bật</td>
                    <td width="10%">Tính năng</td>
                </tr>
                <?php
                include("ketnoi.php");
                $sql = "SELECT * FROM sanpham";
                $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                while ($row = mysqli_fetch_array($kq)) {
                    
                    $chitiets = $row["machitiet"];
                    $sql2 = "SELECT * FROM chitietsanpham WHERE machitiet='" . $chitiets . "'";
                    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                    $chitiet = mysqli_fetch_array($kq2);

                    $sales = $row["masale"];
                    $sql3 = "SELECT * FROM sale WHERE masale='" . $sales . "'";
                    $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                    $sale = mysqli_fetch_array($kq3);

                    echo "<tr>";
                    echo "<td><input type='checkbox'></td>";
                    echo "<td> " . $row["masanpham"] . "</td>";
                    $usern = $row["masanpham"];

                    echo "<td> " . $chitiet["machitiet"] . "</td>";
                    echo "<td> " . $sale["tensale"] . "</td>";

                    echo "<td> " . $row["tensanpham"] . "</td>";
                    echo "<td>" . $row["thongtinsanpham"] . "</td>";
                    echo "<td><img src= '" . $row["hinhanh"] . "' height='50' width='50'></td>";
                    echo "<td>" . $row["giagoc"] . "</td>";
                    echo "<td>" . $row["soluong"] . "</td>";
                    echo "<td>" . $row["trangthainoibat"] . "</td>";
                    echo "<td class='table-icon'>
                    <a href='sua_sp.php?user=$usern'><button><ion-icon name='create-outline'></ion-icon></button></a>
                    <a href='xoa_sp.php?user=$usern'><button><ion-icon name='trash-outline'></button></ion-icon></a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include("footer_admin.php");
?>