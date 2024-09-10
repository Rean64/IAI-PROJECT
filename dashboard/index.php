<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /> 
        <title>IAI PROJECT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" /> -->
    </head>
<body>

	<div class="main-body">
		<div class="col-md-12">
				<div class="row justify-content-center align-items-center">
					<div class="col-5">
						<form action="auth.php" method="post">
							<label for="name" class="text-light">Nom</label>
							<input type="text" name="name" class="form-control mb-3 f" placeholder="Entrer le nom">
							<label for="password" class="text-light">Mot de passe</label>
							<input type="password" name="password" class="form-control mb-3 f" placeholder="Entrer le mot de passe">
							<div class="d-flex text-light">
								<input type="checkbox" name="admin" class="mr-1">Admin  &nbsp;&nbsp;
								<!-- <input type="checkbox" name="service" class="mr-1">Service Client &nbsp;&nbsp;&nbsp;&nbsp; -->
								<input type="checkbox" name="director" class="mr-1">Directeur General &nbsp;&nbsp;&nbsp;&nbsp;
								<input type="checkbox" name="chef" class="mr-1">Chef d'agence
							</div>
							<button class="btn btn-primary w-100 mt-3" name="login">Connexion</button>
						</form>
					</div>
				</div>
		</div>
	</div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
</body>
</html>
<style type="text/css">
	body{
		overflow-x: hidden;
		height: 100vh !important;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.main-body{
		background-image:linear-gradient(rgba(5, 3, 131, 0.363),rgba(0, 0, 0, 0.644)), url(preview.jpg) !important;
		background-size: cover !important;
		background-position: center !important;
		width: 100vw;
		height: 100vh;
	}

	.col-5 .f{
		border: none;
		border-bottom: 2px solid white;
		background: none;
		border-radius: none;
	}

	.col-5 .f input::placeholder{
		font-size: 20px !important;
		color: white !important;
	}

	.col-5 button{
		font-size: 16px;
	}
	.col-5{
		border: 2px solid white;
		padding: 50px;
		border-radius: 10px;
		margin-top: 100px;
		backdrop-filter: blur(5px);
	}
	.main-body label{
		font-size: 18px !important;
	}
.form-control{
	color: white !important;
}
</style>