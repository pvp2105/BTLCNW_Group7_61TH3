<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
	<main class="bg-light">
		<section>
			<div class="container py-5">
			  <div class="row d-flex justify-content-center align-items-center">
				<div class="col-12 col-md-8 col-lg-6 col-xl-4">
                    <div class="navbar-brand text-center">
                        <h1 class="ms-5" style="color: #0a66c2;font-weight: 700; font-size: 30px;">
                                Linked<i class="bi bi-linkedin">
                                </i>
                        </h1>
                    </div>
                    <p class="text-black mb-2 text-center" style="font-size: 18px;">Make the most of your professional life</p>
				  	<form class="form-signup" action="process-signup.php" method = "post" style="border-radius: 8px;">
						<div class="card-body p-4">
			
						<div class="form-outline mb-3">
							<label for="inputEmail" class="sr-only" style="font-size: 14px; color: #00000099;">Email </label>
							<input type="email" id="inputEmail" name="txtEmail" class="form-control form-control-lg"  placeholder="Email address" required autofocus>
						</div>
			
						<div class="form-outline mb-2">
							<label for="inputPassword" class="sr-only" style="font-size: 14px;color: #00000099;">Password (6 or more characters)</label>
							<input type="password" id="inputPassword" name="txtPass" class="form-control form-control-lg" placeholder="Password" required>
						</div>
			
						<!-- Checkbox -->
						<span style="font-size: 12px; color: #00000099; text-align: center;">
							By clicking Agree & Join, you agree to the LinkedIn <a href=""> User Agreement</a>, <a href="">Privacy Policy</a>, and <a href="">Cookie Policy.</a>
						</span>
						<button class="btn-signin btn-primary btn-lg mt-2" name="btnSignup" style="width: 100%;" type="submit">Agree & Join</button>
						<hr>
						<button class="btn-signApple btn-white text-primary btn-lg" style="width: 100%;" type="submit"><i class="bi bi-google"></i> Join with Google</button>
						<?php
							if(isset($_GET['error'])){
								echo "<h5 style='color:red'> {$_GET['error']} </h5>" ;
							}
                    	?>
						<div class=" d-flex justify-content-center align-items-center mt-2" style="display: inline;">Already on LinkedIn? 
							<button class="btn-join"><a class="text-primary-50" href="login.php">Sign in</a></button>
						</div>
						</div>
					</form>
				  	<div class=" d-flex justify-content-center align-items-center mt-2" style="display: inline;">Looking to create a page for a business?  
					<button class="btn-join"><a class="text-primary-50" href="#!">Get help</a></button>
				</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div  style="text-align: center;">
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
