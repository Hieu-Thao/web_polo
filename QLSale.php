<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p>Quản lý Sale</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_kh.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm Sale</p>
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
            <table width="50%" class="table-content">
                <tr style="background-color:#CDD0CB; font-weight:600;">
                    <td width="3%"><input type="checkbox"></td>
                    <td width="7%">Mã Sale</td>
                    <td width="10%">Tên Sale</td>
                    <td width="20%">Phần Trăm Sale</td>
                    <td width="10%">Tính năng</td>
                </tr>
                <?php
                include("ketnoi.php");
                $sql = "SELECT * FROM sale";
                $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                while ($row = mysqli_fetch_array($kq)) {
                    
                    echo "<tr>";
                    echo "<td><input type='checkbox'></td>";
                    echo "<td> " . $row["masale"] . "</td>";
                    $usern = $row["masale"];
                    echo "<td> " . $row["tensale"] . "</td>";
                    echo "<td>" . $row["phantramsale"] . "</td>";
                    echo "<td class='table-icon'>
                    <a href='sua_sale.php?user=$usern'><button><ion-icon name='create-outline'></ion-icon></button></a>
                    <a href='xoa_sale.php?user=$usern'><button><ion-icon name='trash-outline'></button></ion-icon></a>
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