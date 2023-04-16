<?php
$servername='localhost';
$userName="root";
$password="";
$database="sign_up";
$conn= new mysqli($servername,$userName,$password,$database);
if (!$conn) {
    # code...
    die("Connection Failed.");
} else {
    # code...
    // echo "Connection established.";
    $uname=$_POST['uname'];
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $hashed_pass=md5($pass);
    $sql="INSERT INTO sign_up_db (ID,Username,E_mail,Password) VALUES(null,'$uname','$mail','$hashed_pass')";
    $res=$conn->query($sql);
    if ($res===TRUE) {
        echo"Added succesfully";
        header('location:index.php');

        # code...
    } else {
        echo "Failed.";
        # code...
    }
    
}


?>