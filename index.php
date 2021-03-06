<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LinkedIn: Log In or Sign Up</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"/> 
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="assets/images/logo-Linkedin.png">

  </head>

  <body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white" >
                <div class="container-fluid ms-5">
                    <a class="navbar-brand col-md-5" href="index.php">
                        <button type="button" class="btn btn-white ms-5" style="color: #0a66c2;font-weight: 700; font-size: 25px;">
                                Linked<i class="bi bi-linkedin">
                                </i>
                        </button>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item ms-5 me-2">
                            <a class="nav-link" href="#">
                                <i class="bi bi-compass-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Discover</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">People</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link" href="#">
                                <i class="i bi-collection-play-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Learning</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2 dropdown" style="border-right: 1px solid rgb(238, 221, 221);">
                            <a class="nav-link" href="#">
                                <i class="bi bi-briefcase-fill" style="font-size: 18px;">
                                    <div class="text-nav" style="font-style: normal;">Jobs</div>
                                </i>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a href="signup.php">
                                <button class="btn-signup mt-1" style="color: rgba(0,0,0,.55);">Join Now</button>
                            </a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a href="login.php">
                                <button class="btn-signin text-primary mt-1">Sign In</button>
                            </a>
                        </li>
                    </ul>
                    
                    </div>
            </div>
            </nav>
        </div>
    </header>
<main class="container-fluid" style="margin-top: 68px;">
    <div class="row mt-5 ms-5">
        <section class="col ms-5">
            <h1 class="text-welcome">Welcome to your professional community</h1>
            <div class="col-md-12 mt-5">
                <button type="button" class="btn btn-light btn-lg mb-2 ">
                    <a href="" style="color: black;">Search for a job</a> 
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
            <div class="col-md-12 mt-2">
                <button type="button" class="btn btn-light btn-lg mb-2 ">
                    <a href="" style="color: black;">Find a person you know</a> 
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
            <div class="col-md-12 mt-2">
                <button type="button" class="btn btn-light btn-lg mb-2 ">
                    <a href="" style="color: black;">Learn a new skill</a> 
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </section>
        <div class="col-md">
            <img src="assets/images/main-index.svg" alt=""/>
        </div>
     </div>

    <div class="row mt-5 mb-5 ms-5" style="background: #f3f2ef; padding: 60px 0;">
        <section class="col-md-6 ms-5">
            <h1 class="text-welcome" style="color: black;">Explore topics you are interested in</h1>
        </section>
        <div class="col topic">
            <h2 class="content-topic">CONTENT TOPICS</h2>  
            <div class= "main-topic">
                <a href="">
                    <button class="btn-topic mt-2">See All Topics</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Science and Environment</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Marketing and Advertising</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Sales and Retail</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Technology</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Finance and Economy</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Health</button>
                </a>
                <a href="">
                    <button class="btn-topic mt-2">Buisiness and Management</button>
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-5 ms-5" style="padding: 60px 0;">
        <section class="col-md-6 ms-5">
            <h1 class="text-welcome" style="color: black;">Find the right job or internship for you</h1>
        </section>
        <div class="col topic">
            <h2 class="content-topic">SUGGESTED SEARCHES</h2>  
            <div class= "main-topic">
                <a href="">
                    <button class="btn-type mt-2">Engineering</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Buisiness and Development</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Finance</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Administrative Assistant</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2"> Retail Associate</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Customer Service</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Marketing</button>
                </a>
                <a href="">
                    <button class="btn-type mt-2">Human Resource</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5 ms-5" style="padding: 50px 0; background-color: rgb(241, 236, 229);">
        <section class="col-md-6 ms-5">
            <h1 class="text-welcome" style="color: rgb(163, 96, 33);">Post your job for millions of people to see</h1>
        </section>
        <div class="col topic">
            <div class= "main-topic">
                <a href="" style="align-items: center;">
                    <button class="btn-topic mt-2">Post a Job</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5 ms-5" style="padding: 70px 0;">
        <section class="col-md-6 ms-5">
            <h1 class="text-invite" style="color: #2977c9;">Let the right people know you???re open to work</h1>
            <h1 class="text-invite" style="">With the Open To Work feature, you can privately tell recruiters or publicly share with the LinkedIn community that you are looking for new job opportunities.</h1>
        </section>
        <div class="col topic">
            <div class= "main-topic">
                <img class="img-infor" src="assets/images/work.png" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-5 ms-5" style="padding: 70px 0;">
        <section class="col-md-6 ms-5 connect">
            <div class= "main-topic">
                <img class="img-connect" src="assets/images/connect-people.svg" alt="">
            </div>
            <h2 class="text-connect mt-5">Connect with people who can help</h2>
        </section>
        <section class="col connect">
            <div class= "main-topic">
                <img class="img-connect" src="assets/images/learn-skill.svg" alt="">
            </div>
            <h2 class="text-connect mt-5">Learn the skills you need to succeed</h2>
        </section>
    </div>
	<div class="row mt-4 ms-5" style="padding: 70px 0;">
        <section class="col-md-3 ms-5 mt-5 connect">
            <video class="video-index" src="assets/videos/Let???s Step Forward - LinkedIn.mp4" controls autoplay ></video>
        </section>
        <section class="col-md-8 step" style="background-color: rgb(219, 228, 241);">
            <h2 class="text-step mt-5">Let's step forward</h2>
        </section>
    </div>
