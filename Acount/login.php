<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
  <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" >
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <button type="button" class="btn btn-white ms-5" style="color: #0a66c2;font-weight: 700; font-size: 25px;">
                            Linked<i class="bi bi-linkedin">
                            </i>
                    </button>
                </a>
        </div>
        </nav>
    </div>
	</header>
	<main>
		<section style="margin-top: 40px;">
			<div class="container py-5">
			  <div class="row d-flex justify-content-center align-items-center">
				<div class="col-12 col-md-8 col-lg-6 col-xl-4">
				  <form class="form-signin" action="process-login.php" method = "post" style="border-radius: 8px; box-shadow: 0 4px 12px #00000026;">
						<div class="card-body p-5 text-center">
			
						<h3 class="mb-1">Sign in</h3>
						<p class="text-black mb-3">Stay updated on your professional world</p>
						<div class="form-outline mb-4">
							<input type="email" id="inputEmail" name="txtEmail" class="form-control form-control-lg"  placeholder="Email address" required autofocus>
						</div>
			
						<div class="form-outline mb-2">
							<input type="password" id="inputPassword" name="txtPass" class="form-control form-control-lg" placeholder="Password"  required >
						</div>
						<?php
                        if(isset($_GET['error'])){
                            echo "<h5 style='color:red'; font-size = '13px'> {$_GET['error']} </h5>" ;
                        }
                    	?>
						<!-- Checkbox -->
						<div class="form-check m-1">
							<button class="btn-forgot"><a class="text-primary-50" href="#!">Forgot password?</a></button>
						</div>
						<button class="btn-signin btn-primary btn-lg" name="btnSignIn" type="submit" style="width: 100%;" >Sign in</button>
						<hr>
						<button class="btn-signApple btn-white btn-lg" style="width: 100%;" type="submit"><i class="bi bi-apple"></i> Sign in with an Apple</button>
						
						</div>
					</form>
				  
					<div class=" d-flex justify-content-center align-items-center mt-2" style="display: inline;">New to LinkedIn? 
						<button class="btn-join"><a class="text-primary-50" href="signup.php">Join now</a></button>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="mt-3" style="text-align: center;">
		  <div class="col-md ms-5 me-5 " >
			  <ul class="list-footer">
				  <li><p style="margin-top: 14px; display: inline-flex;">Linked
					  <i class="bi bi-linkedin"></i>
					  <span style="color: rgb(119, 108, 108) ;" class="footer-text">© 2022 </span>
					  </p>
				  </li>
				  <li><a href="" class="text-decoration-none link-dark">User Agreement</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Privacy Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Community Guidelines</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Cookie Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Copyright Policy</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Send Feedback</a></li>
				  <li><a href="" class="text-decoration-none link-dark">Language</a></li>
			  </ul>
		  </div>
	  </div>
	  </div>
	</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
</body>
</html>