<?php
$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";

$uname = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$conn=mysqli_connect($servername, $username, $password,$dbname);
$sql="INSERT INTO contact(uname, mail, msg) VALUES ('".$uname."','".$email."','".$msg."')";
if($conn->query($sql)===TRUE){
    echo "<script>alert('Message sent');window.location='home.html'</script>";
}else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>