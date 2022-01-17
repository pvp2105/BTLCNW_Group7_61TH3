<?php
// Import lại cấu hình bước 1
require 'dbConfig.php';
$statusMsg = '';    //tạo  1 biến để lưu trạng thái upload nhằm mục tiêu phản hồi lại người dùng

// Những động tác và thiết lập cho việc chuẩn bị upload     
$targetDir = "uploads/";    //thư mục chỉ định nằm trong project LinkedIn để lưu trữ tải tệp lên
$fileName = basename($_FILES["myFile"]["name"]);      //$file là 1 biến siêu toàn cục lưu trữ toàn bộ phần tử file trên form

$targetFilePath = $targetDir . $fileName;  //Đây là tên đầy đủ + đường dẫn tệp tin sau khi upload
//nó là gtri cần truyển vào hàm movie_uploaded_file

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$cap = $_POST['txtCap'] ;

//Bước 2: ktra xem người dùng nhấm submit và file đã đc chọn chưa
if(isset($_POST["sbmUpload"]) && !empty($_FILES["myFile"]["name"])){

    $allowTypes = array('jpg','png','jpeg','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT into mypost (caption, img, timepost) VALUES ('$cap', '$fileName', NOW())" ;
            $insert = mysqli_query($db, $sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("location: home.php") ;
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}
else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

