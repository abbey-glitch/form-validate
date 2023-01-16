<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<div class='container'>
	
		<nav class='navbar'>
			<a class='nav-logo'>Shoes</a>name
			<ul class='nav-items'>
				<li class='nav-item'>Products</li>
				<li class='nav-item'>Complaints</li>
				<li class='nav-item'>Make Designs</li>
			</ul>
		</nav>

		<?php 
		   $variable = 13;
		   $variable = (double) $ variable;
		   echo $variable 2;
        ?>

		<main class='main'>
			
			<div class='card'>
					<div class='form-div'>
						<h3>Create Your Design</h3>
						<?php include "process/forms.php"; ?>
						<form action='' method='POST'>
						<div class='form-group'>
							<label>First name</label>
							<input type='text' name='firstname' placeholder="First name">
						</div>

						<div class='form-group'>
							<label>Last name</label>
							<input type='text' name='lastname' placeholder="last name">
						</div>

						<div class='form-group'>
							<label>Email</label>
							<input type='email' name='email' placeholder="Email">
						</div>

						<div class='form-group'>
							<button type='submit' name='submit' class='submit-btn'>Create Design</button>
						</div>

						<div class='form-group'>
							<button type='button' class='normal-btn'>User Old Designs</button>
						</div>
					</form>
				</div>

				<div class='form-image'>
					<img src='images/men-shoes-6.png'>

				</div>

			</div>


		</main>

	</div>


<script src='js/scripts.js'></script>
</body>
</html>