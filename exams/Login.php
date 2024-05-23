<?php
if (isset($_POST['submit'])) {
$conn= New mysqli("localhost","root","","scs");
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
    $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$uname' AND password='$pass'");

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username']=$_POST['uname'];
        $_SESSION['password']=$_POST['password'];
        header("Location:home.php");
        exit();

    } 
        else{
            echo"Invalid email or password";
        }
     }
?>
