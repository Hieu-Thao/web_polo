<?php
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
/* Xử lý ảnh */
* {
    box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
    position: relative;
    width: 380px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 30px;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
    cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 5px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
    background-color: #bebebe;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* Container for image text */
.caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Six columns side by side */
.column {
    float: left;
    width: 25%;
}

/* Add a transparency effect for thumnbail images */
.demo {
    opacity: 0.6;
}

.active,
.demo:hover {
    opacity: 1;
}


/* không đụng vô phần trênnnn */

.full-xsp {
    display: flex;
    gap: 70px;
    padding: 25px 185px;
}

.xsp-right {
    width: 550px;

}

.xsp-right-top {
    display: flex;
    flex: 1;
    flex-direction: column;
    gap: 10px;
    border-bottom: 1px solid lightgray;
    height: 200px;
}

.giasp {
    display: flex;
    gap: 15px;
}

.tk {
    display: flex;
    align-items: flex-start;
    font-size: 12px;
    background-color: red;
    padding: 5px 7px;
    border-radius: 45px;
    color: white;
    font-weight: 600;
}

.hdcs {
    display: flex;
    padding: 10px 0px;

}

.hdcs a {
    text-decoration: none;
    color: black;
    display: flex;
    align-items: center;
    gap: 5px;
}

.xsp-right-bot {
    /* border: 2px solid black; */
    margin: 20px 0px;
    gap: 10px;
    display: flex;
    flex-direction: column;
}

.bt-size {
    gap: 10px;
}

.bt-size button {
    padding: 6px 10px;
    border: none;
    border-radius: 5px;
}

.bt-size button:hover {
    padding: 6px 10px;
    border: none;
    border-radius: 5px;
    background-color: black;
    color: white;
    font-weight: 600;
}

.bt-sl input {
    width: 100px;
    height: 25px;
    text-align: center;
    ;
}

.bt-sl {
    margin-top: 15px;
}

.bt-tgh button {
    background-color: black;
    padding: 10px 60px;
    color: white;
    border-radius: 45px;
    border: none;
    font-weight: 600;
    font-size: 18px;
    width: 100%;
}

.bt-tgh {
    display: flex;
    /* justify-content: center; */
    padding: 35px 0px;
}

.tag {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
}


.nd-qc {
    display: flex;
    justify-content: center;
    gap: 150px;
    padding: 15px 0px;
}

.fa-truck,
.fa-tag,
.fa-socks {
    background-color: lightgray;
    padding: 30px 30px;
    font-size: 35px;
    border-radius: 10px;
    margin: 10px 0px;
}

.txt-tt {
    display: flex;
    flex-direction: column;
    gap: 10px;
    font-size: 18px;
    padding: 10px 130px;
    margin-bottom: 30px;
}

.anh-tt {
    display: block;

}

.anh-tt img {
    height: 250px;
    width: 250px;
}

.full-img {
    display: flex;
    justify-content: center;
    gap: 30px;
    padding: 20px 0px;
}
.td-tt{
    font-size: 22px;
    display: flex;
    justify-content: center;
    font-weight: 700;
    padding: 30px;
}
</style>

<div class="full-xsp">
    <!-- Container for the image gallery -->
    <div class="container">

        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="hinhanh/11.png" style="width:100%; height:350px;">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="hinhanh/11.3.jpg" style="width:100%; height:350px;">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="hinhanh/11.1.png" style="width:100%; height:350px;">
        </div>
        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="hinhanh/11.2.png" style="width:100%; height:350px;">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="hinhanh/11.png" style="width:100%" onclick="currentSlide(1)"
                    alt="The Woods">
            </div>
            <div class="column">
                <img class="demo cursor" src="hinhanh/11.3.jpg" style="width:100%" onclick="currentSlide(2)"
                    alt="Cinque Terre">
            </div>
            <div class="column">
                <img class="demo cursor" src="hinhanh/11.1.png" style="width:100%" onclick="currentSlide(3)"
                    alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="hinhanh/11.2.png" style="width:100%" onclick="currentSlide(3)"
                    alt="Mountains and fjords">
            </div>
        </div>
    </div>

    <div class="xsp-right">
        <div class="xsp-right-top">
            <label style="color:gray; font-size:15px">Poloman</label>
            <label style="font-size: 25px; font-weight:700;">Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular
                Fit</label>
            <div class="giasp">
                <label style="color: red; font-size:20px;">299.000đ</label>
                <label style="text-decoration: line-through; color:gray; font-size:20px;">350.000đ</label>
                <div class="tk">
                    <label>Tiết kiệm 51.000đ</label>
                </div>

            </div>
            <div class="hdcs">
                <a href="hinhanh/bang size.jpeg">
                    <ion-icon name="shirt-outline"></ion-icon>
                    <label>Hướng dẫn chọn size áo</label>
                </a>
            </div>
        </div>
        <div class="xsp-right-bot">
            <label>Size: XXL</label>
            <div class="bt-size">
                <button>M</button>
                <button>L</button>
                <button>XL</button>
                <button>XLL</button>
            </div>
            <div class="bt-sl">
                <label>Số lượng:</label>
                <input type="number" name="soluong"></input>
            </div>
            <div class="bt-tgh">
                <button>Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>
</div>

<div class="nd-qc">
    <div class="tag">
        <i class="fa-solid fa-truck"></i>
        <label style="font-weight: 600; font-size: 18px;">Freeship toàn quốc</label>
        <label>Dành cho đơn hàng từ 500K trở lên</label>
    </div>
    <div class="tag">
        <i class="fa-solid fa-tag"></i>
        <label style="font-weight: 600; font-size: 18px;">Đổi trả lên tới 30 ngày</label>
        <label>Áp dụng mọi đơn hàng</label>
    </div>
    <div class="tag">
        <i class="fa-solid fa-socks"></i>
        <label style="font-weight: 600; font-size: 18px;">Tặng tất</label>
        <label>Dành cho đơn hàng từ 300K trở lên</label>
    </div>
</div>
<div>
    <label class="td-tt">Thông tin sản phẩm</label>
    <div class="txt-tt">
        <label>&bull;&nbsp;&nbsp;Chất vải cá sấu Cotton Interlock mềm mượt và thoáng mát cả ngày dài</label>
        <label>&bull;&nbsp;&nbsp;Phom Regular Fit tôn dáng, hợp với hầu hết kích thước cơ thể</label>
        <label>&bull;&nbsp;&nbsp;Thoải mái giặt máy, không ra màu và không mất form áo</label>
        <label>&bull;&nbsp;&nbsp;Tinh giản nhưng không kém nổi bật. Điểm nhấn hình thêu logo Poloman giúp sản phẩm tinh
            tế và sang trọng hơn</label>
    </div>
    <div class="full-img">
        <div class="anh-tt">
            <img src="hinhanh/11.png">
        </div>
        <div class="anh-tt">
            <img src="hinhanh/11.3.jpg">
        </div>
        <div class="anh-tt">
            <img src="hinhanh/11.1.png">
        </div>
        <div class="anh-tt">
            <img src="hinhanh/11.2.png">
        </div>
    </div>
    <div class="txt-tt">
        <label>&bull;&nbsp;&nbsp;<b>Cổ áo:</b> Bo cổ đứng form nhưng mềm mại, dễ chịu, không gây khó chịu khi mặc</label>
        <label>&bull;&nbsp;&nbsp;<b>Logo thêu:</b> Kỹ thuật thêu nổi, tỉ mỉ, sắc nét, không bị bong tróc.</label>
        <label>&bull;&nbsp;&nbsp;<b>Tay áo:</b> Bo tay áo vừa vặn thoải mái, không quá rộng hoặc quá bó. Đường may tỉ mỉ, không chỉ thừa</label>
    </div>
</div>

<div class="full-danhgia">
    <div class="mdhl">
        <label style="font-size: 20px; font-weight: 700;">Đánh giá sản phẩm</label>
        <div class="bt-mdhl">
            <label>Mức độ hài lòng:</label>
            <button>Tất cả</button>
            <button>Tệ</button>
            <button>Bình thường</button>
            <button>Hài lòng</button>
            <button>Rất hài lòng</button>
        </div>
    </div>
    <div class="danhgia">
        <div class="danhgia-img">
            <img src="hinhanh/meo1.jpg" width="80px" height="80px">
        </div>
        <div class="danhgia-tt">
            <label><b>Freen Salowcha</b></label>
            <label style="color: crimson; font-weight: 500; font-size: 15px;">Rất hài lòng</label>
            <label style="font-size: 14px; color: grey;">Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit</label>
            <label style="font-size: 17px; font-weight: 400;">Áo của bé rất đẹp nhaa ~ Chị sẽ ủng hộ bé dài dài. Iu béeeee</label>
        </div>
    </div>
    <div class="danhgia">
        <div class="danhgia-img">
            <img src="hinhanh/bk.jpg" width="80px" height="80px">
        </div>
        <div class="danhgia-tt">
            <label><b>Becky Armstrong</b></label>
            <label style="color: crimson; font-weight: 500; font-size: 15px;">Rất hài lòng</label>
            <label style="font-size: 14px; color: grey;">Áo Polo Nam Travis vải cá sấu Cotton Interlock form Regular Fit</label>
            <label style="font-size: 17px; font-weight: 400;">Giao hàng siêu nhanh, từ VN qua TL chỉ mất 1 tuần thôi. Áo của shop rất đẹp nhaa ~ Bé sẽ ủng hộ shop dài dài.</label>
        </div>
    </div> 
</div>





<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>

<?php
    include("footer.php");
    ?>