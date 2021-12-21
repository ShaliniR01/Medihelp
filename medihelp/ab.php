<html>
<head><title>Others</title>
<link rel="stylesheet" href="hospital.css">
<style>
body{
    background-image:url(image.jpg);
  width: 280px;
  position: absolute;
  top: 22%;
  left: 38%;
  color: black;
  background-size:cover;
}
table, th, td {
    border: 1px solid black;
    padding: 10px;

}
table{
border-collapse:collapse;

height:30%;
color:#4CAF50;
font-family:arial;
text-align:left;
}
th{
background-color:#4CAF50;
color:white;
font-size:25px;
}
tr{
background-color:#f2f2f2;
font-size:20px;
color:black;
}
tbody{
border:1px solid black;
}

</style>
</head>
<body>
<form method="POST" action="">
    <input type="text" name="symptom" placeholder="Enter roll number" onfocus="this.value=''">
    <p id="button"><input type="submit" name="btn" value='submit'></p>
    </form>

<table>

<?php
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['btn']=='submit'){

echo "<h2 align='center'>DETAILS</h2>";

$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";
$symptom=$_POST['symptom'];

$conn=mysqli_connect($servername, $username, $password,$dbname);





$sql="SELECT * from medicine where symptom='$symptom'";



$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result-> fetch_assoc()){
        echo "<tr><th>Rollno</th><td>".$row["symptom"]."</td></tr><tr><th>Name</th><td>".$row["m1"]."</td></tr>";

    }

}
else{
    echo "No results";
}

$conn->close();

}
?>



</table>
</form>
</body>
</html>