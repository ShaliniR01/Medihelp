<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";

$symptom = $_POST['symptom'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];

$conn=mysqli_connect($servername, $username, $password,$dbname);
$sql="INSERT INTO medicine(symptom, m1, m2) VALUES ('".$symptom."','".$m1."','".$m2."')";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Added successfully');window.location='add_medicine.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>