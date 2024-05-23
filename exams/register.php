<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
    <?php
    include "menu.php";
    ?>
    <br><br>
    <center>
        <form action="" method="POST" class="form"><br><br>
            <h1>Registration</h1><br><br>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>
            <label>Full name</label><br>
            <input type="text" name="fname" placeholder="Enter Your Full Name" class="input" required><br><br>
            <label>Address</label><br>
            <input type="text" name="address" placeholder="Enter Your Address" class="input"><br><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Enter Your Email" class="input"><br><br>
            <label>Telephone</label><br>
            <input type="tel" name="telephone" placeholder="Enter Your Phone" class="input"><br><br>
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Enter User Name" class="input" required><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Enter Password" class="input" required><br><br>
            <input type="submit" name="submit" value="Register" id="button">
            <input type="reset" name="reset" value="Cancel" id="btton">
        </form>
    </center>
</body>
</html>

<?php
include 'db_conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['fname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (fname, address, email, telephone, username, password) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssssss", $uname, $address, $email, $telephone, $user, $pass);
        $result = $stmt->execute();

        if ($result) {
            // Redirect to the index page or another success page
            header("Location: login.html");
            exit();
        } else {
            echo "Insert failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Preparation failed: " . $conn->error;
    }
    $conn->close();
}
?>
