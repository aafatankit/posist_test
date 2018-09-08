<?php
include 'connect.php';

$id = $_POST['ownId'];
$value = $_POST['ownValue'];
$name = $_POST['ownName'];

$data = $id.$value.$name;


$q = "select * from posist where dataId = $id and dataName = '$name'";
$result=mysqli_query($con,$q);
$avail=mysqli_num_rows($result);
	if($avail == 1){
			$row=mysqli_fetch_array($result);
			$_SESSION['id'] = $row['nodeNumber'];
			$_SESSION['main'] = $row['genesisReferenceNodeId'];
			$_SESSION['parent'] = $row['nodeId'];
			$_SESSION['name'] = $row['dataName'];

			header('location:owner.php');
	}
	else{
		echo "Invalid";
	}


?>