</main>
<div class="last-container">
	<h1 class="text-last mt-5">Join your colleagues, classmates, and friends on LinkedIn.</h1>
	<img src="assets/images/footer-index.png" alt="" height="450px" width="100%">
</div>
<footer style="background-color: #faf9f7;" class="mt-3">
	<div class="container pt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md logo-footer">
                    <p>Linked<i class="bi bi-linkedin"></i>
                    </p>
                </div>
            </div>
            <div class="col-md mt-2">
                <h1 class="text-footer">General</h1>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none">Sign Up</a></li>
                    <li><a href="" class="text-decoration-none">Help Center</a></li>
                    <li><a href="" class="text-decoration-none">About</a></li>
                    <li><a href="" class="text-decoration-none">Press</a></li>
                    <li><a href="" class="text-decoration-none">Blog</a></li>
                    <li><a href="" class="text-decoration-none">Careers</a></li>
                    <li><a href="" class="text-decoration-none">Developers</a></li>
                </ul>
            </div>
            <div class="col-md mt-2">
                <h1 class="text-footer">Browse LinkedIn</h1>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none">Learning</a></li>
                    <li><a href="" class="text-decoration-none">Jobs</a></li>
                    <li><a href="" class="text-decoration-none">Salary</a></li>
                    <li><a href="" class="text-decoration-none">Mobile</a></li>
                    <li><a href="" class="text-decoration-none">Services</a></li>
                    <li><a href="" class="text-decoration-none">Products</a></li>
                </ul>
            </div>
            <div class="col-md mt-2">
                <h1 class="text-footer">Business Solutions</h1>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none">Talent</a></li>
                    <li><a href="" class="text-decoration-none">Marketing</a></li>
                    <li><a href="" class="text-decoration-none">Sales</a></li>
                    <li><a href="" class="text-decoration-none">Learning</a></li>
                </ul>
            </div>
            <div class="col-md mt-2">
                <h1 class="text-footer">Directories</h1>
                <ul class="list-unstyled">
                    <li><a href="" class="text-decoration-none link-dark">Menbers</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Jobs</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Companies</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Salaries</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Featured</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Learning</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Posts</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Articles</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Schools</a></li>
                    <li><a href="" class="text-decoration-none link-dark">News</a></li>
                    <li><a href="" class="text-decoration-none link-dark">News Letters</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Services</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Interview Prep</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Products</a></li>
                    <li><a href="" class="text-decoration-none link-dark">Content Topics</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    <div class="mt-2" style="text-align: center;">
        <div class="col-md ms-5 me-5">
            <ul class="list-footer">
                <li><p style="margin-top: 15px; display: inline-flex;">Linked
                    <i class="bi bi-linkedin"></i>
                    <span style="color: rgb(119, 108, 108) ;" class="footer-text">?? 2021 </span>
                    </p>
                </li>
                <li><a href="" class="text-decoration-none link-dark">About</a></li>
                <li><a href="" class="text-decoration-none link-dark">Acessibility</a></li>
                <li><a href="" class="text-decoration-none link-dark">User Agreement</a></li>
                <li><a href="" class="text-decoration-none link-dark">Privacy Policy</a></li>
                <li><a href="" class="text-decoration-none link-dark">Cookie Policy</a></li>
                <li><a href="" class="text-decoration-none link-dark">Copyright Policy</a></li>
                <li><a href="" class="text-decoration-none link-dark">Brand Policy</a></li>
                <li><a href="" class="text-decoration-none link-dark">Guest Controls</a></li>
                <li><a href="" class="text-decoration-none link-dark">Community Guidelines</a></li>
                <li><a href="" class="text-decoration-none link-dark">Guest Controls</a></li>
                <li><a href="" class="text-decoration-none link-dark">Language</a></li>
            </ul>
        </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
