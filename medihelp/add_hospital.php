<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";

$place = $_POST['place'];
$hname = $_POST['hname'];
$location = $_POST['loc'];
$rating = $_POST['rating'];
$phn_num = $_POST['phn_num'];

$conn=mysqli_connect($servername, $username, $password,$dbname);
$sql="INSERT INTO hospital(place, hname, location, rating, phn_num) VALUES ('".$place."','".$hname."','".$location."','".$rating."','".$phn_num."')";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Added successfully');window.location='add_hospital.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>