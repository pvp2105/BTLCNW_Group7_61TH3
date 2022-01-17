<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs | LinkedIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/jobs.css">
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
                                    <a href="index.php" class="signout text-decoration-none">
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
        <div class="row" style="height: 24px">
            <div class="col-md-12"></div>
        </div>
        <div class="main-about row ms-5 me-5 ps-5">
            <div class="sidebar col-md-2 ps-2">
                <div class="my-sidebar list-group bg-white">
                    <div class="sidebar_categories">
                        <div class="sidebar_category">
                            <i class="bi bi-bookmark-fill"></i>
                            <span>My Jobs</span>
                        </div>
                        <div class="sidebar_category">
                            </i><i class="bi bi-bell-fill"></i>
                            <span>Job Alerts</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-cash"></i>
                            <span>Salary</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-calendar2-check"></i>
                            <span>Skill Assessments</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Interview Prep</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-file-earmark"></i>
                            <span>Resume Builder</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-play-btn-fill"></i>
                            <span>Job Seeker Guidance</span>
                        </div>
                        <div class="sidebar_category">
                            <i class="bi bi-gear-fill"></i>
                            <span>Application Settings</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main col-md-5">
                <div class="post list-group bg-white row ">
                    <div class="col-md-12 m-2">
                        <div class="Text">
                            <h3 class="Start">Recent job searches</h3>
                            <p class="Start">Clear</p>
                        </div>
                        <div style="margin-top: 15px;">
                            <span>hfush</span>
                            <span style="color: green;">(0 new)</span>
                            <p style="opacity: 0.5;">Vietnam</p>
                        </div>
                    </div>
                </div>
                <div class="list-group bg-white row mt-2 mb-4">
                    <div class="Text_main" style="margin-top: 15px;margin-bottom: 15px;">
                        <h3>Similar to a job you saved less than ago</h3>
                        <p style="opacity: 0.5;">Guest Service Specialist at JLL</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img1_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img2_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img3_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img4_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img5_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row company-job m-2">
                            <div class="avt-actor col-md-2">
                                <a href=""><img class="img-actor" src="assets/images/img6_job.jpeg" alt=""
                                        style="width:60px"></a>
                            </div>
                            <div class="col-md-10">
                                <span>
                                    <a href="" style="text-decoration: none; color: rgb(37, 15, 235);">Event
                                        Coordinator</a>
                                </span>
                                <span class="img-company-job"><i class="bi bi-bookmark"
                                        style="margin-left: 260px;"></i></span>
                                <div class="descrip">
                                    <div style="opacity: 0.5;">Gamuda Land (Vietnam)</div>
                                    <div style="opacity: 0.5;">Tân Phú, Ho Chi Minh City, Vietnam (Hybrid)</div>
                                    <div style="opacity: 0.5;">Actively recruiting</div>
                                    <div>
                                        <span style="opacity: 0.5;">1 week ago . </span>
                                        <span style="color: green;">7 applicants . </span>
                                        <span><i class="bi bi-linkedin" style="color: blue;"></i> Apply easily</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news col-md-3 ">
                <div class="my-sidebar list-group bg-white">
                    <div class="list-group-item">
                        <div class="col-md-12 m-2">
                            <h4>Job update</h4>
                        </div>
                        <div class="list-group-item">
                            <div class="img-job-update"><img src="assets/images/img8_job.jpeg" alt="" style="width:100%"></div>
                            <div class="text">
                                <h5>Guest Seevice Specialist</h5>
                            </div>
                            <div>
                                <span>JLL</span>
                                <span style="opacity: 0.5;"> JLL</span>
                                <div style="margin-left: 25px;opacity: 0.5;">Hanoi(On-site)</div>
                            </div>
                            <div>
                                <span style="opacity: 0.5;">Posted </span>
                                <span>1w ago</span>
                                <span style="color: green;">. 4 applicant</span>
                            </div>
                            <div><i class="bi bi-bookmark-fill"></i> Saved less than a day ago</div>
                            <div><button class="btn btn-primary" style="width:100%;">
                                <h5>Apply</h5>
                            </button></div>
                        </div>
                    </div>
                </div>
                <div class="my-sidebar list-group bg-white mt-2">

                    <div class="list-group-item">
                        <div class="col-md-12 m-2">
                            <h5>Ways to prepare</h5>
                        </div>
                        <div class="list-group-item">
                            <div class="row company-job-update">
                                <div class="col-md-2">
                                    
                                </div>
                                <div class="col-md-10">
                                    <h5 style="color: blue;">Best practices</h5>
                                    <span>Get the most out of your job search and start  out to recruiters</span>
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
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
