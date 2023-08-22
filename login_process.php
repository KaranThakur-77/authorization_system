<?php
$conn=new mysqli('localhost','root','','signup_db');
if (!$conn) {
    die("connection failed!");

    # code...
} else {
    # code...
    $username=$_POST['name'];
    $password=$_POST['pass'];
    $hashed_pass=md5($password);
    $sql="SELECT * FROM sign_up_db WHERE Username='$username' AND Password='$hashed_pass' LIMIT 1";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        header('location:admin.php');
        # code...
    } else {
        # code..
        
        header('location:user.php');
    }
    
}

?>