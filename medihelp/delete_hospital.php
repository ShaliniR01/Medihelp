<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";

$place = $_POST['place'];
$hname = $_POST['hname'];

$conn=mysqli_connect($servername, $username, $password,$dbname);
$sql="DELETE FROM hospital WHERE place = '$place' AND hname = '$hname'";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Deleted successfully');window.location='delete_hospital.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>
