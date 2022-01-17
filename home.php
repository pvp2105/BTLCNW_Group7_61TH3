<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed | LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/home.css" />
	<link rel="icon" href="assets/images/logo-Linkedin.png">
</head>

<body>
    <?php
        //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
        session_start();
        if(!isset($_SESSION['isLoginOK'])){
            header("location:login.php");
        }
    ?>
    <?php
        include 'dbConfig.php';
        $id = $_SESSION['ma_nguoidung'];
        $sql = "Select * from db_account where ma_nguoidung = '$id' ";
                            
        $result = mysqli_query($db,$sql);
            $user = mysqli_fetch_array($result);
        mysqli_close($db);
    ?>  
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ms-3">
                <div class="container-fluid ms-5">
                    <a class="navbar-brand ms-5" href="home.php">
                        <button type="button" class="btn btn-primary ms-5">
                            <i class="bi bi-linkedin" style="color: rgb(248, 247, 247);">
                            </i>
                        </button>
                    </a>
                    <div class="search" style="display: inline;">
                        <div style="display: inline-flex;">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search for jobs, companies..."
                                aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php">
                                    <i class="bi bi-house-door-fill" style="font-size: 18px;">
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
                                <a class="nav-link me-2" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle" style="font-size: 18px;"></i>
                                    <div class="text-nav" style="font-style: normal;">Me<i
                                            class="bi bi-caret-down-fill"></i>
                                    </div>
                                    </i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 240px;">
                                    <div class="my-sidebar list-group bg-white">
                                        <div class="feed-identity-module m-2 text-center" style="display: inline;">
                                            <a href="Profile.php" class="profile" style="display: inline;">
                                                <img class="img-fluid rounded-circle img-home col-md-3" style = "width: 115px; height: 115px;" src ="uploads/<?php echo $user['avartar']; ?>">
                                                <span class="identity-name t-black text-center col-md-8">
                                                    <?php
                                                        if(isset($_SESSION['isLoginOK'])){
                                                            echo "<a class='nav-link' style = 'color: #000'>{$_SESSION['user']}</a>";
                                                        }
                                                    ?>
                                                </span>
                                            </a>
                                            <div class="list-group-item mt-2"
                                                style="border-radius: 16px; color: #0a66c2;">
                                                <a href="Profile.php" class="" style="text-decoration: none;">
                                                    <div class="row text-align-center feed-identity">
                                                        <span class="text-center"
                                                            style="color: blue; font-size: 14px;">View Profile</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <p style="color: black;">Account</p>
                                        <a class="text-decoration-none" href=""
                                            style="font-size: 14px; color: #7e6565;">
                                            <i class="bi bi-gem bg-warning"></i>
                                            Try Premium for free
                                        </a>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><a href="" class="text-decoration-none">Settings &
                                                    Privacy</a></li>
                                            <li class="mt-2"><a href="" class="text-decoration-none">Help</a></li>
                                            <li class="mt-2"><a href="" class="text-decoration-none">Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-group-item">
                                        <p style="color: black;">Manage</p>
                                        <ul class="list-unstyled">
                                            <li class="mt-2"><a href="" class="text-decoration-none">Posts &
                                                    Activity</a></li>
                                            <li class="mt-2"><a href="" class="text-decoration-none">Jobs posting
                                                    Account</a></li>
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
                                    <div class="text-nav" style="font-style: normal;">Work<i
                                            class="bi bi-caret-down-fill"></i></div>
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
            <div class="sidebar col-md-2 ps-2">
                <div class="my-sidebar list-group bg-white">
                    <div class="feed-identity-module">
                        <a href="Profile.php" class="profile">
                            <div class="avartar col-md-12 text-center"
                                style="background-image: url('https://static-exp1.licdn.com/sc/h/55k1z8997gh8dwtihm11aajyq');">
                                <img class="img-fluid rounded-circle img-home col-md-5 mt-3" style = "width: 100px; height: 100px;" src ="uploads/<?php echo $user['avartar']; ?>">
                            </div>
                            <p class="identity-name mt-3 t-black text-center">
                                <?php
                                    if(isset($_SESSION['isLoginOK'])){
                                        echo "<a class='nav-link' style = 'color: #000'>{$_SESSION['user']}</a>";
                                    }
                                ?>
                            </p>
                        </a>
                        <p class="identity-headline text-center">--</p>
                    </div>

                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <div style="color: rgb(119, 108, 108)">Connections</div>
                                    <div>Grow your network</div>
                                </div>
                                <i class="col-md-2 bi bi-person-plus-fill"></i>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <div style="color: rgb(119, 108, 108)">
                                        Access exclusive tools & insights
                                    </div>
                                    <div class="premium">
                                        <i class="bi bi-gem bg-warning"></i>
                                        Try Premium for free
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left feed-module">
                                <div class="col-md-10 connection p-2">
                                    <i class="bi bi-bookmark-fill"></i>
                                    <span>My items</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="my-sidebar sub-group list-group bg-white mt-1">
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-left">
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: blue;">Groups</span>
                                </div>
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: blue;">Events</span>
                                    <button class=" bt-event-plus"><i class="bi bi-plus-lg float-end"
                                            style="font-size: 15px;"></i></button>
                                </div>
                                <div class="col-md-10 sidebar-more p-2">
                                    <span style="color: blue;">Followed Hashtags</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-group-item">
                        <a href="#" class="list-identity">
                            <div class="row text-align-center feed-module">
                                <span class="text-center" style="color: rgb(119, 108, 108)">Discover More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="main col-md-5 ms-3">
                <div class="post list-group bg-white row ">
                    <div class="col-md-12 m-2">
                        <span class="start-post" style="text: center;">
                            <a href="Profile.php">
                                <img class="img-fluid rounded-circle img-home mt-3" style = "width: 80px; height: 80px;" src ="uploads/<?php echo $user['avartar']; ?>">
                            </a>
                        </span>
                        <span class="ms-2">
                            <button type="button" class="btn-start btn-block btn-lg col-md-9">
                                <a href="Post.php" style="text-decoration: none">
                                    <p class="mt-3"
                                        style="text-align: left; font-size: 14px; color:rgb(124, 107, 107) "> Start a
                                        posts</p>

                                </a>
                            </button>
                        </span>
                    </div>
                    <div class="col-md-12 m-2">
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-card-image text-primary"></i>
                                <div class="ms-3">Photos</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-youtube text-success"></i>
                                <div class="ms-3">Video</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-calendar-date text-warning"></i>
                                <div class="ms-3">Events</div>
                            </button>
                        </span>
                        <span class="share-box col-md-2 ms-3">
                            <button class="" style="background: white; border: white; display: inline-flex;">
                                <i class="bi bi-text-indent-left text-danger"></i>
                                <div class="ms-3">Write article</div>
                            </button>
                        </span>
                    </div>
                </div>
                <hr>

                <div class="col-md-12">
                    <?php
                        // Include the database configuration file
                        include 'dbConfig.php';
                        // Get images from the database
                        $result = mysqli_query($db, "SELECT * FROM mypost ORDER BY timepost DESC");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $imageURL = 'uploads/'.$row["img"];
                    ?>
                    <div class="feed-share list-group bg-white row mb-3">
                        <div class="row mt-3">
                            <div class="avt-actor col-md-3 ms-1">
                                <a href="">
                                    <img class="img-fluid rounded-circle img-home col-md-3 mt-3" style = "width: 120px; height: 100px;" src ="uploads/<?php echo $user['avartar']; ?>">
                                </a>
                            </div>
                            <div class="col-md-8">

                                <div class="nav-item dropdown" style="float: right">
                                    <a class="nav-link me-2" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #000">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 240px;">
                                        <div class="my-sidebar list-group bg-white ms-2">
                                            <a href="deletePost.php?id=<?php echo $row['idPost']; ?>"
                                                style="text-decoration: none; color: #000">
                                                <i class="bi bi-trash-fill"></i>
                                                <span class="">Delete Post</span>
                                            </a>
                                        </div>
                                        <hr>
                                        <div class="my-sidebar list-group bg-white ms-2">
                                            <a href="editPost.php?id=<?php echo $row['idPost']; ?>"
                                                style="text-decoration: none; color: #000">
                                                <i class="bi bi-pencil-fill"></i>
                                                <span class="">Edit Post</span>
                                            </a>
                                        </div>

                                    </ul>
                                </div>

                                <div>
                                    <?php
                                        if(isset($_SESSION['isLoginOK'])){
                                            echo "<a class='nav-link' style = 'color: #000'>{$_SESSION['user']}</a>";
                                        }
                                    ?>
                                </div>
                                
                                <div class="ms-3">
                                    <?php echo $row['timepost']; ?>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="ms-2 mb-2">
                            <?php echo $row['caption']; ?>
                        </div>
                        <img src="<?php echo $imageURL; ?>" alt="" />
                        <div class="mb-2"></div>
                        <div class="row status mt-1 mb-1">
                            <span>

                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                <i class="bi bi-lightbulb-fill " style="color: rgb(252, 252, 13);"> </i>
                                <span style="color: rgb(157, 182, 180);">0</span>
                                <a href="#" class="cout-cmt">0 comment</a>

                            </span>
                            <hr>
                        </div>

                        <div class="row-feel mb-2">
                            <span>
                                <button href="" id="btlike1" class="btn-status">
                                    <i class="bi bi-hand-thumbs-up-fill"></i> Like
                                </button>
                                <span class="row-like">
                                    <span>
                                        <button href="" class="btn-sublike"
                                            onclick="document.getElementById('btlike1').style.color='blue'">
                                            <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                        </button>
                                    </span>
                                    <span>
                                        <button href="" class="btn-sublike">
                                            <i class="bi bi-emoji-heart-eyes-fill" style="color: rgb(10, 233, 40);"></i>
                                        </button>
                                    </span>
                                    <span>
                                        <button href="" class="btn-sublike">
                                            <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                        </button>
                                    </span>
                                    <span>
                                        <button href="" class="btn-sublike">
                                            <i class="bi bi-lightbulb-fill" style="color: rgb(252, 252, 13);"></i>
                                        </button>
                                    </span>
                                </span>
                            </span>
                            <span>
                                <button href="" class="btn-status">
                                    <i class="bi bi-chat-left-text"></i> Comment
                                </button>
                            </span>
                            <span>
                                <button href="" class="btn-status">
                                    <i class="bi bi-arrow-90deg-right"></i> Share
                                </button>
                            </span>
                            <span>
                                <button href="" class="btn-status">
                                    <i class="bi bi-send-fill"></i> Send
                                </button>
                            </span>
                            </span>
                        </div>


                        <form class="row comment mb-2" action="process-add-comment.php" method="Post">
                            <div class="col-md-9 ms-2 mt-2">
                                <input type="text" id="inputCmt" name="txtCmt" class="form-control form-control-lg"
                                    style=" border-radius: 25px;" placeholder="Add a Comment...">
                            </div>
                            <button class="col-md-2 summitCmt mb-2 mt-1" type="submit"
                                style=" background-color: #fff;border: #fff;">
                                <i class="bi bi-card-text" style="font-size: 35px"></i>
                            </button>
                        </form>


                        <div class="row post-comment">
                            <?php
                                //Bước 1: Kết nối Database Server
                                $conn = mysqli_connect('localhost' , 'root', '', 'linkedin');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui Lòng kiểm tra lại các thông tin máy chủ");
                                }
                                //Bước 02: Thực hiện truy vấn
                                $sql = "Select * from mycomment";
                                $result = mysqli_query($conn,$sql);
                                //Bước 03: Xử lý kết quả truy vấn
                                if (mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>

                            <div class="avt-actor col-md-2 ms-1  mb-3">
                                <a href="">
                                    <img class="img-fluid rounded-circle img-home col-md-3 mt-3" style = "width: 80px; height: 80px;" src ="uploads/<?php echo $user['avartar']; ?>">
                                </a>
                            </div>
                            <div class="col-md-8 mb-3">
                                <div style="font-weight:600">
                                    <?php echo $row['comment']; ?>
                                </div>
                                <div style="color: #606060">
                                    <?php echo $row['timeCmt']; ?>
                                </div>
                            </div>
                            <a href="deleteCmt.php?id=<?php echo $row['idCmt']; ?>"
                                style="text-decoration: none; color: #000" class="col-md-1 mt-2">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                            <?php
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                    <?php }
                        }else{ ?>
                    <!-- <p>No image(s) found...</p> -->
                    <?php } ?>


                </div>


                <div class="feed-share list-group bg-white row mt-3">
                    <div class="col-md-12 m-2 ">
                        <div class="row share-actor ">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/Bill Gate.png" alt=""></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: #000;">Bill Gates</a>
                                    <i class="bi bi-linkedin" style="color: blue"></i></a>
                                    <a href="" style="text-decoration: none; color: rgb(119, 108, 108);">Following</a>
                                </span>
                                <div class="descrip ">
                                    <p>Co-chair, Bill & Melinda Gates Foundation</p>
                                </div>
                            </div>
                            <div class="row cap-post">
                                <p>Understanding how the connections in our brains give rise to consciousness and our
                                    ability to learn may help lead to great breakthroughs in the way we solve the
                                    world’s hardest problems.</p>
                            </div>
                            <div class="row content-post">
                                <video src="assets/Videos/The Truck- Bill Gates.mp4" autoplay controls></video>
                            </div>
                            <div class="row status mt-1 mb-1">
                                <span>
                                    <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                    <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                    <i class="bi bi-lightbulb-fill " style="color: rgb(252, 252, 13);"> </i>
                                    <span style="color: rgb(157, 182, 180);">12656</span>
                                    <a href="#" class="cout-cmt">442 comment</a>
                                </span>
                                <hr>
                            </div>
                            <div class="row-feel">
                                <span>
                                    <button href="" id="btlike1" class="btn-status">
                                        <i class="bi bi-hand-thumbs-up-fill"></i> Like
                                    </button>
                                    <span class="row-like">
                                        <span>
                                            <button href="" class="btn-sublike"
                                                onclick="document.getElementById('btlike1').style.color='blue'">
                                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-emoji-heart-eyes-fill"
                                                    style="color: rgb(10, 233, 40);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-lightbulb-fill" style="color: rgb(252, 252, 13);"></i>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-chat-left-text"></i> Comment
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-arrow-90deg-right"></i> Share
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-send-fill"></i> Send
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feed-share list-group bg-white row mt-2">
                    <div class="col-md-12 m-2 ">
                        <p style="font-size: 14px; color: rgb(124, 107, 107);">
                            Add to your Friends
                            <hr>
                        </p>
                        <div class="list-friends mt-2">
                            <a class="col-md-2" href="" style="text-decoration: none; color: #000;">
                                <img class="avt-friend"
                                    src="https://media-exp1.licdn.com/dms/image/C560BAQFkDzx_7dqq3A/company-logo_100_100/0/1519902995023?e=1648684800&v=beta&t=oVdH-VqT_ge8AGBvJBVaiZjH8_d3ehNrrsEHT60HTVk"
                                    alt="">
                                <span>Spotify
                                    <span style="color: rgb(96, 131, 128); font-size: 12px">8,996 Folowers</span>
                                </span>
                            </a>
                            <span style="float: right; line-height: 40px; margin-right: 5px;">
                                <button href="" id="follow1" class="btn-status" onclick="followfunc1(this, 'green')"
                                    style="color: blue;">
                                    <i class="bi bi-plus-circle"></i> Follow
                                </button>
                                <script>
                                    function followfunc1(getElementById, clr) {
                                        document.getElementById("follow1").innerHTML = "√  Following";
                                        getElementById.style.color = clr;
                                    }
                                </script>
                            </span>

                            <hr>
                        </div>
                        <div class="list-friends mt-2">
                            <a class="col-md-2" href="" style="text-decoration: none; color: #000;">
                                <img class="avt-friend"
                                    src="https://media-exp1.licdn.com/dms/image/C560BAQFckBxRnPg53Q/company-logo_200_200/0/1561999707114?e=1648684800&v=beta&t=MJSvvgGEZdc9UyxIe0OPcx16Wpblipu7Fc8u96nz6rU"
                                    alt="">
                                <span>Nike
                                    <span style="color: rgb(96, 131, 128); font-size: 12px">996 Folowers</span>
                                </span>
                            </a>
                            <span style="float: right; line-height: 40px; margin-right: 5px;">
                                <button href="" id="follow2" class="btn-status" onclick="followfunc2(this, 'green')"
                                    style="color: blue;">
                                    <i class="bi bi-plus-circle"></i> Follow
                                </button>
                                <script>
                                    function followfunc2(getElementById, clr) {
                                        document.getElementById("follow2").innerHTML = "√  Following";
                                        getElementById.style.color = clr;
                                    }
                                </script>
                            </span>
                            <hr>
                        </div>
                        <div class="list-friends mt-2">
                            <a class="col-md-2" href="" style="text-decoration: none; color: #000;">
                                <img class="avt-friend"
                                    src="https://media-exp1.licdn.com/dms/image/C4E0BAQEVb0ZISWk8vQ/company-logo_100_100/0/1519896425167?e=1648684800&v=beta&t=o3QNgA9vjTOVQvMsyggm5u2vCQJMpy6koaHtMt_xaf0"
                                    alt="">
                                <span>Netflix</span>
                            </a>
                            <span style="float: right; line-height: 40px; margin-right: 5px;">
                                <button href="" id="follow3" class="btn-status" onclick="followfunc3(this, 'green')"
                                    style="color: blue;">
                                    <i class="bi bi-plus-circle"></i> Follow
                                </button>
                                <script>
                                    function followfunc3(getElementById, clr) {
                                        document.getElementById("follow3").innerHTML = "√  Following";
                                        getElementById.style.color = clr;
                                    }
                                </script>
                            </span>
                        </div>
                        <div class="list-group-item mt-2">
                            <a href="#" class="list-identity">
                                <div class="row text-align-center feed-module">
                                    <span class="text-center" style="color: blue;">See More...</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="feed-share list-group bg-white row mt-2">
                    <div class="col-md-12 m-2 ">
                        <div class="row share-actor">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-actor"
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQHTvZwCx4p2Qg/company-logo_100_100/0/1612205615891?e=1648684800&v=beta&t=Bg7klz_e_AdmdMcrIHDuo84ROCuuF5FWRaJ14MSJMmA"
                                        alt=""></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: #000;">Amazon</a>
                                    <i class="bi bi-linkedin" style="color: blue"></i></a>
                                    <a href="" style="text-decoration: none; color: rgb(119, 108, 108);">Following</a>
                                </span>
                                <div class="descrip">
                                    <p>Co-chair, Bill & Melinda Gates Foundation</p>
                                </div>
                                <div class="descrip">
                                    <p>23,106,999 Follower</p>
                                </div>
                            </div>
                            <div class="row cap-post">
                                <p>Seema Degwekar is a Senior Principal Engineer, and has been at Amazon for 13 years.
                                    Learn more about her time at Amazon and the Principal Engineering Community here:
                                    <a href="https://amzn.to/2ZE6hKC">https://amzn.to/2ZE6hKC</a>
                                </p>
                            </div>
                            <div class="row content-post">
                                <img src="https://media-exp1.licdn.com/dms/image/C5622AQG6jeV2MeteGg/feedshare-shrink_800/0/1640012403280?e=1643241600&v=beta&t=hKgvRtIfpWyI7fwM48UvwnRTvS6tTPa3xkaEaXVWuyw"
                                    alt="">
                            </div>
                            <div class="row status mt-1 mb-1">
                                <span>
                                    <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                    <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                    <i class="bi bi-lightbulb-fill " style="color: rgb(252, 252, 13);"> </i>
                                    <span style="color: rgb(157, 182, 180);">1656</span>
                                    <a href="#" class="cout-cmt">102 comment</a>
                                </span>
                                <hr>
                            </div>
                            <div class="row-feel">
                                <span>
                                    <button href="" id="btlike2" class="btn-status">
                                        <i class="bi bi-hand-thumbs-up-fill"></i> Like
                                    </button>
                                    <span class="row-like">
                                        <span>
                                            <button href="" class="btn-sublike"
                                                onclick="document.getElementById('btlike2').style.color='blue'">
                                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-emoji-heart-eyes-fill"
                                                    style="color: rgb(10, 233, 40);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-lightbulb-fill" style="color: rgb(252, 252, 13);"></i>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-chat-left-text"></i> Comment
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-arrow-90deg-right"></i> Share
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-send-fill"></i> Send
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feed-share list-group bg-white row mt-2 mb-5">
                    <div class="col-md-12 m-2 ">
                        <div class="row share-actor">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-actor"
                                        src="https://media-exp1.licdn.com/dms/image/C4D03AQHqRRhVsnaziA/profile-displayphoto-shrink_100_100/0/1626063510328?e=1645660800&v=beta&t=3kDguR2rl7aGCMW6BevlHsA7ReK05VlWbKD2dMOsQww"
                                        alt=""></a>
                            </div>
                            <div class="col-md-10">
                                <span class="">
                                    <a class="name-actor" href="" style="text-decoration: none; color: #000;">Bill
                                        Gates</a>
                                    <i class="bi bi-linkedin" style="color: blue"></i></a>
                                    <a href="" style="text-decoration: none; color: rgb(119, 108, 108);">Following</a>
                                </span>
                                <div class="descrip ">
                                    <p>Co-chair, Bill & Melinda Gates Foundation</p>
                                </div>
                            </div>
                            <div class="row cap-post">
                                <p>One of my favorite holiday traditions is sharing books with family and friends. Here
                                    are 5 books I loved reading this year.</p>
                            </div>
                            <div class="row content-post">
                                <a href="#" class="list-identity">
                                    <div class="col-md-12 feed-module pb-2"
                                        style="background-color: rgb(253, 242, 242);">
                                        <img style="width: 100%; padding: auto;" src="assets/images/bill-gate books.png"
                                            alt="">
                                        <span>5 books I loved reading this year</span>
                                    </div>
                                </a>
                            </div>
                            <div class="row status mt-1 mb-1">
                                <span>
                                    <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                    <i class="bi bi-heart-fill" style="color: rgb(221, 30, 30);"></i>
                                    <i class="bi bi-lightbulb-fill " style="color: rgb(252, 252, 13);"> </i>
                                    <span style="color: rgb(157, 182, 180);">12656</span>
                                    <a href="#" class="cout-cmt">442 comment</a>
                                </span>
                                <hr>
                            </div>
                            <div class="row-feel">
                                <span>
                                    <button href="" id="btlike3" class="btn-status">
                                        <i class="bi bi-hand-thumbs-up-fill"></i> Like
                                    </button>
                                    <span class="row-like">
                                        <span>
                                            <button href="" class="btn-sublike"
                                                onclick="document.getElementById('btlike3').style.color='blue'">
                                                <i class="bi bi-hand-thumbs-up-fill" style="color: blue;"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-emoji-heart-eyes-fill"
                                                    style="color: rgb(10, 233, 40);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-heart-fill" style="color: rgb(180, 21, 21);"></i>
                                            </button>
                                        </span>
                                        <span>
                                            <button href="" class="btn-sublike">
                                                <i class="bi bi-lightbulb-fill" style="color: rgb(252, 252, 13);"></i>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-chat-left-text"></i> Comment
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-arrow-90deg-right"></i> Share
                                    </button>
                                </span>
                                <span>
                                    <button href="" class="btn-status">
                                        <i class="bi bi-send-fill"></i> Send
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news col-md-3 ">
                <div class="my-sidebar list-group bg-white">
                    <div class="row mt-2 ms-2 me-2">
                        <p>LinkedIn News <i class="bi bi-info-square-fill" style="float: right;"></i></p>
                    </div>
                    <div class="row-news">
                        <ul>
                            <li class="content-new m-2">
                                <a href="">Big biz fails slavery benchmark</a>
                                <p style="color: rgb(96, 131, 128); font-size: 12px">11d ago - 1,789 readers</p>
                            </li>
                            <li class="content-new m-2">
                                <a href="">Big biz fails slavery benchmark</a>
                                <p style="color: rgb(96, 131, 128); font-size: 12px">11d ago - 1,789 readers</p>
                            </li>
                            <li class="content-new m-2">
                                <a href="">Big biz fails slavery benchmark</a>
                                <p style="color: rgb(96, 131, 128); font-size: 12px">11d ago - 1,789 readers</p>
                            </li>
                            <li class="content-new m-2">
                                <a href="">Big biz fails slavery benchmark</a>
                                <p style="color: rgb(96, 131, 128); font-size: 12px">11d ago - 1,789 readers</p>
                            </li>
                            <li class="content-new m-2">
                                <a href="">Big biz fails slavery benchmark</a>
                                <p style="color: rgb(96, 131, 128); font-size: 12px">11d ago - 1,789 readers</p>
                            </li>
                        </ul>
                        <a href="#" class="list-identity">
                            <div class="row text-align-center feed-module">
                                <span class="text-center" style="color: rgb(119, 108, 108)">Discover More...</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="my-sidebar sub-group list-group bg-white mt-2">
                    <div class="list-group-item">
                        <div class="row promote">
                            <div class="avt-actor  col-md-2">
                                <a href=""><img class="img-promote" src="assets/images/Learning.png" alt=""></a>
                            </div>
                            <div class="col-md-9 ms-4" style="display: inline;">
                                <span class="name-promote">
                                    <a href="" style="text-decoration: none; color: #000;">Master of Cyber Security</a>
                                </span>
                                <div class="descrip ">
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;"> Developed with UNSW Canberra
                                        at the Australian Defence Force Academy (ADFA) </p>
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
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;"> 5-Star QS Rated University.
                                        Learn From Industry Experts With RMIT Online. </p>
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
                                    <p style="color: rgb(119, 108, 108); font-size: 12px;"> Jira Software is free for up
                                        to 10 users – get your team started today </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="footer-content mt-2">
                            <div class="footer-text"><a href="">About</a></div>
                            <div class="footer-text"><a href="">Accessibility</a></div>
                            <div class="footer-text"><a href="">Help Center</a></div>
                            <div class="footer-text"><a href="">Privacy & Term<i class="bi bi-chevron-down"></i></a>
                            </div>
                            <div class="footer-text"><a href="">Ad Choies</a></div>
                            <div class="footer-text"><a href="">Advertising</a></div>
                            <div class="footer-text"><a href="">Buiness Services<i class="bi bi-chevron-down"></i></a>
                            </div>
                            <div class="footer-text"><a href="">Get the LinedIn App</a></div>
                            <div class="footer-text"><a href="">More</a></div>
                        </div>

                        <div class="footer-content">
                            <span class="footer-last_text">
                                <p>Linked<i class="bi bi-linkedin"></i>
                            </span>
                            <span style="color: rgb(119, 108, 108) ;" class="footer-text">LinkedIn Corporation © 2021
                                </p>
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
