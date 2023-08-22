<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup_form.css">
</head>
<body>
    <div class="container">
    <div class="content">
    <h1 align="center">Sign Up</h1>
    <form action="add_user.php" method="post">
        <label for="">Username:</label>
        <input type="text"class="txtarea"  name="uname" placeholder="Username." required><br>
        <label for=""><span>E-mail:</span></label>
        <input type="email" class="txtarea" name="mail" placeholder="E-mail." required><br>
        <label for="">Password:</label>
        <input type="text"class="txtarea"  name="pass" placeholder="Password." required><br>
        <button type="submit" class="btn">Sign Up</button>
    </form>
    <p class="footer">&copy;Karan Thakur@All rights reserved.</p>
    </div>
    <div class="imgBox">
        <img src="images/img2.png" alt="a boy">
    </div>
    </div>
</body>
</html>