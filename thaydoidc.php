<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
.full-tddc {
    display: flex;
    margin: 20px 300px;
    padding: 10px 30px;
    flex-direction: column;
    border-radius: 10px;
    background-color: F5F7F8;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25);
    margin-bottom: 50px;
}

.td-td {
    display: flex;
    flex-direction: column;
    width: 200px;
}

.td-ttdc {
    display: flex;
    flex-direction: column;
}

.dcm {
    display: flex;
    margin-bottom: 10px;
    font-weight: 600;
}

.ttnd {
    display: flex;
    flex-direction: row;
    gap: 10px;
    margin-bottom: 20px;
    justify-content: center;
}

.ndcm {
    padding: 0px 20px;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.ndcm input {
    width: 100%;
    height: 50px;
    padding: 0px 10px;
    border-radius: 5px;
    border: 1px solid black;
    color: lightgrey;
}

.btn-luudc button {
    background-color: black;
    color: white;
    padding: 10px 10px;
    border-radius: 5px;
    font-weight: 700;
    border: none;
}

.btn-luudc {
    display: flex;
    justify-content: center;
    padding: 20px 0px;
    
}
</style>

<div class="full-tddc">
    <label style="text-align: center; font-weight:600; padding:25px 0px; font-size: 20px;">Thay đổi địa chỉ của
        bạn</label>
    <div class="ttnd">
        <div class="td-td">
            <label>Họ tên:</label>
            <label>Số điện thoại:</label>
            <label>Địa chỉ:</label>
        </div>
        <div class="td-ttdc">
            <label>Hiếu Thảo</label>
            <label>0866475515</label>
            <label>(Hẻm 29) 73/2 Nam Kỳ Khởi Nghĩa - khóm 3 - phường 2 - TP. Trà Vinh, Phường 2, Thành Phố Trà Vinh, Trà
                Vinh</label>
        </div>
    </div>
    <div class="dcm">
        <i class="fa-solid fa-location-dot"></i>&nbsp;Thay đổi địa chỉ nhận hàng</label>
    </div>
    <div class="ndcm">
        <label>Nhập địa chỉ mới của bạn:</label>
        <input type="text" name="" value="Nhập địa chỉ mới vào đây nè" />
    </div>
    <div class="btn-luudc">
        <button>Lưu địa chỉ</button>
    </div>
</div>


<?php
include("footer.php");
?>