<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
	<title>Document 1</title>
</head>
<body>

<form action="form2.php" method="GET">
	<div class="container mt-5">
		<h1 class="text-center mb-3">Welcome!</h1>
		<div class="card border-0  p-5 align-items-center m-0">
			<div class=" card-body border rounded p-5">
					<div class="mb-1">
						<div>
							<label>First Name</label>
						</div>
					<input type="text" class="" name="fname" required>
				</div>

				<div>
					<div>
						<label>Last Name</label>
					</div>
					<input type="text" class="" name="lname" required>
				</div>

				<div class="mt-2">
					<label for="male">Male</label>
					<input type="radio" name="gender" value="0" id="male" required>

					<label for="female">Female</label>
					<input type="radio" name="gender" value="1" id="female" required>
				</div>

				<div class="">
					<input type="submit" class="btn btn-success w-100 mt-3 mb-4">
				</div>
			</div>

			
			
		</div>
		
	</div>
	
</form>
	
</body>
</html>