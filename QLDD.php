<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p>Quản lý đơn đặt</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
            <a href="them_gv.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm đơn đặt</p>
                </a>
                <a href="#" class="button button-in">
                <ion-icon name="reader-outline"></ion-icon>
                    <p>Chi tiết đơn đặt</p>
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
                    <td width="7%">Mã đơn đặt</td>
                    <td width="10%">Username</td>
                    <td width="10%">Ngày đặt</td>
                    <td width="15%">Tổng tiền</td>
                    <td width="7%">Phương thức thanh toán</td>
                    <td width="7%">Trạng thái đơn đặt</td>
                    <td width="10%">Tính năng</td>
                </tr>
                <?php
                include("ketnoi.php");
                $sql = "SELECT * FROM dondat";
                $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                while ($row = mysqli_fetch_array($kq)) {
                    
                    $usernames = $row["username"];
                    $sql2 = "SELECT * FROM khachhang WHERE username='" . $usernames . "'";
                    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                    $username = mysqli_fetch_array($kq2);

                    $phuongthuctts = $row["maphuongthuc"];
                    $sql3 = "SELECT * FROM phuongthucthanhtoan WHERE maphuongthuc='" . $phuongthuctts . "'";
                    $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                    $phuongthuctt = mysqli_fetch_array($kq3);

                    echo "<tr>";
                    echo "<td><input type='checkbox'></td>";
                    echo "<td> " . $row["madondat"] . "</td>";
                    $usern = $row["madondat"];

                    echo "<td> " . $username["username"] . "</td>";

                    echo "<td> " . $row["ngaydat"] . "</td>";
                    echo "<td>" . $row["tongtien"] . "</td>";
                    
                    echo "<td> " . $phuongthuctt["tenphuongthuc"] . "</td>";
                    
                    echo "<td>" . $row["trangthaidathang"] . "</td>";

                    echo "<td class='table-icon'>
                    <a href='sua_dd.php?user=$usern'><button><ion-icon name='create-outline'></ion-icon></button></a>
                    <a href='xoa_dd.php?user=$usern'><button><ion-icon name='trash-outline'></button></ion-icon></a>
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