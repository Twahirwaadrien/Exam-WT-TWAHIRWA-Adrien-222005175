<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
   <link rel="stylesheet" href="style12.css">
</head>
<body>
    <?php include "menu.php"; ?>
    <div id="container">
        
        <p>For more information about our website, call our phone line, send a short message, email us, or visit our social platforms.</p>
        <div id="contact-container">
            <h1>Contact Us</h1>
            <div id="contact-info">
                <p><strong>Phone:</strong> +25078293041</p>
                <p><strong>Email:</strong> twahirwaadrien90@gmail.com</p>
                <p><strong>Address:</strong> 123 Main Street, Huye, Rwanda</p>
            </div>
            <div id="form">
                <form action="submit_form.php" method="post">
                    <label >Full Name</label><br>
                     <input type="name" name="Full Name" placeholder="Enter your Name" class="input" required><br><br>
                    
                    <label>Email</label><br>
                     <input type="email" name="email" placeholder="Enter your Email" class="input" required=""><br><br><label>Subject</label><br>
                    <input type="subject" name="subject" placeholder="Enter your Subject" class="input" required><br><br>
                    <label>Message</label><br>
                  <input type="message" name="Message" placeholder="Comment Here" class="input" required=""><br><br>
                  <input type="submit" name="submit" value="submit" id="button">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
