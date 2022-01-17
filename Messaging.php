<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Messaging | LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/messaging.css">
</head>

<body>
    <?php
        //Trước khi cho người dùng xâm nhập vào bên trong phải ktra Thẻ Làm việc
        session_start();
        if(!isset($_SESSION['isLoginOK'])){
            header("location:login.php");
        }
    ?>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ms-3" >
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
                            <input type="text" class="form-control" placeholder="Search for jobs, companies..." aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php">
                                <i class="bi bi-house-door-fill" style= "font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Home</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mynetwork.php">
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
                            <a class="nav-link me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle" style="font-size: 18px;"></i>
                                    <div class="text-nav" style="font-style: normal;">Me<i class="bi bi-caret-down-fill"></i>
                                    </div>
                                </i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 240px;">
                                <div class="my-sidebar list-group bg-white">
                                    <div class="feed-identity-module m-2" style="display: inline;">
                                        <a href="Profile.php" class="profile" style="display: inline;">
                                            <img class="my-avartar col-md-3" src="assets/images/my-avartar.png" style="display: inline;">
                                            <span class="identity-name t-black text-center col-md-9">
                                                <!-- <?php
                                                    if(isset($_SESSION['isLoginOK'])){
                                                        echo "<a class='nav-link'>{$_SESSION['isLoginOK']}</a>";
                                                    }
                                                ?> -->
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
    <main class="container-fluid" style="background: #f3f2ef">
        <div class="row" style="height: 24px;">
            <div class="col-md-12"></div>
        </div>
        <div class="container" style="margin-top:20px;">
            <div class="row clearfix">
                <div class="sidebar col-md-7">
                    <div class="card chat-app">
                        <div id="plist" class="people-list">
                            <div>
                                <h6>Messaging</h6>
                            </div>
                            <hr>
                            <ul class="list-unstyled chat-list mt-2 mb-0">
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
                                    </div>
                                </li>
                                <li class="clearfix active">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Aiden Chavez</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Mike Thomas</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Christian Kelly</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago
                                        </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Monica Ward</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                    <div class="about">
                                        <div class="name">Dean Henry</div>
                                        <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                        </a>
                                        <div class="chat-about">
                                            <h6 class="m-b-0">Aiden Chavez</h6>
                                            <small>Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    <li class="clearfix">
                                        <div class="message-data text-right" style="float:right;">
                                            <span class="message-data-time" >10:10 AM, Today</span>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                        </div>
                                        <div class="message other-message float-right"> Hi Aiden, how are you? How is
                                            the project coming along? </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:12 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Are we meeting today?</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <span class="message-data-time">10:15 AM, Today</span>
                                        </div>
                                        <div class="message my-message">Project has been already finished and I have
                                            results to show you.</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-telegram"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter text here...">
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
                    <div class="my-sidebar sub-group list-group bg-white mt-1">
                        <div class="list-group-item">
                            <div class="row promote">
                                <div class="avt-actor  col-md-2">
                                    <a href=""><img class="img-promote"
                                            src="https://media-exp1.licdn.com/dms/image/C4D0EAQH2xCC4Wg_XnQ/rightRail-logo-shrink_100_100/0/1631007489046?e=1640426400&v=beta&t=15JE6k4b02CR221N-W_vzdzDQvdu3D6uYpCRSavo_Wk"
                                            alt=""></a>
                                </div>
                                <div class="col-md-9 ms-4" style="display: inline;">
                                    <span class="name-promote">
                                        <a href="" style="text-decoration: none; color: #000;">Master of Cyber
                                            Security</a>
                                    </span>
                                    <div class="descrip ">
                                        <p style="color: rgb(119, 108, 108); font-size: 12px;"> Developed with UNSW
                                            Canberra at the Australian Defence Force Academy (ADFA) </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row promote">
                                <div class="avt-actor  col-md-2">
                                    <a href=""><img class="img-promote"
                                            src="https://media-exp1.licdn.com/dms/image/C560EAQHsb5Dj3yUo4Q/rightRail-logo-shrink_200_200/0/1630999185456?e=1640426400&v=beta&t=AruWWB0z9lTDSjFF_JKgAlErSYPxWJO8FAdLRFmqxCE"
                                            alt=""></a>
                                </div>
                                <div class="col-md-9 ms-4" style="display: inline;">
                                    <span class="name-promote">
                                        <a href="" style="text-decoration: none; color: #000;">Study with RMIT
                                            Online</a>
                                    </span>
                                    <div class="descrip ">
                                        <p style="color: rgb(119, 108, 108); font-size: 12px;"> 5-Star QS Rated
                                            University. Learn From Industry Experts With RMIT Online. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row promote">
                                <div class="avt-actor  col-md-2">
                                    <a href=""><img class="img-promote"
                                            src="https://media-exp1.licdn.com/dms/image/C560EAQGwD2NY88oWAA/rightRail-logo-shrink_100_100/0/1631005475475?e=1640426400&v=beta&t=wGwvNsdfH7Mr9709aslivtxj7SFG8tctZEAiGBFMdes"
                                            alt=""></a>
                                </div>
                                <div class="col-md-9 ms-4" style="display: inline;">
                                    <span class="name-promote">
                                        <a href="" style="text-decoration: none; color: #000;">Go Agile</a>
                                    </span>
                                    <div class="descrip ">
                                        <p style="color: rgb(119, 108, 108); font-size: 12px;"> Jira Software is free
                                            for up to 10 users – get your team started today </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-sidebar sub-group list-group mt-1">
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
                                <span style="color: rgb(119, 108, 108) ;" class="footer-text">LinkedIn Corporation © 202
                                    </p>
                                </span>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
