<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    //Xử lý giá trị gửi tới

    if(isset ($_POST['txtCap'])){
        $cap = $_POST['txtCap'] ;
    }
    $img = $_FILES['myFile'] ;
    $idPost = $_POST['idPost'] ;

     //Bước 1: Kết nối Database Server
        $conn = mysqli_connect('localhost' , 'root', '', 'linkedin');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
        }
    //Bước 02: Thực hiện truy vấn
    $sql = "Update mypost  SET caption = '$cap', img = '$img' where idPost = '$idPost' ";
    
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