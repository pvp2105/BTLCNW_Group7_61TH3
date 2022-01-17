<?php
    //Tạo SESSION: Mặc định mỗi phiên làm việc có thời hạn 24p
    session_start();
?>
<?php
    //login.php Truyền dữ liệu sang 
    //process-login.php Nhận dữ liệu từ admin.php gửi sang 

    //Kiểm tra xem người dùng có đúng là ấn vào nút bt Sign in ko 
    if (isset($_POST['btnSignIn'])) {  
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        
        //Kiem tra nguoi dung da nhap chua
        
        //Bước 1: Kết nối Database Server
        $conn = mysqli_connect('localhost' , 'root', '', 'linkedin');
        if(!$conn){
            die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
            }
        //Bước 02: Thực hiện truy vấn
        $sql = "Select * from db_account where email = '$email' and matkhau = '$pass' ";
        //ở đây còn có các vấn đề về tính hợp lệ dl nhập vào form

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_array($result);
            //Cấp thẻ làm việc
            $_SESSION['isLoginOK'] = $email;
            $_SESSION['user'] = $user['tennguoidung'];
            $_SESSION['ma_nguoidung'] = $user['ma_nguoidung'];
            $_SESSION['avartar'] = $user['avartar'];

            header("location: home.php"); //Chuyển hướng về trang quản trị
        }
        else{
            $error = "Bạn nhập email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
        //Buoc 03: Đóng kết nối
        mysqli_close($conn);
    }
    else{
        header("location:index.php");
    }

?>