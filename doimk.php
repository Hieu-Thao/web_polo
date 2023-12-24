<?php 
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>

.ttcn-left{
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
}


.ttcn-right {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ttcn {
    display: flex;
    background-color: F5F7F8;
    margin: 30px 220px;
    padding: 30px 50px;
    border-radius: 10px;
    align-items: center;
    gap: 60px;
    justify-content: center;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25);
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
    gap: 15px ;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.tt-ttcn input{
    width: 300px;
    padding: 5px 10px;
    font-size: 17px;
    border: 1px solid black;
    border-radius: 5px ;
}

.td-tt{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin-bottom: 150px;
}

.btn-ttcn button{
    background-color: black;
    color: white;
    padding: 15px 30px;
    border-radius: 10px;
    font-size: 17px;
    font-weight: 600;
    border: none;
}

</style>

<div class="full-ttcn">
    <div class="ttcn">
        <div class="ttcn-right">
            <div>
                <div class="td-tt">
                    <label>Đổi mật khẩu</label>
                </div>
            </div>
            <div>
                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Mật khẩu cũ:</label>
                        <label>Mật khẩu mới:</label>
                        <label>Nhập lại mật khẩu mới:</label>
                    </div>
                    <div class="tt-ttcn">
                        <input type="password" name="">
                        <input type="password" name="">
                        <input type="password" name="">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="btn-ttcn">
        <button>Lưu lại</button>
        <a href="thongtincanhan.php"><button>Hủy</button></a>
    </div>
    

</div>
<?php 
include("footer.php");
?>