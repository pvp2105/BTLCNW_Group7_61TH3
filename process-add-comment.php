<?php

    //Xử lý giá trị gửi tới
    if(isset ($_POST['txtCmt'])){
        $cmt = $_POST['txtCmt'] ;
    }
 
     //Bước 1: Kết nối Database Server
    $conn = mysqli_connect('localhost' , 'root', '', 'linkedin');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
        }
    //Bước 02: Thực hiện truy vấn
    $sql = "Insert Into mycomment (comment, timeCmt)
        Values ('$cmt', NOW()) ";
    $ketqua = mysqli_query($conn,$sql);

    if(!$ketqua){
         header("location: error.php");  //Chuyển hướng, hiển thị thông báo lỗi
    }
    else{
        header("location: home.php"); //Chuyển hướng về trang quản trị
    }
    //Buoc 03: Đóng kết nối
    mysqli_close($conn);
?>