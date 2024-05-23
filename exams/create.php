
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body><br><br>
    <center>
    <form action="" method="POST" class="form" ><br><br>
        <h1>CREATE ACCOUNT</h1><br><br>
        <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
<label>Username</label><br>
<input type="text" name="username" placeholder="enter user name" class="input" required><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="enter password" class="input"><br><br>
    <input type="submit" name="submit" value="REGISTER" id="button">
    <p><a href="index.php" class="hrf">Already I have Account</a></p>

        </form> 
        </center> 
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$conn= New mysqli("localhost","root","","scs");
$uname=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"INSERT INTO user VALUES('','$uname','$pass')");
if ($sql) {
    header("location:index.php");
}
}
?>