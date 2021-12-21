<html>
    <head>
        <title>MEDIHELP</title>
        <link rel="stylesheet" href="hsptl.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
table, th, td {
    border: 1px solid black;
    padding: 10px;

}
table{
border-collapse:collapse;
left:350px;
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
        <div class="head"><p class="abc"><b>HOSPITALS</b></p></div>
        <div class="bg-img"></div>
        <div class="login">
        <div class="search-container">
        <form method="POST" action="">
    <input type="text" name="place" placeholder="Enter your location" onfocus="this.value=''">
    <p id="button"><input type="submit" name="btn" value='submit'></p>

<table align="center">


<?php
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['btn']=='submit'){

echo "<tr>
<th>Hospital</th>
<th>Location</th>
<th>Rating</th>
<th>Phone number</th>
</tr>";

$servername="localhost:3307";
$username="root";
$password="";
$dbname="medihelp";
$place=$_POST['place'];

$conn=mysqli_connect($servername, $username, $password,$dbname);





$sql="SELECT * from hospital where place='$place'";



$result=$conn->query($sql);

if($result->num_rows>0){
    while($row=$result-> fetch_assoc()){
        echo "<tr><td>".$row["hname"]."</td><td>".$row["location"]."</td><td>".$row["rating"]."</td><td>".$row["phn_num"]."</td></tr>";

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