<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $dbname="medihelp";

    $email = $_POST['emailid'];
    $pass = $_POST['password'];

    $conn=mysqli_connect($servername, $username, $password,$dbname);
    $stmt = $conn->prepare("select * from signupform where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['pass'] === $pass){
            if($email==="admin@gmail.com"){
                echo "<script>alert('Successfully logged in');window.location='admin_dash.html'</script>";
            }else{
                echo "<script>alert('Successfully logged in');window.location='dashboard.html'</script>";
            }
        }else{
            echo "<script>alert('Invalid email or password');window.location='loginpage.html'</script>";
        }
    }else{
        echo "<script>alert('Invalid email or password');window.location='loginpage.html'</script>";
    }
?>