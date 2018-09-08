<!DOCTYPE html>
<html>
<head>
	<title>Posist Test</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bg-info text-center text-white">
	<br><br><br><br>
	<h2>Owner's Data</h2>
	<br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="text-left" action="check.php" method="post">
				<h3>Owner ID</h3>
				<input type="text" class="form-control" name="ownId">
				<br><br>
				<h3>Owner Value</h3>
				<input type="text" class="form-control" name="ownValue">
				<br><br>
				<h3>Owner Name</h3>
				<input type="text" class="form-control" name="ownName">
				<br><br>
				<input type="submit" name="Submit" class="btn btn-dark">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	<br><br><br><br>
</div>

</body>
</html>
















