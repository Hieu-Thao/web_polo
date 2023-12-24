<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
.ttcn-left img {
    display: block;
    border-radius: 15px;
}

.ttcn-right {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ttcn {
    display: flex;
    background-color: F5F7F8;
    margin: 30px 200px;
    padding: 30px 0px;
    border-radius: 10px;
    align-items: center;
    gap: 30px;
    justify-content: center;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25)
}

.ttcb {
    display: flex;
    padding: 10px 0px;
    gap: 15px;
    font-size: 17px;
}

.td-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 400;
    gap: 5px;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.td-tt {
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-bottom: 150px;
}

.btn-ttcn a {
    background-color: black;
    color: white;
    padding: 15px 20px;
    border-radius: 10px;
    text-decoration: none;
}
</style>

<div class="full-ttcn">
    <div class="ttcn">
        <div class="ttcn-left">
            <img src="hinhanh/11.png" width="200px" height="200px">
        </div>
        <div class="ttcn-right">
            <div>
                <div class="td-tt">
                    <label>Đánh giá sản phẩm</label>
                </div>
            </div>
            <div>
                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Tên sản phẩm:</label>
                        <label>Mức độ hài lòng:</label>
                        <label>Đánh giá:</label>
                    </div>
                    <div class="tt-ttcn">
                        <label>Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit</label>
                        <select name="mucdohailong">
                            <option value="#" selected="selected"></option>
                            <option value="Nam">Tệ</option>
                            <option value="Nữ">Bình thường</option>
                            <option value="Khác">Hài lòng</option>
                            <option value="Khác">Rất hài lòng</option>
                        </select>
                        <textarea style="border-radius:10px;" name="danhgia" rows="10" cols="50"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-ttcn">
        <a href="#">Đánh giá</a>
    </div>

</div>
<?php 
include("footer.php");
?>