<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    //admin.php Truyền dữ liệu sang 
    //deleteEmployee.php Nhận dữ liệu từ admin.php gửi sang 
    $idPost = $_GET['id'];

        //Bước 1: Kết nối Database Server
        $conn = mysqli_connect('localhost' , 'root', '', 'linkedin');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                }
        //Bước 02: Thực hiện truy vấn
        $sql = "Delete from mypost where idPost = '$idPost' ";
        $number = mysqli_query($conn,$sql);

        if($number > 0){
            header("location: home.php"); //Chuyển hướng về trang quản trị
        }
        else{
            header("location: error.php"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        //Buoc 03: Đóng kết nối
        mysqli_close($conn);
?>