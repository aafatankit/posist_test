<?php
include 'connect.php';

if($con){
	$id = $_POST['ownId'];
	$value = $_POST['ownValue'];
	$name = $_POST['ownName'];

	$data = $id.$value.$name;

	$hashed = password_hash($data, PASSWORD_BCRYPT);

	$q = "select * from posist where dataId = '$id' and dataValue = '$value' and dataName = '$name'";
	$result=mysqli_query($con,$q);
	$avail=mysqli_num_rows($result);
	if($avail==1){
			$row=mysqli_fetch_array($result);
			$owner = $row['dataHash'];

			if (password_verify($data, $owner)) {
			    echo 'Password is valid!';
			} 
			else {
			    echo 'Invalid password.';
			}
	}

	
}
else{
	echo "database is not connected";
}
?>

