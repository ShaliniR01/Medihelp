<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";

$symptom = $_POST['symptom'];

$conn=mysqli_connect($servername, $username, $password,$dbname);
$sql="DELETE FROM medicine WHERE symptom = '$symptom'";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Deleted successfully');window.location='add_medicine.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>
