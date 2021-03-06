<?php
    //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/Profile.css">
	<link rel="icon" href="assets/images/logo-Linkedin.png">
</head>

<body>
    
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ms-3" >
                <div class="container-fluid ms-5">
                    <?php
                        include 'dbConfig.php';
                        $id = $_SESSION['ma_nguoidung'];
                        $sql = "Select * from db_account where ma_nguoidung = '$id' ";
                            
                        $result = mysqli_query($db,$sql);
                            $user = mysqli_fetch_array($result);
                        //Buoc 03: Đóng kết nối
                        mysqli_close($db);
                    ?>  
                    <a class="navbar-brand ms-5" href="home.php">
                        <button type="button" class="btn btn-primary ms-5">
                                <i class="bi bi-linkedin" style="color: rgb(248, 247, 247);">
                                </i>
                        </button>
                    </a>
                    <div class="search" style="display: inline;">
                        <div style="display: inline-flex;">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search for jobs, companies..." aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="home.php">
                                <i class="bi bi-house-door-fill" style= "font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Home</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">My Network</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Jobs.php">
                                <i class="bi bi-briefcase-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Jobs</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Messaging.php">
                                <i class="bi bi-chat-dots-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Messaging</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Notifications.php">
                                <i class="bi bi-bell-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Notifications</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown" style="border-right: 1px solid rgb(238, 221, 221);">
                            <a class="nav-link active me-2" href="Profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" style="font-size: 18px;"></i>
                                    <div class="text-nav" style="font-style: normal;">Me<i class="bi bi-caret-down-fill"></i>
                                    </div>
                                </i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 240px;">
                                <div class="my-sidebar list-group bg-white">
                                    <div class="feed-identity-module m-2 text-center" style="display: inline;">
                                        <a href="Profile.php" class="profile">
                                            <img class="img-fluid rounded-circle img-home col-md-3" style = "width: 115px; height: 115px;" src ="uploads/<?php echo $user['avartar']; ?>">
                                            <span class="identity-name t-black text-center col-md-9">
                                            <?php
                                                if(isset($_SESSION['isLoginOK'])){
                                                    echo "<a class='nav-link' style = 'color: #000'>{$_SESSION['user']}</a>";
                                                }
                                            ?>
                                            </span>
                                        </a>
                                        <div class="list-group-item mt-2" style="border-radius: 16px; color: #0a66c2;">
                                            <a href="Profile.php" class="" style="text-decoration: none;">
                                                <div class="row text-align-center feed-identity">
                                                    <span class="text-center" style="color: blue; font-size: 14px;">View Profile</span> 
                                                </div>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <p style="color: black;">Account</p>
                                        <a class="text-decoration-none" href="" style="font-size: 14px; color: #7e6565;">
                                            <i class="bi bi-gem bg-warning"></i>
                                                Try Premium for free
                                        </a>
                                    <ul class="list-unstyled"> 
                                        <li class="mt-2"><a href="" class="text-decoration-none">Settings & Privacy</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Help</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Language</a></li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <p style="color: black;">Manage</p>
                                    <ul class="list-unstyled"> 
                                        <li class="mt-2"><a href="" class="text-decoration-none">Posts & Activity</a></li>
                                        <li class="mt-2"><a href="" class="text-decoration-none">Jobs posting Account</a></li>
                                    </ul>
                                </div>
                                <div class="ms-3">
                                    <a href="signout.php" class="signout text-decoration-none">
                                        Sign Out
                                    </a>
                                </div>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-grid-3x3-gap-fill" style="font-size: 18px;"></i>
                                    <div class="text-nav" style="font-style: normal;">Work<i class="bi bi-caret-down-fill"></i></div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-calendar2-minus-fill" style="font-size: 18px;"></i>
                                    <div class="text-nav" style="font-style: normal;">Post a job</div>
                                </i>
                            </a>
                        </li>
                    </ul>
                    
                    </div>
            </div>
            </nav>
        </div>
    </header>
    <main class="container-fluid" style="background: #f3f2ef; margin-top: 68px;">
        <div class="row" style="height: 24px">
            <div class="col-md-12"></div>
        </div>
        <div class="main-about row ms-5 me-5 ps-5">
            <div class="main col-md-7">
                <div class="list-group ms-5" style="background: white;border-radius: 8px;">
                    <div class="feed-identity-module">
                        <div class="avartar col-md-12 ps-3" style="background-image: url('https://static-exp1.licdn.com/sc/h/55k1z8997gh8dwtihm11aajyq');">
                            <div class="avatar">
                               
                                <span class = "avatar">
                                    <img class="img-fluid rounded-circle img-home mt-3" style = "width: 140px; height: 140px;" src ="uploads/<?php echo $user['avartar']; ?>">
                                </span>
                                <span class = "col-md-8">
                                    <button type="button" class="btn btn-light ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" style = "margin-top: 100px">
                                        <i class="bi bi-camera-fill"></i> Thay Avatar
                                    </button>
                                </span>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">CẬP NHẬT ẢNH ĐẠI DIỆN</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="uploadAvt.php?id=<?php echo $_SESSION['ma_nguoidung']; ?>" method = "post" enctype = "multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">Chọn ảnh</label>
                                                        <input class="form-control" id="message-text" type ="file" name="myfile"></input>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <input type="submit" class="btn btn-warning" name="submit" value = "Upload"></input>
                                                    </div> 
                                                </form>
                                            </div>
                                        </div>                
                                    </div>
                                </div>
                            </div>    
                        </div>
                   
                        <div class="text-profile ps-3 mb-3">
                            <div class="identity-name mt-3 t-black">
                                <?php
                                    if(isset($_SESSION['isLoginOK'])){
                                        echo "<a class='nav-link' style = 'color: #000'>{$_SESSION['user']}</a>";
                                    }
                                ?>
                            </div>
                            <div class="ms-5">--</div>
                            <div id="demoimg"  class="text-address ms-3">Ha Noi, Viet Nam</div>
                            <a href="">
                                <button class="btn-topic mt-2">Open to</button>
                            </a>

                            <a href="">
                                <button class="btn-topic mt-2">Add section</button>
                            </a>
                            <a href="">
                                <button class="btn-topic mt-2">More</button>
                            </a>
                        </div>
                    </div>
               </div>

               <div class="list-group ms-5 mt-3" style="background: white;">
                    <div class="ps-3" style="display: inline-flex;">
                        <h2 class="text-strength " style="font-weight: 100px;">Profile Strength: <strong style="color: black;">Beginner</strong></h2>
                        <a href="" class=" ms-auto me-3"><i class="bi bi-chevron-down"></i></a>
                    </div>
                    <div class="progress ms-3 me-3 mb-3 bg-light">
                        <div class="progress-bar w-25 progress-bar bg-success ps-3">
                        </div>
                    </div>
                </div>

                <div class="list-group ms-5 mt-3" style="background: white;">
                    <div class="ps-3" style="display: inline-flex;">
                        <h2 class="text-strength mt-3" style="color: black;">Strengthen your profile</h2>
                        <nav aria-label="Page navigation example" class="mt-2 ms-auto me-3">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                          </nav>
                    </div>
                    <div class="row promote">
                        <div class="avt-actor col-md-2 ms-3">
                            <a href=""><img class="img-promote" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX///8DBwYAAACqq6sAAwJpamoDCAbd3t78/PwEBgZvcG+wsrFRUlH5+fkICwrh4eHR0dFiYmJGRkbX19fAwMDv7++CgoIzNTQnJydWV1d4eHhMTEzp6emWmJc9Pz6hoqEXFxeur68fHx/IyMguLi6Sk5I3ODcmJiaAgICNjY0QEhHTHP6UAAAHNklEQVR4nO2dfXejKhCH49QYiZG8mr6lsbtNu918/w94Z8Du7T13Ux1AJbvz/JGzPQs4P4ERkYHJRBAEQRAEQRAEQRAEQRAEQRAEQRDiI89z/MF/LHf1Args6t3yo6AxVXwFKSwnZbE+GZNTDibHab3D/JM8WoWG4hFNzbIkSRMOmDrLMOdjMbaAFqoHAK0UmqxYAm16pTTAQzW2iK84PEKqU63R3gzrhAGmN/dEYTUexpbxO2zPWQEorbRWqZHIgQSmCWbVCcBqZDUXmb0BNlCNnUqzPSmhsTNS9cPtbGwpF3jDLphgL0Rj7/b1DY96f4f5sCcm2Blvqbj4POoeFFYAeYvN1sVbVNsNeSnqxfAzuHUBOGAzS1SG3ahwvft5AYB9kbriIcI6vAWtMzTu2cdPrJ5RYqabdhoXKw3kP7EGvYqhWkS/Cjo+f/oE5EUTeMJhlzsllUMeFcuJjPII9nntXRI6VLpTR58b1QcVti56lNX0h5ePuAEa3SioIvM0O3SkiU7v/J/VsztTFOwCWBUS030SuA9Q1L0tKraOOAcaj8I6QFFrW9Q8QFEhmdKARsE0QFFrGt0mQYoKydQ4+SBmTakfhrlZX5M3v93mFKgOA5nFaQ5onLvLbXLm3Z5LcxpQJkE6D6uo8sNMx4uZfMviW+u7T7GwDnBRMF+avIr6Vix91BmWu/vT906vrzTLgnaFgFHU99P9rzlIF8onmv6CtNu0mdaseYsARdlJyOyV/zZqpnYn+ZO5nw3tM0nNjzcdi/plGVr5ZOzlKKSf5dSOgS3cycH++WQbwHrJ744zDTpgu+sTtBPO7AHx6kRzElahUtjgWXP0Q4AWKVuPNLkDJ+Yrc3WkoZN5UYudphLgyPM3U/PU1amCH/sX3s0ZlJf3H0ajPjMHsgVQJ8QBvnqPdXLWkk9mD2DeRTRrhgjbqLaZdpPIv3Xl9PIN6DHQ2zDaaQEoTyXwHNt79v8wn2R3Z/SKVCHdK1Gnmj6seE4MDoJpYFQjGXoN3TXX1voneOjPsMA8NBZvO6b/aefzIpyUvcRK27nMrp873sG00WN8Xw4usgEaycJ7t9TV0b6g1VeksLYmb7p506UdJ1CjvhqJ1nWA6vauOGu6bdzP+v/Cs1kUxogo9EkdB6LQJ3UciEKf1HEgCn1Sx4Eo9EkdB6LQJ3UciEKf1HEgCn1Sx4Eo9EkdB6LQJ3UciEKf1HEgCn1Sx4Eo9EkdB6LwE/nn1Ffyca0s2XWYfaS+Dol53ijMOipcKvu58cUrgmlIyskL6wtp1SxDPkYZcfxbDm/NyumOa4Zo7QZFyMUZVP0bDhsTGdh1fUw+WYGilQ3p2KsOGaS0pljBqqvnODWLg9Nk7EWknWi2b1Bw6lzrKzARcknGi6kfC2Om4sXx13bByTUpRIF1d4Fl+UpN22R1W37/73p71o/ThYyZ6DReS9bT7WUDJtDR/c7ysvpdSANseEuZ0SNVxcnsIOC40Jsbv+B1IfQxRcUdgeUUYaWVYyhTE7vEwv1CSsPcaSnzlNZPO4ajzYHdSt0vpD9C+bgipybEyi2kcAqK2Uq9LuQY9+gTNDkF9h5DHhdyjez8GxTSlV0vzBTodyGpwx4y/w0KmQLdW6kobLXSWSF31HZ1nuY66lAUXubVjNo5aHgd2kivzFvgbX1JF+oalhXMSK9OXJ65CtOz0/zzaJ6m2XOIIdBxT6HRWumkSnkSQbltWzqeQorOpWBps8nnxakn+38Uw+u68dWICmlXDa10Su/6l9yqonf71IRUPzl+5hrN0xD1GVLVtp9wmmQqhTNjqjOgkd4bIy3nZ/qk8MWOE2D2XznP3beYGbOV0s92176v92JnQjlzt++xIyocCFHYktnP0wzCuJ5mCKSV9pd5KERhS2bxNBEgrbS/zEMhClsyi6eJAGml/WUeClHYklk8TQRIK+0v81CIwpbM4mkiQFppf5mHQhS2ZBZPEwHSSvvLPBSisCWzeJoIkFbaX+ahEIUtmcXTRIB/K72KOvRRqMIch9cf5qC9zKcfxt5KzWGJrkYGPJayP7wOvAx4tGh/3EOissxxgXG442H7w+vg2byi9fYqgZvQZoXBrGSswcZIuy2hDndMc394HgAd5qjt/vA/xDvQcen94X8Qe5Aj7/tj9YyNLNMabt3yY08+AEW7a6rF+HaMyovm3DwAj52C6OQnbY4X3Gzd3FVfVNuNeU5obKR7xzJMrd1SDBpKBIC7fc3f1aEv9ndoEd55Gjg7ttGG2S09cPBmpdptY47e0MaLYg2+eYxIqBZpuyFN+2OkidlsKhKsPoUj0mZjIQ8/cXhsjpRVYc7CDYLZ94qMgkWA/ciqBwpgUkmMJ+Z2Py3vawqsRjBbFY0t6DNKparrQWtfkec4OCp365Pp3gNuUdZKYk8R9T5E9CP/cle3hzANzWJ3JXtXCoIgCIIgCIIgCIIgCIIgCIIgCH8G/wAs/HaAabOrfgAAAABJRU5ErkJggg==" alt=""></a>
                        </div>
                        
                        <div class="col-md-9 " style="display: inline;">
                            <span class="name-promote">
                                    <?php
                                        if(isset($_SESSION['isLoginOK'])){
                                            echo "<a class='nav-link' style = 'text-decoration: none; color: #000'>{$_SESSION['user']}</a>";
                                        }
                                    ?>
                                <a href="" style="text-decoration: none; color: #000;">Help hiring managers and old coworkers find you</a>
                            </span>
                            <div class="descrip ">
                                <p style="color: rgb(156, 138, 138); font-size: 12px;"> Add a past position so others can easily find and connect with you </p>
                            </div>
                            <div class="past-position mb-2" style="float: right;">
                                <a href="">
                                    <button class="btn-not mt-2">Not now</button>
                                </a>
                                <a href="">
                                    <button class="btn-topic mt-2 ">Add section</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group my-dashboard ms-5 mt-3" style="background: #dce6f1;">
                    <h2 class="text-strength mt-3 ps-3" style="color: black;">Your Dashboard</h2>
                    <i class="ps-3" style="color: rgb(156, 138, 138) ;">Private to you</i>
                    <div class="list-group col-md-12 bg-white mt-2 ms-3 me-3" style="width: auto;">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="" class="dashboard ms-2">
                                    <span style="font-size: 32px;">0</span>
                                    <p class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;"> Who viewed your profile </p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="dashboard ms-2">
                                    <span style="font-size: 32px;">0</span>
                                    <p class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;"> Article views </p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="dashboard ms-2">
                                    <span style="font-size: 32px;">0</span>
                                    <p class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;"> Search appearances </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-group col-md-12 bg-white m-3" style="width: auto;">
                        <div class="row">
                            <div class="col-md-12 ms-2 mt-2">
                                <a href="" class="dashboard ms-2" style="display: inline-flex;">
                                    <div>
                                        <i style="font-size: 18px; text-align: center; color: rgb(156, 138, 138);" class="bi bi-broadcast"></i>
                                    </div>
                                    <div class="">
                                        <div class="text-mode ms-2" href="">Creator Mode: Off</div>
                                        <div class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;">Get discovered, showcase content on your profile, and get access to creator tools </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ms-2">
                                <a href="" class="dashboard ms-2" style="display: inline-flex;">
                                    <div>
                                        <i style="font-size: 18px; text-align: center; color: rgb(156, 138, 138);" class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="">
                                        <div class="text-mode ms-2" href="">My Network</div>
                                        <p class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;">Manage your connections, events, and interests.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ms-2">
                                <a href="" class="dashboard ms-2" style="display: inline-flex;">
                                    <div>
                                        <i style="font-size: 18px; text-align: center; color: rgb(156, 138, 138);" class="bi bi-bookmark-fill"></i>
                                    </div>
                                    <div class="">
                                        <div class="text-mode ms-2" href="">My items</div>
                                        <p class="ms-2" style="color: rgb(156, 138, 138); font-size: 12px;">Keep track of your jobs, courses and articles.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group my-dashboard ms-5 mt-3" style="background: white;">
                    <div class="row">
                        <div class="past-position mb-2" style="display: inline-flex;">
                            <h2 class="text-strength mt-2 ps-3" style="color: black;">Activity</h2>
                            <a href="Post.php" class="ms-auto me-2" >
                                <button class="btn-not mt-2" style="color: rgb(124, 86, 86);">Start a post</button>
                            </a>
                        </div>
                    </div>
                    <p class="ps-3" style="font-size: 14px ;">Posts you created, shared, or commented on in the last 90 days are displayed here.</p>
                    <hr>
                    <div class="col-md-12 see-act pb-2">
                        <a href="" class="" style="text-decoration: none; color: #000;">
                            See all Activity
                        </a>
                    </div>
                </div>

                <div class="list-group my-dashboard ms-5 mt-3" style="background: white;">
                    <div class="row">
                        <h2 class="text-strength mt-2 ms-3" style="color: black;">Interests</h2>
                    </div>
                    <div class="col-md-6 pb-3">
                        <a class="col-md-2 ms-3" href="" style="text-decoration: none; color: #000;">
                            <img class="avt-friend" src="https://media-exp1.licdn.com/dms/image/C4D03AQHqRRhVsnaziA/profile-displayphoto-shrink_100_100/0/1626063510328?e=1645660800&v=beta&t=3kDguR2rl7aGCMW6BevlHsA7ReK05VlWbKD2dMOsQww" alt="">
                            <span>Bill Gates
                                <span style="color: rgb(96, 131, 128); font-size: 12px">996 Folowers</span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="news col-md-3 ">
                <div class="my-news list-group bg-white">
                    <div class="row mt-2 ms-2 me-2" style="color: rgb(136, 106, 106);">
                        <div class="col-md-12 mb-2" style="display: flex;">
                            <a href="">
                                Edit public profile & URL
                            </a>
                            <i class="bi bi-question-circle-fill ms-auto"></i>
                        </div>
                        <hr>
                    </div>
                    <div class="row mt-2 ms-2 me-2" style="color: rgb(136, 106, 106);">
                        <div class="col-md-12 mb-2" style="display: flex;">
                            <a href="">
                                Add profile in another language
                            </a>
                            <i class="bi bi-question-circle-fill ms-auto"></i>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="my-news sub-group list-group bg-white mt-2">
                    <div class="list-group-item">
                        <div class="row promote">
                            <div style="color: rgb(136, 106, 106);">Promote</div>
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-promote" src="assets/images/Learning.png" alt=""></a>
                            </div>
                            <div class="col-md-9 ms-4" style="display: inline;">
                                <span class="name-promote">
                                    <a href="" style="text-decoration: none; color: #000;">Develop new skills</a>
                                </span>
                                <div class="descrip ">
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;"> Millions of members use LinkedIn Learning. Unlock your free access today.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row promote">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-promote" src="assets/images/Rmit.png" alt=""></a>
                            </div>
                            <div class="col-md-9 ms-4" style="display: inline;">
                                <span class="name-promote">
                                    <a href="" style="text-decoration: none; color: #000;">Study with RMIT Online</a>
                                </span>
                                <div class="descrip ">
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;">  5-Star QS Rated University. Learn From Industry Experts With RMIT Online.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="row promote">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-promote" src="assets/images/Go agile.png" alt=""></a>
                            </div>
                            <div class="col-md-9 ms-4" style="display: inline;">
                                <span class="name-promote">
                                    <a href="" style="text-decoration: none; color: #000;">Go Agile</a>
                                </span>
                                <div class="descrip ">
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;">  Jira Software is free for up to 10 users – get your team started today </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-news sub-group list-group bg-white mt-2">
                    <div class="list-group-item">
                        <div class="row promote">
                            <div style="color: rgb(136, 106, 106);"><i class="bi bi-linkedin" style="color: blue;"></i>Learning</div>
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-promote" src="assets/images/Excel.png" alt=""></a>
                            </div>
                            <div class="col-md-9 ms-4" style="display: inline;">
                                <span class="name-promote">
                                    <a href="" style="text-decoration: none; color: #000;">
                                        Excel Essential Training (Office 365/Microsoft 365)</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color: #f3f2ef;" class="container-fluid pt-3">
        <div class="container pt-3">
            <div class="row  ms-5">
                <p class="ms-3 text-primary">Linked<i class="bi bi-linkedin"></i>
                <div class="col-md-2 ms-3">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">About</a></li>
                        <li><a href="" class="text-decoration-none">Community Guidelines</a></li>
                        <li><a href=""class="text-decoration-none">Privacy & Terms  <i class="bi bi-chevron-down"></i></a></li>
                        <li><a href="" class="text-decoration-none">Sales Solutions</a></li>
                        <li><a href="" class="text-decoration-none">Safety Center</a></li>
                        <p class="mt-3" style="font-size: 12px;">LinkedIn Corporation © 2021</p>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">Accessibility</a></li>
                        <li><a href="" class="text-decoration-none">Careers</a></li>
                        <li><a href="" class="text-decoration-none">Ad Choices</a></li>
                        <li><a href="" class="text-decoration-none">Mobile</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">Talent Solutions</a></li>
                        <li><a href="" class="text-decoration-none">Marketing Solutions</a></li>
                        <li><a href="" class="text-decoration-none">Advertising</a></li>
                        <li><a href="" class="text-decoration-none">Small business</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">
                            <i class="bi bi-question-circle-fill ms-auto"></i>
                            Questions
                        </a></li>
                        <li><a href="" class="text-decoration-none">
                            <i class="bi bi-gear-fill"></i>
                            Manage your account and privacy</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled">
                        <li><a href="" class="text-decoration-none">
                            Select Language
                        </a></li>
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
