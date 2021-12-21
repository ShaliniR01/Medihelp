<html>
    <head>
        <title>MEDIHELP</title>
        <link rel="stylesheet" href="medicine.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
table, th, td {
    border: 1px solid black;
    padding: 10px;

}
table{
border-collapse:collapse;
left:250px;
height:30%;
color:#4CAF50;
font-family:arial;
text-align:left;
}
th{
background-color:#00B0FF;
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
width:100px
}

</style>
    </head>
<body>
    <form method="POST" action="">
        <div class="head"><p class="abc"><b>MEDICINES</b></p></div>
        <div class="bg-img"></div>
        <div class="login">
        <div class="search-container">
        <form method="POST" action="">
    <input type="text" name="symptom" placeholder="Enter your problem" onfocus="this.value=''">
    <p id="button"><input type="submit" name="btn" value='submit'></p>

          <table align="center">

<?php
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['btn']=='submit'){

echo "<h2 align='center'>MEDICINES</h2>";

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
        echo "<tr><th>Problem</th><td>".$row["symptom"]."</td></tr><tr><th>Medicine</th><td>".$row["m1"]."</td></tr><tr><th><td>".$row["m2"]."</td></th></tr>";
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

</div>
</div>
</form>
    </body>
</html>