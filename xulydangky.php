<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    include("ketnoi.php");
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $hoten = $_POST["hoten"];
    $gioitinh = $_POST["gioitinh"];
    $diachi = $_POST["diachi"];
    $sdt = $_POST["sdt"];

    $sql = "INSERT INTO khachhang (username, pass, hoten, gioitinh, diachi, sdt) VALUES ('$username', '$pass', '$hoten', '$gioitinh', '$diachi', '$sdt')";
    $kq = mysqli_query($conn, $sql) or die("Không thể thêm giảng viên: " . mysqli_error($conn));

    echo "<script language=javascript>
            alert('Thêm bộ môn thành công');
            window.location='index.php';
        </script>";
?>

</body>

</html>