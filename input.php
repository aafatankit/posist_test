<?php
include 'connect.php';

$id = $_POST['ownId'];
$value = $_POST['ownValue'];
$name = $_POST['ownName'];

$data = $id.$value.$name;

function generator($length = 32) {
    $characters = '123456789abcdefghijklmnpqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$q = "select * from posist";
$result=mysqli_query($con,$q);
$avail=mysqli_num_rows($result);


$count=mysqli_num_rows($result);
$nodeId= generator();
$reference = $_SESSION['parent'];
$main = $_SESSION['main'];
$hashed = password_hash($data, PASSWORD_BCRYPT);

$q2 = "insert into posist(nodeId, referenceNodeId, genesisReferenceNodeId, hashValue, dataId, dataValue, dataName, dataHash) VALUES('$nodeId','$reference','$main','$hashed','$id','$value','$name','$data')";
mysqli_query($con,$q2);
header('location:success.php');

?>