<?php
session_start();
session_unset();
session_destroy();
header("Location:login.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="styles12.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to the Homepage</h1>
        <p>This is a secure area. Only logged-in users can access this page.</p>
    </main>
</body>
</html>
