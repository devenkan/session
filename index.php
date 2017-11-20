<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
	<div class="container">
		<div class="jumbotron"><h1>login</h1></div>
	</div>


		<div class="container">
		<form method="post" action="process.php">
			<div class="form-group">
				<label for="email">email</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
				<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary btn-lg">
			</div>
		</form>	
	</div>


</body>
</html>