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
    <h1 align="center">Sign Up</h1>
    <div class="formField">
    <form action="add_user.php" method="post">
        Username: <input type="text" name="uname" placeholder="Username." required><br>
        E-mail: <input type="email" name="mail" placeholder="E-mail." required><br>
        Password: <input type="text" name="pass" placeholder="Password." required><br>
        <button type="submit">Sign Up</button>
    </form>
    </div>
    </div>
</body>
</html>