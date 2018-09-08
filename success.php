<?php
include 'connect.php';
if(!isset($_SESSION['id'])){
	header('location:index.php');
}
?>

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
<div class="container bg-success text-center text-white">
	<br><br><br>
	<a href="owner.php" class="btn btn-danger">Back</a>
	<br><br><br><br>
	<h2><?php echo $_SESSION['name'] ?></h2>
	<br><br>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<h3>Added Successfully</h3>
			<br>
			
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<br><br><br><br>
</div>

</body>
</html>
















