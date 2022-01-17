<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/post.css">
	<link rel="icon" href="assets/images/logo-Linkedin.png">
</head>
<body>
<section style="margin-top: 40px;">
			<div class="container py-5">
			  <div class="row d-flex justify-content-center align-items-center">
				<div class="col-12 col-md-12 col-lg-8 col-xl-4  bg-light">
				  	<form class="form-signin" action="uploadPost.php" method = "post" enctype="multipart/form-data" style="border-radius: 8px; box-shadow: 0 4px 12px #00000026;">
						<div class="card-body p-5">
							<h3 class="mb-3">Create a Post</h3>
							<div class="form-outline mb-4">
								<label for="cap">Caption</label>
								<input type="text" id="inputCap" name="txtCap" class="form-control form-control-lg">
							</div>
							<div class="form-outline mb-3">
								<input type="file" id="input" name="myFile" class="form-control form-control-lg"  >
							</div>
							<hr>
							<input class="form-control form-control-lg" name="sbmUpload" value="Post"  type="submit" style="width: 100%;" >
						</div>
					</form>
				  
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>