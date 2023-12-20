<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p>Quản lý khách hàng</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_kh.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm khách hàng</p>
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
                    <td width="7%">Username</td>
                    <td width="10%">Mật khẩu</td>
                    <td width="20%">Họ tên</td>
                    <td width="10%">Giới tính</td>
                    <td width="7%">Địa chỉ</td>
                    <td width="8%">Số điện thoại</td>
                    <td width="15%">CCCD</td>
                    <td width="10%">Ảnh đại diện</td>
                    <td width="10%">Tính năng</td>
                </tr>
                <?php
                include("ketnoi.php");
                $sql = "SELECT * FROM khachhang";
                $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                while ($row = mysqli_fetch_array($kq)) {
                    
                    echo "<tr>";
                    echo "<td><input type='checkbox'></td>";
                    echo "<td> " . $row["username"] . "</td>";
                    $usern = $row["username"];
                    echo "<td> " . $row["pass"] . "</td>";
                    echo "<td>" . $row["hoten"] . "</td>";
                    echo "<td>" . $row["gioitinh"] . "</td>";
                    echo "<td>" . $row["diachi"] . "</td>";
                    echo "<td>" . $row["sdt"] . "</td>";
                    echo "<td>" . $row["CCCD"] . "</td>";
                    echo "<td><img src= '" . $row["anhdaidien"] . "' height='50' width='50'></td>";
                    echo "<td class='table-icon'>
                    <a href='sua_kh.php?user=$usern'><button><ion-icon name='create-outline'></ion-icon></button></a>
                    <a href='xoa_kh.php?user=$usern'><button><ion-icon name='trash-outline'></button></ion-icon></a>
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