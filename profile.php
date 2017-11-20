<?php
include 'session.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<h1 style="margin:50px;"> welcome <?php echo  $email ?></h1>

	<div class="btn btn-default"><a href="logout.php">logout</a>
</div>

</body>
</html>